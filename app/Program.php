<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Program extends Model
{
    protected $guarded = [];

    public function applicant() {
        return $this->hasOne(App\Applicant::class);
    }
    // public function program() {
    //     return $this->belongsTo(App\Program::class);
    // }
}
