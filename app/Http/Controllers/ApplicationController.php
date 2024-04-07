<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Jobs\SendEmailJob;
use App\Mail\ApplicationCreated;
use App\Models\Application;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{

   

    public function index(){
        $applications = Application::latest()->paginate(10);
        return view('application.index')->with([
            $applications => 'applications'
        ]);
    }

    public function store(StoreApplicationRequest $request){
        
        if($this->checkDate()){
            return redirect()->back()->with('error', 'You can only 1 application create a day');
        }

        if($request->hasFile('file')){
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('files', $name, 'public');
        }

        $application = Application::create([
            'user_id'=> auth()->user()->id,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'file_url'=>$path ?? null,
        ]);

        dispatch(new SendEmailJob($application));
        return redirect()->back();
    }

    public function checkDate(){
        if(is_null(auth()->user()->applications()->latest()->first())){
            return false;
        }

        $last_application = auth()->user()->applications()->latest()->first();
        $last_app_date = Carbon::parse($last_application->created_at)->format('Y-m-D');
        $today = Carbon::now()->format('Y-m-D');

        if($last_app_date == $today){
            return true;
        }

    }
}
