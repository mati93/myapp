<?php

namespace App\Repositories;

use App\Models\Visit;

use DB;

class VisitRepository extends BaseRepository{

    public function __construct(Visit $model){

        $this->model = $model;
    }

    public function getVisitsStatistic(){
        return DB::table('visits')->select(DB::raw('count(*) as visit_count, status'))->groupBy('status')->get();
    }

    
} 