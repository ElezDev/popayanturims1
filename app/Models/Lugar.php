<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugar
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $horarios
 * @property $descripcion
 * @property $foto_url
 * @property $tipolugar_id
 * @property $rutas_id
 * @property $gastronomia_id
 * @property $evento_id
 * @property $calificasiones_id
 * @property $servicios_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Calificacione $calificasione
 * @property Convenio[] $convenios
 * @property Evento $evento
 * @property Gastronomia $gastronomia
 * @property Ruta $ruta
 * @property Servicio $servicio
 * @property Tipolugar $tipolugar
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lugar extends Model
{

    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'horarios' => 'required',
		'descripcion' => 'required',
        'foto_url' => 'required',
		'tipolugar_id' => 'required',
		'ruta_id' => 'required',
		'gastronomia_id' => 'required',
		'evento_id' => 'required',
		'calificacione_id' => 'required',
		'servicio_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    // protected $fillable = ['nombre','direccion','horarios','descripcion','foto_url', 'tipolugar_id','ruta_id','gastronomia_id','evento_id','calificasione_id','servicio_id' ];
    protected $guarded=[];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function calificacione()
    {
        return $this->hasMany('App\Models\Calificacione', 'id', 'calificaciones_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function convenios()
    {
        return $this->hasMany('App\Models\Convenio', 'lugares_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function evento()
    {
        return $this->hasMany('App\Models\Evento', 'id', 'evento_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gastronomia()
    {
        return $this->hasMany('App\Models\Gastronomia', 'id', 'gastronomia_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasMany('App\Models\Ruta', 'id', 'rutas_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasMany('App\Models\Servicio', 'id', 'servicios_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipolugares()
    {
        return $this->hasMany(Tipolugar::class, 'id', 'tipolugar_id');
    }

    public function images(){
        return $this->morphMany('App\Models\Image','imageable');
      }

}
