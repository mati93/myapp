<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Repositories\UserRepository;

class MechanicController extends Controller
{
    public function index(UserRepository $userRepo){
        
        $users = $userRepo->getAllMechanics();

        return view('mechanics.list', ["mechanicsList" => $users]);
    }

    public function create(){
        
        return view('mechanics.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'phone' => 'required',
        ]);

        $mechanic = new User;
        $mechanic->name = $request->input('name');
        $mechanic->email = $request->input('email');
        $mechanic->password = bcrypt($request->input('password'));
        $mechanic->type = 'mechanic';
        $mechanic->phone = $request->input('phone');
        $mechanic->save();

        return redirect()->action('MechanicController@index');

    }

    public function edit(UserRepository $userRepo, $id){
        $mechanic = $userRepo->find($id);

        return view('mechanics.edit',["mechanic"=>$mechanic]);
    }

    public function editStore(Request $request){

        $mechanic = User::find($request->input('id'));
        $mechanic->name = $request->input('name');
        $mechanic->email = $request->input('email');
        $mechanic->phone = $request->input('phone');
        $mechanic->save();

        return redirect()->action('MechanicController@index');

    }

    public function delete(UserRepository $userRepo, $id){
        $mechanic = $userRepo->delete($id);

        return redirect('mechanics');
    }

    public function show($id){

        $mechanic = User::find($id);

        return view('mechanics.show', ['mechanic' => $mechanic]);
    }
}
