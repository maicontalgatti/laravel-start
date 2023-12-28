<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistenciaHoras extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'horas_assistencias'; // Substitua 'sua_tabela' pelo nome real da sua tabela

    protected $fillable = [
        'dia',
        'h_inicio_m',
        'Feriado',
        'h_fim_m',
        'h_total_m',
        'h_inicio_t',
        'h_fim_t',
        'h_total_t',
        'h_inicio_n',
        'h_fim_n',
        'h_total_n',
        'h_totais',
        'h_normais',
        'h_50',
        'h_100',
        'h_noturnas',
    ];
}
