<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository{

    public function __construct(User $model){

        $this->model = $model;
    }

    public function getAllMechanics(){
        return $this->model->where('type','mechanic')->orderBy('name','asc')->get();
    }

    public function getAllClients(){
        return $this->model->where('type','client')->orderBy('name','asc')->get();
    }
} 