<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Plan;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PlansController extends Controller
{
    //

       public function index()
    {
		$plans=Plan::all();

		return view('view')->with('plans',$plans);        
    }

    public function store(Request $request)
    {
        $Plan = new Plan;

        $Plan->projects = $request->get('projects');
        $Plan->training = $request->get('training');
        $Plan->Challenges = $request->get('Challenges');
        $Plan->personal_projects = $request->get('personal_projects');

        $Plan->save();

        return redirect()->back();


    }

}
