<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'birthday', 'address', 'sex', 'city', 'confirmation_code', 'confirmed', 'card_id', 'balance'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function barcodes(){
        return $this->belongsToMany('App\Barcode')->withPivot('bin_id')->withTimeStamps();
    }
    public function isSuperadmin(){
        return $this->role->id === 1;
    }

    public function isAdmin(){
        return $this->role->id === 2;
    }

    public function isUser(){
        return $this->role->id === 3;
    }

    public function getFirstNameAttribute(){
        $data = explode(' ', $this->name);
        return $data[0];
    }

    public function getLastNameAttribute(){
        $data = explode(' ', $this->name);
        return $data[1];
    }
}
