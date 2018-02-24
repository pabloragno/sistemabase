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
       return view('admin.users.index',compact('data'));  
    }

    public function getData()
    {
       $users = User::select(['id', 'name', 'email']); 
       
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })->make(true);
    }

    
    public function create()
    {
        
        return view('admin.users.create');
    }

    
    public function store(UserRequest $request)
    {
        $data = User::create($request->all());
        
        alert()->success('','Guardado con éxito')->autoclose(3000);
        return redirect()->route('users.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
