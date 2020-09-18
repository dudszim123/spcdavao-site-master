<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Applicant extends Model
{
    protected $table = 'applicants';
    protected $guarded = [];

    public function program() {
        return $this->belongsTo(App\Program::class);
    }

    // public function program() {
    //     return $this->hasOne(App\Program::class);
    // }

}
