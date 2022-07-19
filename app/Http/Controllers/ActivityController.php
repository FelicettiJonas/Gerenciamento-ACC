<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Activity.create', ['userName'=>Auth::user()->name]);
    }


    public function form(Request $request){
        $activity = [
            'user_id' => Auth::user()->id,
            'activity' => $request->activity,
            'institution' => $request->institution,
            'time' => $request->time,
            'description' => $request->description,
        ];
        Activity::create($activity);
        return redirect()->route('site.home');
    }
}
