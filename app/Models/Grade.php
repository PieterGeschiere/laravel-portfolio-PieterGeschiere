<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function addResult($result) {
        if ($this->best_grade < $result) {
            if ($result >= $this->lowest_passing_grade){
                $this->passed_at = now();
            }
            $this->best_grade = $result;
            $this->save();
        }

    }
}
