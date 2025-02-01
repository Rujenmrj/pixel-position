<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Employer;

class EmployerController extends Controller
{
    public function __invoke()
    {
        $employers = Employer::query()
            ->latest()
            ->get();
        return view('companies',
        [
            'employers' => $employers
        ]);
    }
}
