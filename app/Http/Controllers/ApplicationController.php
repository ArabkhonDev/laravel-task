<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\ApplicationCreated;
use App\Models\Application;
use App\Models\User;
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


    public function store(Request $request){

        if($request->hasFile('file')){
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('files', $name, 'public');
        }

        $request->validate([
            'subject' => 'required|max:255',
            'message'=> 'required',
            'file'=>'file|mimes:png,jpg,svg,pdf',
        ]);

        $application = Application::create([
            'user_id'=> auth()->user()->id,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'file_url'=>$path ?? null,
        ]);

        dispatch(new SendEmailJob($application));

        return redirect()->back();
    }
}
