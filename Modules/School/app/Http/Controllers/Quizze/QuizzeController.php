<?php

namespace Modules\School\Http\Controllers\Quizze;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Modules\School\Models\Quizze\Quizze;
use Modules\School\Http\Requests\Quizze\QuizzeRequest;
use Modules\School\Http\Requests\Question\QuestionRequest;

class QuizzeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('school::index');
        $quizzes = Quizze::all();
        return response()->json(['success'=>'quizzes retrieved successfully'],200);
    }



     /**
     * Store a newly created quize/Exam by the teacher .
     */

     public function store(QuizzeRequest $quizzeRequest, QuestionRequest $questionRequest)
     {
         $quizzeData = $quizzeRequest->validated();
         $questionData = $questionRequest->validated();

         DB::transaction(function() use ($quizzeData, $questionData) {
             $quize = Quizze::create($quizzeData);

             $questionsToCreate = [];
             foreach ($questionData['questions'] as $data) {
                 $questionsToCreate[] = [
                     'title' => $data['title'],
                     'answers' => $data['answers'],
                     'right_answer' => $data['right_answer'],
                     'score' => $data['score'],
                     'question_type' => $data['question_type'],
                     'quizze_id' => $quize->id,
                 ];
             }

             $quize->questions()->createMany($questionsToCreate);
         });

         return response()->json(['success' => 'Quiz stored successfully'], 201);
     }

    /**
     * Show the specified resource.
     */
    public function show(Quizze $quize)
    {
        return response()->json(['success'=>'quize details','quize'=>$quize]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(QuizzeRequest $request, Quizze $quize)
    {
        $quize->update($request->validated());
        return response()->json(['success'=>'quize updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quizze $quize)
    {
        $quize->delete();
        return response()->json(['success'=>'quize deleted successfully'],201);
    }
}
