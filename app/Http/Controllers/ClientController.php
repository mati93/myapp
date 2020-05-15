<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Repositories\UserRepository;

class ClientController extends Controller
{
    public function index(UserRepository $userRepo){
        
        $users = $userRepo->getAllClients();

        return view('clients.list', ["clientsList" => $users]);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
        ]);

        $client = new User;
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));
        $client->type = 'client';
        $client->phone = $request->input('phone');
        $client->save();

        return view('clients.confirm');

    }

    public function edit(UserRepository $userRepo, $id){
        $client = $userRepo->find($id);

        return view('clients.edit',["client"=>$client]);
    }

    public function editStore(Request $request){

        $client = User::find($request->input('id'));
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->save();

        return redirect()->action('ClientController@index');

    }

    public function delete(UserRepository $userRepo, $id){
        $client = $userRepo->delete($id);

        return redirect('clients');
    }

    public function show($id){

        $client = User::find($id);

        return view('clients.show', ['client' => $client]);
    }
}
