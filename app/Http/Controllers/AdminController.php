<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $jobs = DB::table("jobs")->count();
        $customers = DB::table("users")->where('role', 'Customer')->count();
        $freelancers = DB::table("users")->where('role', 'Transcriptionist')->count();
        return view('admin.index', compact(['jobs', 'customers', 'freelancers']));
    }

    public function create()
    {
        return view('admin.create_freelancers');
    }

    public function create_graders()
    {
        return view('admin.create_graders');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['unique:users', 'required', 'email'],
            'password' => ['required', 'string', 'confirmed'],
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

    public function store_graders(Request $request)
    {
        $this->validate($request, [
            'email' => ['unique:users', 'required', 'email'],
            'password' => ['required', 'string', 'confirmed'],
        ]);

        $grader = new User;
        //$teacher->user_id = auth()->user()->id;
        $grader->role = 'Grader';
        $grader->email = $request->input(['email']);
        $grader->password = \Hash::make($request['password']);

        $grader->save();

       // return redirect()->route('admin')->with('success', 'New Teacher added successfully.');
        return redirect('/admin')->with('success', 'Grader added successfully.');
    }
}
