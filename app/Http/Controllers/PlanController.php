<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nutriplan;
use App\Models\User;

class PlanController extends Controller
{
    //
    public function update(Request $request, $id)
    {
        //
        $arr = $request->input();
        $plan = Nutriplan::find($id);
        $plan->lunes = $arr['lunes'];
        $plan->martes = $arr['martes'];
        $plan->miercoles = $arr['miercoles'];
        $plan->jueves = $arr['jueves'];
        $plan->viernes = $arr['viernes'];
      
        $plan -> save();
        $user = User::all();
        $nutriplan = Nutriplan::all();
        return view('main', ['users'=>$user, 'nutriplan'=>$nutriplan]);
    }

}
