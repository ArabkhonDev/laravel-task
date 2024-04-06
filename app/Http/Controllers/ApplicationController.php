<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $appication = Application::create([
            'user_id'=> auth()->user()->id,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'file_url'=>$path ?? null,
        ]);

        return redirect()->back();
    }
}
