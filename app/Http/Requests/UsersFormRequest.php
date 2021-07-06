<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        switch ($this->method()) {
            case 'POST':    //Nuevo
                $rules = [
                    'email'=>'required|unique:users|email|max:255',
                    'password'=>'required|max:255',
                    'name'=>'required|max:100',
                    'celular'=>'max:10',
                    'cedula'=>'required|unique:users|max:11',
                    'nacimiento'=>'required',
                    'remember_token'=>'max:100',
                    
                ];
                break;                
            case 'PATCH':   //edicion
                $rules = [
                    'email'=>'required|unique:users,id,'.$this->id.',id|email|max:255',
                    'password'=>'required|max:255',
                    'name'=>'required|max:100',
                    'celular'=>'max:10',
                    'cedula'=>'required|unique:users,id,'.$this->id.',id|max:11',
                    'nacimiento'=>'required',
                    'remember_token'=>'max:100',
                    
                ];
                break;
            case 'DELETE':
            default:
               
        }

        return $rules;



    }
}
