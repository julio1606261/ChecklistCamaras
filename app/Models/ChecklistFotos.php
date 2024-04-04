<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChecklistModel;

class ChecklistFotos extends Model
{
    use HasFactory;

    protected $table = 'tblchecklist_fotos';

    protected $fillable = [
        'id_checklistCamaras',
        'foto',
    ];

    public function checklist()
    {
        return $this->hasMany(ChecklistModel::class, 'id_checklist', 'id');
    }
}
