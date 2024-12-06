<?php

namespace Database\Seeders;

use App\Enums\MuscleGroup;
use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedBack();
        $this->seedBiceps();
        $this->seedChest();
        $this->seedCore();
        $this->seedLegs();
        $this->seedShoulders();
        $this->seedTriceps();
    }

    private function buildExerciseData(array $data): array
    {
        $defaults = [
            'demo_url' => '',
            'muscle_group' => '',
            'name' => '',
            'needs_anchor' => false,
            'needs_pull_up_bar' => false,
        ];

        return array_merge($defaults, $data);
    }

    private function seedBack(): void
    {
        Exercise::factory()
            ->createMany([
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Bent Over Row',
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=101',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Hi-Low Kneeling Row',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=145',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Two for One Row',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=190',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Straight Arm Push-Down',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=233',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Pullover',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=265',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Zeus Row',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=300',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Wrap Around Row',
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=362',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Banded Shrug',
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=388',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Laying Face Pull',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=422',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Good Morning',
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=461',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Superman Press',
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=502',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Wide Grip Pull-Up',
                    'needs_pull_up_bar' => true,
                    'demo_url' => 'https://youtu.be/ZfawH9NsTtI?t=56',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BACK,
                    'name' => 'Reverse Snow Angel',
                    'demo_url' => 'https://www.youtube.com/shorts/gPoqL2p-Vy4',
                ]),
            ]);
    }

    private function seedBiceps(): void
    {
        Exercise::factory()
            ->createMany([
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Chin-Up',
                    'needs_pull_up_bar' => true,
                    'demo_url' => 'https://youtu.be/G-rS3GFslts?t=52',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'No-Money Curl',
                    'demo_url' => 'https://youtu.be/G-rS3GFslts?t=114',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => "Waiter's Curl",
                    'demo_url' => 'https://youtu.be/G-rS3GFslts&t=362s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Preacher Curl',
                    'demo_url' => 'https://youtu.be/G-rS3GFslts?t=409',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Close Grip Supination Curl',
                    'demo_url' => 'https://youtu.be/G-rS3GFslts&t=154s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Stretch Curl',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/G-rS3GFslts&t=225s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Drag Curl',
                    'demo_url' => 'https://youtu.be/G-rS3GFslts?t=257',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Lip-Buster Curl',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/G-rS3GFslts&t=225s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Lip-Buster Step-Away Curl',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/G-rS3GFslts&t=225s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::BICEPS,
                    'name' => 'Cross-Body Hammer Curl',
                    'demo_url' => 'https://youtu.be/G-rS3GFslts&t=225s',
                ]),
            ]);
    }

    private function seedChest(): void
    {
        Exercise::factory()
            ->createMany([
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Banded Saw',
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ?t=80',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Crossover Push-Up',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Banded Speed Push-Up',
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ?t=160',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Banded Chest Press',
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ?t=194',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Wrap Around Press',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ?t=214',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Upper Chest Pullover',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ?t=276',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Prone Punch-Out',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ?t=334',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CHEST,
                    'name' => 'Cavaliere Crossover',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/HY9i5BSC2GQ?t=434',
                ]),
            ]);
    }

    private function seedCore(): void
    {
        Exercise::factory()
            ->createMany([
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CORE,
                    'name' => 'W Raise',
                    'demo_url' => 'https://youtu.be/F6PhNnlb-14?t=144',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CORE,
                    'name' => 'Black Widow',
                    'demo_url' => 'https://youtu.be/F6PhNnlb-14?t=177',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CORE,
                    'name' => 'Butterfly Sit-Up',
                    'demo_url' => 'https://youtu.be/F6PhNnlb-14?t=215',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CORE,
                    'name' => 'Seated Corkscrew',
                    'demo_url' => 'https://youtu.be/F6PhNnlb-14?t=235',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CORE,
                    'name' => 'Levitation Crunch',
                    'demo_url' => 'https://youtu.be/F6PhNnlb-14?t=285',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CORE,
                    'name' => 'Sit-Up Elbow Thrust',
                    'demo_url' => 'https://youtu.be/F6PhNnlb-14?t=320',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::CORE,
                    'name' => 'Hanging Leg Raise',
                    'needs_pull_up_bar' => true,
                    'demo_url' => 'https://www.youtube.com/shorts/tcliLhE8bbY',
                ]),
            ]);
    }

    private function seedLegs(): void
    {
        Exercise::factory()
            ->createMany([
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Reverse Lunge',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=128s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Pistol Squat',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=170s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Bridge and Curl',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=220s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Step-Through',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=265s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Bulgarian Split Squat',
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=300s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'TKE Split Squat Drop',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=344s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Leg Extension',
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=385s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Frog Press',
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=428s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Single Leg RDL',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=470s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::LEGS,
                    'name' => 'Reverse Leg Press',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/VKR4OVyCeK0&t=509s',
                ]),
            ]);

    }

    private function seedShoulders(): void
    {
        Exercise::factory()
            ->createMany([
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Laying One-Arm Press',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=96s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Kneeling Up and Over',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=164s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Push Press Pull Apart',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=137s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Front Raise Pull Apart',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=198s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Stretch Front Raise',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=230s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Rear Delt Pull',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=460s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Face Pull',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=520s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Banded High Pull',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=400s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Hip Hugger',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM?t=428',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Long Arc Lateral Raise',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=306s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Short Arc Lateral Raise',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=319s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::SHOULDERS,
                    'name' => 'Cross Body Lateral Raise',
                    'demo_url' => 'https://youtu.be/NtaPROZOcmM&t=350s',
                ]),
            ]);

    }

    private function seedTriceps(): void
    {
        Exercise::factory()
            ->createMany([
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Standing Dip',
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=12s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'JM Press',
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=37s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Diamond Cutter Push-Up',
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=71s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Overhead Extension',
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=207s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Cobra Push-Up',
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=412s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Laying Triceps Extension',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=112s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Standing Kickback',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=172s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Lunge and Push-Away',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=373s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Push-Away Plus',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=315s',
                ]),
                $this->buildExerciseData([
                    'muscle_group' => MuscleGroup::TRICEPS,
                    'name' => 'Wood Chopper Push-Down',
                    'needs_anchor' => true,
                    'demo_url' => 'https://youtu.be/tdJunCgoyWA&t=257s',
                ]),
            ]);
    }
}
