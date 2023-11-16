<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projeto extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    // Colunas da tabela
    protected $fillable = ['numero','nome','cidade','estado','id_cliente','data_inicio_montagem_esperado','data_inicio_montagem_real','custo_montagem_esperado','custo_montagem_real'];
    public static function getAll()
    {
        return self::all();
    }
    public static function getByCondition($column, $value)
    {
        return self::where($column, $value)->get();
    }

    public static function getById($id)
    {
        return self::find($id);
    }

    public static function updateById($id, $data)
    {
        $registro = self::find($id);
        $registro->fill($data);
        $registro->save();
        return $registro;
    }
    public static function deleteById($id)
    {
        $registro = self::find($id);
        $registro->delete();
    }

    public static function createProject(array $data)
    {
        return self::create($data);
    }
}
