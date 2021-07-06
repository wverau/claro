<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Emails;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;   
use App\Http\Requests\EmailsFormRequest;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage; 

class EmailsControlador extends Controller
{
    public function __construct(){
        
    }
    public function index(Request $request){
        $userss=DB::table('users')->get();
        
        if ($request){
            $query=trim($request->get('searchText'));
            $emailss=DB::table('emails')
            ->join('users','emails.users_id','=','users.id')
            ->select('emails.id','emails.asunto','emails.destinatario','emails.mensaje','emails.created_at','emails.updated_at','emails.users_id','users.name as name_users')
            ->where('users_id',auth()->user()->id)
            ->paginate(10);
            return view('emails.index',["emailss"=>$emailss,"searchText"=>$query,"userss"=>$userss]);
        }
    }
   
    public function create(){
        $hoy=Carbon::now();
        $userss=DB::table('users')->get();
        return view("emails.create",["hoy"=>$hoy,"userss"=>$userss]);
    }
    public function store (EmailsFormRequest $request){
        //try{
            $emails=new Emails;
            $emails->asunto=$request->get('asunto');
            $emails->destinatario=$request->get('destinatario');
            $emails->mensaje=$request->get('mensaje');
            $emails->users_id = auth()->user()->id;
            //$emails->users_id=$request->get('users_id');
            $emails->save();
            toastr()->success(__('Save was successful...'));
        // }catch(\Exception $e){
        //     DB::rollback(); 
        //     toastr()->error(__('Save was not successful'));
        // }
        return Redirect::to('emails');
    }
    public function show($id){
        $userss=DB::table('users')->get();
        return view("emails.show",["emails"=>emails::findOrFail($id),"userss"=>$userss]);
    }
    public function edit($id){
        $userss=DB::table('users')->get();
        return view("emails.edit",["emails"=>emails::findOrFail($id),"userss"=>$userss]);
    }
    public function update(EmailsFormRequest $request,$id){
        try{
            $emails=Emails::findOrFail($id);
    		$emails->asunto = $request->get('asunto');
            $emails->destinatario = $request->get('destinatario');
            $emails->mensaje = $request->get('mensaje');
            //$emails->users_id = $request->get('users_id');
            $emails->update();
            toastr()->success(__('Updating was successful...'));
        }catch(\Exception $e){
            DB::rollback(); 
            toastr()->error(__('Updating was not successful'));
        }  
        return Redirect::to('emails');
    }
    public function destroy($id){
        try{
            DB::beginTransaction();
            $emails=Emails::findOrFail($id);
            $emails->delete();
            DB::commit();
            toastr()->success(__('Deleting was successful...'));
        }catch(\Exception $e){
            DB::rollback(); 
            toastr()->error(__('Deleting was not successful'));
        }
        return Redirect::to('emails');
    }
}
