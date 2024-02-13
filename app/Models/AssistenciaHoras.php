<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistenciaHoras extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'horas_assistencias';
    protected $fillable = ['dia','h_inicio_m','Feriado','h_fim_m','h_total_m','h_inicio_t','h_fim_t','h_total_t','h_inicio_n','h_fim_n','h_total_n','h_totais','h_normais','h_50','h_100','h_noturnas','id_tecnico','id_assistencia'];
    public static function getAll()
    {
        return self::all();
    }
    public static function getByCondition($column, $value)
    {
        return self::where($column, $value)->get();
    }
    // Função para obter IDs de técnicos por ID de assistência
    public static function getTecnicosPorAssistencia($idAssistencia)
    {
        return self::where('id_assistencia', $idAssistencia)->distinct('id_tecnico')->pluck('id_tecnico')->values();
    }

}
