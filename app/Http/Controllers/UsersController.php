<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


class UsersController extends Controller
{
    public function index(){
        $usuarios = users::get();
        return view('users.list', ['usuarios' => $usuarios]);
    }
    public function new(){
        return view('users.form');
    }

    public function add(Request $request){
        $usuarios = new Users;

        $usuarios = $usuarios->create($request->all());

        return redirect()->route('/users.index');
    }

    public function edit($id){
        $usuarios = Users::findOrFail($id);
        return view('users.form', ['usuarios' => $usuarios]);
    }

    public function delete(){
        return view('users.form');
    }
}
