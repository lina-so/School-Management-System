<?php

namespace Modules\School\Http\Controllers\Quizze;

use Illuminate\Http\Request;
use Modules\School\Models\Score;
use App\Http\Controllers\Controller;
use Modules\School\Models\Quizze\Quizze;
use Modules\School\Models\Question\Question;
use Modules\School\Http\Requests\Quizze\ExamRequest;

class ExamController extends Controller
{
    // TODO::the exam is finished and the student doesn't answer all the questions

    public function startExam($examId)
    {
        $exam = Quizze::find($examId);

        if (!$exam) {
            return response()->json(['error' => 'Exam not found'], 404);
        }

        $currentDateTime = now();
        $startDateTime = \Carbon\Carbon::parse($exam->start_date);
        $endDateTime = $startDateTime->copy()->addMinutes($exam->duration);

        if ($currentDateTime->isBetween($startDateTime, $endDateTime)) {
            return response()->json(['message' => 'You can Enter the exam.'], 200);
        } else {
            return response()->json(['error' => 'Exam not available at this time.'], 403);
        }
    }


    public function submitAnswers(ExamRequest $request, $examId)
    {
        $exam = Exam::find($examId);
        if (!$exam) {
            return response()->json(['error' => 'Exam not found'], 404);
        }

        $validatedData = $request->validate();

        $score = 0;
        foreach ($validatedData['answers'] as $answer) {
            $question = Question::find($answer['question_id']);

            if ($question->right_answer == $answer['answer']) {
                $score += $question->score;
            }
        }

        Score::create([
            'student_id' => auth()->id(),
            'exam_id' => $examId,
            'score' => $score,
        ]);

        return response()->json(['message' => 'Exam submitted successfully!', 'score' => $score], 201);
    }


}
