<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'USUARIOS';

    /**
     * Primary Key.
     *
     * @var string
     */
    protected $primaryKey = 'IDUSUARIO';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NOMBRE','EMAIL','CONTRASENA','APELLIDO_PATERNO','APELLIDO_MATERNO','EDAD','NICKNAME','FECHMOVE','HOSTNAME','IDROL','ID_ESTADO'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'CONTRASENA', 'TOKEN',
    ];

    public function getRememberToken()
    {
        return $this->TOKEN;
    }

    public function setRememberToken($value)
    {
        $this->TOKEN = $value;
    }

    public function getRememberTokenName()
    {
        return 'TOKEN';
    }
}
