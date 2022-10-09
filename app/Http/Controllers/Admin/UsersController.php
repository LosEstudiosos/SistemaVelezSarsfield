<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estado_Cuenta;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list(){
        $listUsers = User::all();
        $listEstados = Estado_Cuenta::all();
        return view('admin.user.list', compact('listUsers','listEstados'));
    }

    public function new(){
        return view('admin.user.new');
    }
    
    public function save(Request $request){
        $User = new User();
        $User->name = $request->name;
        $User->last_name = $request->last_name;
        $User->email = $request->email;
        $User->password = $request->password;
        $User->estado_cuenta_id = 1;
        $User->save();
        return redirect()->route('admin.user.list');
    }

    public function edit($id){
        $user = User::where('id',$id)->get();
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request){
        User::where('id',$request->id)
                    ->update(array(
                        'name'=>$request->name,
                        'last_name'=>$request->last_name,
                        'email'=>$request->email,
                        'password'=>$request->password,
                    ));
        return redirect()->route('admin.user.list');
    }

    public function discharge(Request $request){
        $newEstado = 1;
        if($request->estado_cuenta_id == 1){
            $newEstado = 2;
        }
        User::where('id',$request->id)
                    ->update(array(
                        'estado_cuenta_id'=> $newEstado
                    ));
        return redirect()->route('admin.user.list');
    }

    public function delete(Request $request){
        User::where('id',$request->id)->delete();
        return redirect()->route('admin.user.list');
    }
}
