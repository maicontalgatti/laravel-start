<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa_cigam extends Model
{
    use HasFactory;
    protected $table = 'GEEMPRES';
    protected $connection = 'oracle';

    // Colunas da tabela
    protected $fillable = ['cd_empresa','nome_completo', 'municipio', 'uf', 'fone'];

    public static function getAll()
    {
        return self::where('ativo', 1)
            ->where('pessoa', 1)
            ->select('nome_completo', 'municipio', 'uf', 'fone')
            ->get();
    }
    public static function getByCondition($column, $value)
    {
        return self::where($column, $value)->get();
    }

    public static function getById($id)
    {
        return self::find($id);
    }
    public static function createPessoa($data)
    {
        // return self::create($data);
    }
    public static function updateById($id, $data)
    {
        //$registro = self::find($id);
        //$registro->fill($data);
        //$registro->save();
        //return $registro;
    }
    public static function deleteById($id)
    {
        // $registro = self::find($id);
        // $registro->delete();
    }


}
