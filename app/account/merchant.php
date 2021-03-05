<?php

namespace App\account;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\merchant as Authenticatable;
use Illuminate\Notifications\Notifiable;

class merchant extends Authenticatable

{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //creating relationship between user and school 
    //public function schools(){
       // return $this->hasmany('App\school');
   // } 

    //creating relationship between merchant and invoices 
    public function invoices(){
        return $this->hasmany('App\invoice');
    } 
}
