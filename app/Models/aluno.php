<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    use HasFactory;

    protected $table = 'tb_alunos';
    protected $primaryKey = 'cd_aluno';

    protected $fillable = [
        'nm_aluno',
        'nm_curso',
        'nu_ano',
        'nu_semestre',
    ];
}
