# Flex
Flex is a simple Laravel application that generates randomised full-body resistance band workouts from a fixed set of exercises. I built it to meet my requirements; it's probably not much use to you.

## What does it do?
Flex selects a list of seven exercises, one for each muscle group[^1], from a pre-seeded list of around 70 exercises. Each exercise links to an instructional video, just in case I've forgotten what a "lip-buster step-away curl" looks like.

Some exercises may require additional equipment, such as a pull-up bar or an anchor point for the resistance band. Currently, this information is not used, but I may add basic filtering in the future.

## Why Laravel?
Laravel is complete overkill for this application, as it stands. My assumption is that I'll eventually want to add more features, as a result of using Flex every day[^2]. Time will tell.

[^1]: The wavy-hand muscle groups are back, biceps, chest, core, legs, shoulders, triceps.
[^2]: Stop lying to yourself, Stephen.
