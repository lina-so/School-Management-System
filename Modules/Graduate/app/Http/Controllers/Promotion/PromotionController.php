<?php

namespace Modules\Graduate\Http\Controllers\Promotion;

use Illuminate\Http\Request;
use Modules\User\Models\Student\Student;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    public function store(PromotionRequest $request)
    {
        DB::beginTransaction();
        $data = $request->validated();

        $students = Student::where('Grade_id',$request['from_grade'])->where('Classroom_id',$request['from_classroom'])->where('section_id',$request['from_section'])->where('academic_year',$request['academic_year'])->get();

        if($students->count() < 1){
            return response()->json([
                "error"=>"no data in students table found"
            ]);
        }

        // update in table student
        foreach ($students as $student){

            $ids = explode(',',$student->id);
            student::whereIn('id', $ids)
                ->update([
                    'Grade_id'=>$request['from_grade'],
                    'Classroom_id'=>$request['from_classroom'],
                    'section_id'=>$request['from_section'],
                    'academic_year'=>$request['academic_year_new'],
                ]);

            // insert in to promotions
            Promotions::updateOrCreate([
                'student_id'=>$request['student_id'],
                'from_grade'=>$request['from_grade'],
                'from_Classroom'=>$request['from_classroom'],
                'from_section'=>$request['from_section'],
                'to_grade'=>$request['to_grade'],
                'to_Classroom'=>$request['to_classroom'],
                'to_section'=>$request['to_section'],
                'academic_year'=>$request['academic_year'],
                'academic_year_new'=>$request['academic_year_new'],
            ]);

        }
        DB::commit();
        return response()->json(['success'=>'promotion done successfully'],200);


        DB::rollback();

    }
}
