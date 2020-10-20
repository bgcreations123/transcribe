<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::orderBy('id', 'ASC')->get();
        return view('clients.index')->with('job', $job);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job = new Job();
        $lastProjectID = $job->orderBy('id', 'DESC')->pluck('id')->first();
        $newProjectID = 'F2020/T-0' .str_pad($lastProjectID + 1, STR_PAD_LEFT);

        return view('clients.post_job', compact('newProjectID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'avatar' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac',
        ]);

        $file = $request->file('file_name');
        $destination_path = public_path(). '/files';
        $extension = $file->getClientOriginalExtension();
       // $request->file('file')->getSize();
        $files = $file->getClientOriginalName();
        $fileName = $files.'_'.time().'_'.$extension;
        $file->move($destination_path,$fileName);

        $job = new Job;
        $job ->user_id = Auth::user()->id;
        $job->file_name = $fileName;
        $job->project_id = $request->input('project_id');
        $job->name = $request->input('name');
        $job->length = $request->input('length');
        $job->accent = $request->input('accent');
        $job->amount_per_minute = $request->input('amount_per_minute');
        $job->total_amount = $request->input('total_amount');
        $job->due_in = $request->input(['due_in']);
        $job->no_of_speakers = $request->input(['no_of_speakers']);
        $job->title = $request->input(['title']);
        $job->instructions = $request->input(['instructions']);
        $job->job_type = $request->input(['job_type']);
        $job->project_type = $request->input(['project_type']);
        $job->subject = $request->input(['subject']);

        $job->save();

       // return redirect()->route('admin')->with('success', 'New Teacher added successfully.');
        return redirect('/client')->with('success', 'Job Posted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = Job::all()->where('user_id', Auth::user()->id);
        return view('clients.show_job', compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
