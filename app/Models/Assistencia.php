<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistencia extends Model
{
    use HasFactory;
    protected $connection = 'mysql';

    // Colunas da tabela
    protected $fillable = ['tipo_assistencia','status','garantia','data_chamado','data_atendimento','descricao','id_cliente','id_projetos','titulo','percentage','horario_inicio','horario_fim'];
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
    public static function createAssistance($data)
    {

        // Crie a assistência
        $assistencia = static::create($data);

        // Retorne o modelo da assistência
        return $assistencia;
    }
    /*public static function createAssistance($data)
    {
        return self::create($data);
    }*/
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
    public function cliente()
    {
        return $this->belongsTo(Cliente_cigam::class, 'id_cliente', 'cd_empresa');
    }
    public static function contarAssistenciasAbertas()
    {
        return self::where('status', 'Aberto')->count();
    }
    public static function contarAssistenciasFechado()
    {
        return self::where('status', 'Fechado')->count();
    }
    public static function contarAssistenciasTipoMecanica()
    {
        return self::where('tipo_assistencia', 'mecanica')->count();
    }
    public static function contarAssistenciasTipoEletrica()
    {
        return self::where('tipo_assistencia', 'eletrica')->count();
    }
    public static function contarAssistenciasComGarantia()
    {
        return self::where('garantia', 'sim')->count();
    }
    public static function contarAssistenciasSemGarantia()
    {
        return self::where('garantia', 'nao')->count();
    }
}
