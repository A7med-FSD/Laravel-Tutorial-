<x-layout>
  <x-slot:heading>
    job
  </x-slot:heading>

  <h2 class="font-blod text-lg">{{$job['title']}}</h2>
  <p>this job pays {{ $job['salary'] }} per Year</p>
  @can('edit', $job)
    <x-button href="/jobs/{{$job->id}}/edit" class="mt-5">Edit Job</x-button>
  @endcan
</x-layout>