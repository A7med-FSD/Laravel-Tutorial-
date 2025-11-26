<x-layout>
  <x-slot:heading>
    job
  </x-slot:heading>

  <h2 class="font-blod text-lg">{{$job['title']}}</h2>
  <p>this job pays {{ $job['salary'] }} per Year</p>
</x-layout>