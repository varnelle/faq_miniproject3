<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    private $rules = array(
        'body' => 'required|alpha|min:10',
    );
    protected $fillable = ['body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
