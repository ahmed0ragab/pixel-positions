<?php

namespace App\Http\Controllers;
use App\Models\Job;


class Searchcontroller extends Controller
{
    public function __invoke()
    {
        $searchTerm = request('q');
        // dd($request->all());
        $jobs =  Job::query()
            ->with(['tags', 'employer'])
            ->where('title', 'like', '%' . $searchTerm . '%')->get();
        return view('job.search-result', [
            'jobs' => $jobs,
        ]);
    }
}
