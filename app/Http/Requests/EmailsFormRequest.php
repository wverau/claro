<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmailsFormRequest extends Request
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
                    'asunto'=>'required|max:200',
                    'destinatario'=>'required|email|max:100',
                    'mensaje'=>'required|max:16777215',
                    'users_id'=>'',
                    
                ];
                break;                
            case 'PATCH':   //edicion
                $rules = [
                    'asunto'=>'required|max:200',
                    'destinatario'=>'required|email|max:100',
                    'mensaje'=>'required|max:16777215',
                    'users_id'=>'',
                    
                ];
                break;
            case 'DELETE':
            default:
               
        }

        return $rules;



    }
}
