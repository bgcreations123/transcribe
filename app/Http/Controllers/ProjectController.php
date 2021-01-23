<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use DB;
use Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $jobs = Job::all()->where('status', 'pending');
        $project = DB::table("jobs")->where('status', '')->count();
        return view('project.index', compact(['jobs', 'project']));

    }

    public function show($id)
    {
        $job = Job::find($id);
        $job->status = 'claimed';
        $job->save();
        return view('project.show', compact('job'));
    }

    public function unclaim($id)
    {
        $job = Job::find($id);
        $jobs = Job::all()->where('status', '');
        $project = DB::table("jobs")->count();
        $job->status = '';
        $job->save();
       // return view('project.index', compact(['job', 'project', 'jobs']))->with('success', 'Project Unclaimed!');
        return redirect()->route('project.index', compact(['job', 'project', 'jobs']))->with('success', 'Project Unclaimed!');
    }

    public function profile() {
        $user = Auth::user();
        return view('project.profile', ['user' => $user]);
    }

    public function update_profile(Request $request)
    {

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->id_number = $request->input('id_number');
        $user->location = $request->input('location');
        $user->save();

        return redirect()->route('freelancer.profile')->with('success', 'Profile Updated');
    }

    public function password()
    {
        $pwd = User::all();
        return view('project.password', compact('pwd'));
    }

    public function update_password(Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'confirmed'],
        ]);
        $user = Auth::user();
        $user->password = \Hash::make($request['password']);
        $user->save();

        return redirect()->route('freelancer.profile')->with('success', 'Password Updated');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        $job = Job::find($id);
        $job->status = 'submitted';
        $job->freelancer_name = Auth::user()->name;
        $job->body = $request->input('body');

        $job->save();

       // return redirect()->route('admin')->with('success', 'New Teacher added successfully.');
        return redirect('/project')->with('success', 'Transcript Submitted Successfully.');
    }

}
