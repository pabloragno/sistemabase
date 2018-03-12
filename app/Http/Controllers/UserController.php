<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Datatables;

use App\User;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    { 
       return view('admin.users.index');  
    }

    public function getData()
    {
       $users = User::select(['id', 'name', 'email']); 
       
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '
                        <button type="button" onclick="my('.$user->id.')" class="btn btn-success edit-user" data-toggle="modal" id="ed'.$user->id.'" data-target="#modal-edituser" iduser="'.$user->id.'"><i class="fa fa-pencil"></i></button>
                        <a href="users/'.$user->id.'/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>';
                        })->make(true);              
    }
    
    public function create()
    {
        
        return view('admin.users.create');
    }

    
    public function store(UserRequest $request)
    {
        $data = User::create($request->all());
        dd($data);
        alert()->success('','Guardado con éxito')->autoclose(3000);
        return redirect()->route('users.index');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);    
        return(compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function dele($id)
    {
        $user = User::find($id)->delete();
        alert()->success('','Usuario borrado con éxito')->autoclose(3000);
        return redirect()->route('users.index');
    }
}
