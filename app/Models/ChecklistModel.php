<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChecklistFotos;

class ChecklistModel extends Model
{
    use HasFactory;

    protected $table = 'tblchecklist';

    protected $fillable = [
        'id_checklist',
        'fecha',
        'respuesta1',
        'respuesta2',
        'respuesta3',
        'respuesta4',
        'respuesta5',
        'respuesta6',
        'respuesta7',
        'observaciones',
    ];

    public function checklist()
    {
        return $this->belongsTo(ChecklistFotos::class, 'id_checklist', 'id');
    }
}
