<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	[
				'question' => 'أول صحابي حيّا الرسول صلى الله عليه وسلم بتحية الإسلام هو...؟',
				'first_answer' => 'أبو بكر الصديق',
				'second_answer' => 'أبو أيوب الأنصاري',
				'third_answer' => 'أبو ذر الغفاري',
				'fourth_answer' => 'أبو موسى الأشعري',
				'true_answer' => ''
    		],
    		[
				'question' => 'ما هو البحر الذي يسمى بحر القلزم؟',
				'first_answer' => 'البحر العربي',
				'second_answer' => 'البحر الأحمر',
				'third_answer' => 'بحر قزوين',
				'fourth_answer' => 'البحر الأسود',
				'true_answer' => ''
    		],
    		[
				'question' => 'العالم الذي أخترع التلفون هو...؟',
				'first_answer' => 'الكسندر غراهام بيل',
				'second_answer' => 'جوزف برستلي',
				'third_answer' => 'بجوار سيكو رسكي',
				'fourth_answer' => 'فلهلم رونتفن',
				'true_answer' => ''
    		]
    	]);
    }
}
