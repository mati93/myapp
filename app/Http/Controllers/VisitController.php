<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visit;

use App\Models\User;

use Mail;

use App\Repositories\VisitRepository;

use App\Repositories\UserRepository;

class VisitController extends Controller
{
    public function index(VisitRepository $visitRepo){

        $statistics = $visitRepo->getVisitsStatistic();
        
        $visits = $visitRepo->getAll();

        return view('visits.list', ["visitsList" => $visits, "statistics"=>$statistics]);
    }

    public function create(UserRepository $userRepo){

        $mechanics = $userRepo->getAllMechanics();
        $clients = $userRepo->getAllClients();

        return view('visits.create',["mechanics"=> $mechanics,"clients"=> $clients]);
    }

    public function store(Request $request){

        $visit = new Visit;
        $visit->mechanic_id = $request->input('mechanic');
        $visit->client_id = $request->input('client');
        $visit->date = $request->input('date');
        $visit->carnumber = $request->input('carnumber');
        $visit->description = $request->input('description');
        $visit->status = $request->input('status');
        $visit->save();

        $client = User::findOrFail($visit->client_id);

        Mail::send('emails.visit',['visit' => $visit], function ($message) use ($visit, $client){
            $message->from('aksan93@gmail.com', 'Warsztat online');

            $message->to($client->email, $client->name)->subject('Nowa wizyta');
        });

        return redirect()->action('VisitController@index');
    }

    public function show($id){

        $visit = Visit::find($id);

        return view('visits.show', ['visit' => $visit]);
    }

    public function delete(VisitRepository $visitRepo, $id){
        $visit = $visitRepo->delete($id);

        return redirect('visits');
    }

    public function edit(VisitRepository $visitRepo,UserRepository $userRepo, $id){
        $visit = $visitRepo->find($id);
        $mechanics = $userRepo->getAllMechanics();
        $clients = $userRepo->getAllClients();

        return view('visits.edit',["visit"=>$visit,"mechanics"=> $mechanics,"clients"=> $clients]);
    }

    public function editStore(Request $request){

        $visit = Visit::find($request->input('id'));
        $visit->mechanic_id = $request->input('mechanic');
        $visit->client_id = $request->input('client');
        $visit->date = $request->input('date');
        $visit->carnumber = $request->input('carnumber');
        $visit->description = $request->input('description');
        $visit->status = $request->input('status');
        $visit->save();

        return redirect()->action('VisitController@index');

    }

}
