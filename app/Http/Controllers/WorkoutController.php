<?php

namespace App\Http\Controllers;

use App\Services\WorkoutService;

class WorkoutController extends Controller
{
    public function show()
    {
        return view('workout', [
            'exercises' => (new WorkoutService)->generate(),
        ]);
    }
}
