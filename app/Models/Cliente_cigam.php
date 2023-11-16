<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente_cigam extends Model
{
    use HasFactory;
    protected $table = 'GEEMPRES';
    protected $connection = 'oracle';
    protected $fillable = ['nome_completo','municipio','uf','contato'];

    public static function getAll()
    {
        return self::where('ativo', 1)
            ->where('pessoa', 0)
            ->select('nome_completo', 'municipio', 'uf', 'contato')
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

    public static function createClient(array $data)
    {
        return self::create($data);
    }


}
