<?php

//namespace Claroenssurance;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Users extends Model
{
    use HasFactory, Notifiable;
     use HasRoles; 

    protected $table='users';

    protected $primaryKey='id';

    public $timestamps=true;


    protected $fillable =[
    	'id','email','password','name','celular','cedula','nacimiento','email_verified_at','remember_token','created_at','updated_at'
    ];

    protected $guarded =[

    ];
}
