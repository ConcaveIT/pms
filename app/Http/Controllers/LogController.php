<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{

    public function getLog(){
        $activityLogs = Activity::all();
        return view('core.log.list',compact('activityLogs'));
    }

}