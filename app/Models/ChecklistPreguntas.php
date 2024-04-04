<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChecklistPreguntas extends Model
{
    use HasFactory;

    protected $table = 'tblchecklist_preguntas';

    protected $fillable = [
        'preguntas',
    ];
}
