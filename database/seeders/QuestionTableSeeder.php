<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answers;
use App\Models\Question;


class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = Question::create([
            'question' => 'What is the Square Root of 25?',
            'type' => 'select',//select, multi-select or essay
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(A). 25',
            'confirmed' => false,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(B). 5',
            'confirmed' => true,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(C). 15',
            'confirmed' => false,//true for correct anwser
        ]);


        $question = Question::create([
            'question' => 'Find x in the following equation: 2x - 5 = 9',
            'type' => 'select',//select, multi-select or essay
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(A). 7',
            'confirmed' => true,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(B). 5',
            'confirmed' => false,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(C). 2',
            'confirmed' => false,//true for correct anwser
        ]);


        $question = Question::create([
            'question' => 'Which of these is/are TRUE about a parallelogram?',
            'type' => 'multi-select',//select, multi-select or essay
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(A). Opposite sides are equal.',
            'confirmed' => false,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(B). Opposite lines never meet.',
            'confirmed' => true,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => '(C). All angles are at 45 degrees.',
            'confirmed' => false,//true for correct anwser
        ]);

        $question = Question::create([
            'question' => 'Derive the Almighty formular',
            'type' => 'essay',//select, multi-select or essay
        ]);


    }
}
