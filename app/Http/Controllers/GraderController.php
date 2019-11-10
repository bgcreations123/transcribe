<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Job;
use Illuminate\Support\Facades\Auth;

class GraderController extends Controller
{
    public function index()
    {
        $jobs = DB::table("jobs")->count();
        $submitted = DB::table("jobs")->where('status', 'submitted')->count();
        return view('grader.index', compact(['jobs', 'submitted']));
    }

    public function submitted()
    {
        $jobs = Job::all()->where('status', 'submitted');
        return view('grader.submittedjobs', compact('jobs'));
    }

    public function show($id)
    {
        $job = Job::find($id);
        $job->status = 'grading';
        $job->save();
        return view('grader.show', compact('job'));
    }

    public function unclaim($id)
    {
        $job = Job::find($id);
        $job->status = 'submitted';
        $job->save();
        //return view('grader.show', compact('job'));
        return redirect()->route('grader.index')->with('success', 'Project Unclaimed!');
    }

    public function update(Request $request, $id)
    {
            $grade = Job::find($id);
            $grade->graded_by = auth()->user()->name;
            $grade->status = 'Completed';
            $grade->body = $request->input('body');
            $grade->comments = $request->input('comments');
            $grade->formatting = $request->input('formatting');
            $grade->accuracy = $request->input('accuracy');

            $grade->save();

            return redirect()->route('grader.index')->with('success', 'Project Graded successfully.');
    }
}
