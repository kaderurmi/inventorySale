<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    //use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['firstName','lastName','email','mobile','password','otp'];
    protected $attributes = [
        'otp' => '0'
    ]; 

}
