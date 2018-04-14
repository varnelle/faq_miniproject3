<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    private $rules = array(
        'body' => 'required|alpha|min:5',
    );
    protected $fillable = ['body'];

    private $errors;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }


    public function errors()
    {
        return $this->errors;
    }
}
