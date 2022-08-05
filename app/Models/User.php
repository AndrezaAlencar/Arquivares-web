<?php

namespace App\Models;

use App\Notifications\EmailConfirmation;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $title = 'usuários';

    protected static $logAttributes = [
        'name',
        'email',
        'email_verified_at',
        'password',
    ];

    protected static $logOnlyDirty = true;

    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'email'=> 'string',
        'email_verified_at' => 'datetime',
        'password'=>'string'
    ];
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */

    public function getCasts(){
        return $this->casts;
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id_user', 'id');
    }

    public function permissionProfile()
    {
        return $this->hasMany(PermissionProfile::class, 'id_user', 'id');
    }

   

   

    // public function typeLabel()
    // {
    //     switch ($this->attributes['type']) {
           
           
    //         case 2:
    //             return "dp";
    //             break;
            
    //         case 4:
    //             return "gestor";
    //             break;
    //         case 7:
    //             return "Planejamento";
    //             break;
    //         case 8:
    //             return "Comercial";
    //             break;
    //         case 10:
    //                 return "Financeiro";
    //                 break;
    //         case 11:
    //             return "Administrador";
    //             break;
    //         case 16:
    //             return "Master";
    //             break;
    //     }
    // }

    // public function group()
    // {
    //     if ($this->attributes['type'] > 10 && $this->attributes['type'] < 15) {
    //         return "admin";
    //     } else if ($this->attributes['type'] == 8 || $this->attributes['type']  == 9) {
    //         return "commercial";
    //     } else if ($this->attributes['type'] == 7) {
    //         return "planning";
    //     } else if ($this->attributes['type'] >= 2 && $this->attributes['type'] < 6) {
    //         return "dp";
    //     } else if ($this->attributes['type'] == 6) {
    //         return "monitor";
    //     } else if ($this->attributes['type'] == 10) {
    //         return "gestor";
    //     } else if ($this->attributes['type'] == 15) {
    //         return "vader";
    //     } else if ($this->attributes['type'] == 16) {
    //         return "master";
    //     } else {
    //         return null;
    //     }
    // }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function getLoginAtAttribute()
    {
        $date = '';
        if (!empty($this->attributes['login_at'])) {
            $date = date('d/m/Y H:i', strtotime($this->attributes['login_at']));
        }
        return $date;
    }

    public function getCreatedAtAttribute()
    {
        return date('d/m/Y H:i', strtotime($this->attributes['created_at']));
    }

    public function getUpdatedAtAttribute()
    {
        return date('d/m/Y  H:i', strtotime($this->attributes['updated_at']));
    }




    public function getCoverAttribute()
    {
        if ($this->attributes['cover'] != null) {
            return Storage::url($this->attributes['cover']);
        }
        return null;
    }

    public function cover()
    {
        return $this->attributes['cover'];
    }
}
