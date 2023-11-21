<?php

namespace App\Models\Escuela;

use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvaluation extends Model
{
    use ClearsResponseCache, HasFactory;

    protected $table = 'user_evaluations';

    protected $fillable = [
        'completed',
        'user_id',
        'evaluation_id',
        'score',
        'quiz_size',
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function evaluations()
    {
        return $this->belongsToMany('App\Models\Evaluation');
    }

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class, 'user_evaluation_id');
    }
}
