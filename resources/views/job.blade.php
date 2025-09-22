<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <!-- Employer Name -->
    <p class="text-sm text-gray-500 font-semibold">{{ $job->employer->name }}</p>

    <!-- Job Title -->
    <h2 class="font-bold text-lg mt-2">{{ $job->title }}</h2>

    <!-- Salary -->
    <p class="mt-1">This job pays {{ $job->salary }} per year.</p>

    <!-- Tags -->
    <div class="mt-3">
        @foreach($job->tags as $tag)
            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                {{ $tag->name }}
            </span>
        @endforeach
    </div>
</x-layout>
