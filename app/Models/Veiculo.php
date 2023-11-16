<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class veiculo extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = ['marca', 'modelo', 'placa', 'km_aquisicao', 'km_atual', 'per_troca_oleo_km', 'ultima_troca_oleo_km'];

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
    public static function createVehicle($data)
    {
        return self::create($data);
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




}
