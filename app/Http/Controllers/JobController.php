<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\get;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::query()
            ->with(['employer','tags'])
            ->latest()
            ->get()
            ->groupBy('featured');
        return view('jobs.index',
        [
            'featured'=>$job[1],
            'jobs' => $job[0],
            'tags'=>Tag::all()
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'schedule' => 'required|in:Part Time,Full Time',
            'url' => 'required|active_url',
            'tags' => 'nullable',
        ]);
        $attributes['featured'] = $request->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes,'tags'));
        if($attributes['tags' ?? false]){
            foreach(explode(',',$attributes['tags']) as $tag){
                $job->tag($tag);
            }
        }
        return redirect('/');
    }
    public function show(){
        $jobs=Job::query()
            ->with(['employer','tags'])
            ->get()
            ->sortByDesc('salary');
            // dd($jobs);
        return view('salaries',[
            'jobs'=>$jobs
        ]);
    }
}
