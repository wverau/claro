<?php

//namespace Claroenssurance;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    protected $table='emails';

    protected $primaryKey='id';

    public $timestamps=true;


    protected $fillable =[
    	'id','asunto','destinatario','mensaje','created_at','updated_at','users_id'
    ];

    protected $guarded =[

    ];
}
