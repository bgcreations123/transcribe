<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Job;

class ClientController extends Controller
{
    public function index()
    {
        $jobs = DB::table("jobs")->count();
        $job = DB::table("jobs")->where('user_id', Auth::user()->id)->count();
        return view('clients.index', compact(['jobs', 'job']));
    }

    public function post_job()
    {
        return view('clients.post_job');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('clients.profile', compact('user'));
    }

    public function profile_update(Request $request)
    {

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->company = $request->input('company');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->location = $request->input('location');
        $user->save();

        return redirect()->route('client.profile')->with('success', 'Profile Updated');
    }

    public function paid_projects()
    {
        return view('clients.paid_projects');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            //'email' => ['unique:users', 'required', 'email'],
            //'password' => ['required', 'string', 'confirmed'],
        ]);

        $freelancer = new User;
        //$teacher->user_id = auth()->user()->id;
        $freelancer->role = 'Transcriptionist';
        $freelancer->email = $request->input(['email']);
        $freelancer->password = \Hash::make($request['password']);

        $freelancer->save();

       // return redirect()->route('admin')->with('success', 'New Teacher added successfully.');
        return redirect('/admin')->with('success', 'Freelancer added successfully.');
    }
}
