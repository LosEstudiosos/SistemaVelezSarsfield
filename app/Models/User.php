<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'last_name',
        'dni',
        'estado_cuenta_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function directivo(){
        return $this->hasOne('App\Models\directivo');
    }
    
    public function tutore(){
        return $this->hasOne('App\Models\tutore');
    }

    public function preceptore(){
        return $this->hasOne('App\Models\preceptore');
    }

    public function responsable(){
        return $this->hasOne('App\Models\responsable');
    }

    public function Estado_Cuenta(){ 
        return $this->belongsTo('App\Models\Estado_Cuenta');
    }

    public function actas_reuniones(){
        return $this->belongsToMany('App\Models\actas_reuniones');
    }

    public function alumno(){
        return $this->hasOne('App\Models\alumno');
    }

    public function profesore(){
        return $this->hasOne('App\Models\profesore');
    }

    public function Recordatorios(){
        return $this->hasMany('App\Models\Recordatorio');
    }

    
    /**
     * Scope a query to only include mails to the User Logged.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUserIDAlumno($query)
    {
        return $query->join("model_has_roles", "model_has_roles.model_id", "=", "users.id")
                    ->join("roles", "roles.id", "=", "model_has_roles.role_id")
                    ->where("roles.name", "=", 'Alumno')
                    ->where("model_has_roles.model_type", "=", "App\Models\User")
                    ->select("users.id")->distinct(); 
    }
}
