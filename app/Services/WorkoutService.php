<?php

namespace App\Services;

use App\Models\Exercise;

class WorkoutService
{
    // @todo: accept preferences
    public function generate(): array
    {
        return Exercise::query()
            ->fromSub(fn ($query) => $query->from('exercises')->inRandomOrder(), 'exercises')
            ->groupBy('muscle_group')
            ->get()
            ->shuffle()
            ->all();
    }
}
