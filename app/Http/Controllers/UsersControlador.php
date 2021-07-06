<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Users;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;   
use App\Http\Requests\UsersFormRequest;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage; 

class UsersControlador extends Controller
{
    public function __construct(){
        
    }
    public function index(Request $request){
        
        $hoy=Carbon::now();
        if ($request){
            $query=trim($request->get('searchText'));
            $userss=DB::table('users')
            
            ->paginate(10);
            return view('users.index',["hoy"=>$hoy,"userss"=>$userss,"searchText"=>$query,]);
        }
    }
    
    public function create(){
        $hoy=Carbon::now();
        return view("users.create",["hoy"=>$hoy,]);
    }
    public function store (UsersFormRequest $request){
        //try{
            $users=new Users;
            $users->email=$request->get('email');
            $users->password=bcrypt($request->get('password'));
            $users->name=$request->get('name');
            $users->celular=$request->get('celular');
            $users->cedula=$request->get('cedula');
            $users->nacimiento=$request->get('nacimiento');
            $users->remember_token=$request->get('remember_token');
            $users->save();
            $user = User::find($users->id);
            $user->assignRole('User');
            toastr()->success(__('Save was successful...'));
        // }catch(\Exception $e){
        //     DB::rollback(); 
        //     toastr()->error(__('Save was not successful'));
        // }
        return Redirect::to('users');
    }
    public function show($id){
        return view("users.show",["users"=>users::findOrFail($id),]);
    }
    public function edit($id){
        return view("users.edit",["users"=>users::findOrFail($id),]);
    }
    public function update(UsersFormRequest $request,$id){
        try{
            $users=Users::findOrFail($id);
    		$users->email = $request->get('email');
            $users->password = bcrypt($request->get('password'));
            $users->name = $request->get('name');
            $users->celular = $request->get('celular');
            $users->cedula = $request->get('cedula');
            $users->nacimiento = $request->get('nacimiento');
            $users->remember_token = $request->get('remember_token');
            $users->update();
            toastr()->success(__('Updating was successful...'));
        }catch(\Exception $e){
            DB::rollback(); 
            toastr()->error(__('Updating was not successful'));
        }  
        return Redirect::to('users');
    }
    public function destroy($id){
        try{
            DB::beginTransaction();
            $users=Users::findOrFail($id);
            $users->delete();
            DB::commit();
            toastr()->success(__('Deleting was successful...'));
        }catch(\Exception $e){
            DB::rollback(); 
            toastr()->error(__('Deleting was not successful'));
        }
        return Redirect::to('users');
    }
}
