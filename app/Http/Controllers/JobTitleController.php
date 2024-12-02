<?php

namespace App\Http\Controllers;

use App\Models\JobTitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    public function index()
    {
        $jobtitles = JobTitle::all();
        return view('jobtitles.index', compact('jobtitles'));
    }

    public function create()
    {
        return view('jobtitles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:job_titles|max:255',
        ]);

        JobTitle::create($request->all());

        return redirect()->route('jobtitles.index')->with('success', 'Job Title created successfully.');
    }

    public function show(JobTitle $jobtitle)
    {
        return view('jobtitles.show', compact('jobtitle'));
    }

    public function edit(JobTitle $jobtitle)
    {
        return view('jobtitles.edit', compact('jobtitle'));
    }

    public function update(Request $request, JobTitle $jobtitle)
    {
        $request->validate([
            'title' => 'required|max:255|unique:job_titles,title,' . $jobtitle->id,
        ]);

        $jobtitle->update($request->all());

        return redirect()->route('jobtitles.index')->with('success', 'Job Title updated successfully.');
    }

    public function destroy(JobTitle $jobtitle)
    {
        $jobtitle->delete();

        return redirect()->route('jobtitles.index')->with('success', 'Job Title deleted successfully.');
    }
}

