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
            'question' => 'question one',
            'type' => 'select',//select, multi-select or essay
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => 'first answer to question one',
            'confirmed' => false,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => 'second answer to question one',
            'confirmed' => true,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => 'third answer to question one',
            'confirmed' => false,//true for correct anwser
        ]);


        $question = Question::create([
            'question' => 'question two',
            'type' => 'multi-select',//select, multi-select or essay
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => 'first answer to question two',
            'confirmed' => false,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => 'second answer to question two',
            'confirmed' => true,//true for correct anwser
        ]);
        $answer = Answers::create([
            'question_id' => $question->id,
            'answer' => 'third answer to question two',
            'confirmed' => false,//true for correct anwser
        ]);

        $question = Question::create([
            'question' => 'question two',
            'type' => 'essay',//select, multi-select or essay
        ]);


    }
}
