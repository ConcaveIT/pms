<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Tasks;
use App\Models\Projects;
use App\Models\Expenses;
use App\Models\Salary;
use Auth;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function __construct(){
        $this->middleware(function($request,$next){
            $this->user = Auth::user();
            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function projectDashboard()
    {
        $role = $this->user->getRoleNames()[0];
        if($role == 'superadmin' || $role == 'admin'){
            $data = $this->_adminDashboard();
            return view('dashboard.admin',compact('data'));
        }else{
            $data = $this->_memberDashboard();
            return view('dashboard.member',compact('data'));
        }
       
    }


    private function _adminDashboard(){
        $data=[];
        $data['totalTask'] = Tasks::count();
        $data['completedTask'] = Tasks::where('status',4)->count();
        $data['pendingTask'] = Tasks::where('status',3)->count();

        $data['projects'] = Projects::all();
        $data['totalProjects'] = Projects::count();
        $data['commingProjects'] = Projects::where('status',3)->count();
        $data['ongoingProjects'] = Projects::where('status',1)->count();
        $data['completedProjects'] = Projects::where('status',4)->count();

        $data['totalIncome'] = Projects::where('status',4)->sum('total_worth');

        $UtilityExpense =  Expenses::where('status',1)->sum('amount');
        $SalaryExpense =  Salary::where('status',1)->sum('total_salary');

        $data['totalExpense'] = $UtilityExpense+$SalaryExpense;
        $data['totalProfit'] =  $data['totalIncome'] - $data['totalExpense'];

        $data['incomeChart'] = Projects::select('title','total_worth')->where('status',4)->get();

        $data['taskResolvedThisYear'] = $this->_taskResolved(date('Y-m-d'));
        $data['taskResolvedLastYear'] = $this->_taskResolved(Carbon::now()->year-1);
        $data['taskResolvedLast2Year'] = $this->_taskResolved(Carbon::now()->year-2);
        return $data;
    }


    private function _memberDashboard(){
        $data=[];
        $data['totalTask'] = Tasks::count();
        $data['completedTask'] = Tasks::where('status',4)->count();
        $data['pendingTask'] = Tasks::where('status',3)->count();

        $data['projects'] = Projects::all();
        $data['totalProjects'] = Projects::count();
        $data['commingProjects'] = Projects::where('status',3)->count();
        $data['ongoingProjects'] = Projects::where('status',1)->count();
        $data['completedProjects'] = Projects::where('status',4)->count();

        $data['totalIncome'] = Projects::where('status',4)->sum('total_worth');

        $UtilityExpense =  Expenses::where('status',1)->sum('amount');
        $SalaryExpense =  Salary::where('status',1)->sum('total_salary');

        $data['totalExpense'] = $UtilityExpense+$SalaryExpense;
        $data['totalProfit'] =  $data['totalIncome'] - $data['totalExpense'];

        $data['incomeChart'] = Projects::select('title','total_worth')->where('status',4)->get();

        $data['taskResolvedThisYear'] = $this->_taskResolved(date('Y-m-d'));
        $data['taskResolvedLastYear'] = $this->_taskResolved(Carbon::now()->year-1);
        $data['taskResolvedLast2Year'] = $this->_taskResolved(Carbon::now()->year-2);
        return $data;
    }

    private function _taskResolved($date){
        $taskResolved = Tasks::whereYear('created_at', '=', $date)->select('id', 'created_at')
        ->where('status',4)
        ->get()
        ->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('m');
        });
        $montCount = [];
        $resultArry = [];
        foreach ($taskResolved as $key => $value) {
            $montCount[(int)$key] = count($value);
        }
        for($i = 1; $i <= 12; $i++){
            if(!empty($montCount[$i])){
                $resultArry[$i] = $montCount[$i];    
            }else{
                $resultArry[$i] = 0;    
            }
        }
        ksort($resultArry);
       return $resultArry;
    }
    
}
