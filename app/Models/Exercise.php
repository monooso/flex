<?php

namespace App\Models;

use App\Enums\MuscleGroup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['demo_url', 'muscle_group', 'name', 'needs_anchor', 'needs_pull_up_bar'];

    protected function casts(): array
    {
        return ['muscle_group' => MuscleGroup::class];
    }
}
