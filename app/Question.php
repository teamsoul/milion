<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = [
		'question',
		'first_answer',
		'second_answer',
		'third_answer',
		'fourth_answer',
		'true_answer'
    ];

    public function scopeQuestion($query, $id)
    {
        return $query->find($id);
    }
}
