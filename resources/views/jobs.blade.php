<x-layout>
  <x-slot:heading>
    JOb listing
  </x-slot:heading>
  <ul>
    @foreach ($jobs as $job)
      <a href="job/{{$job['id']}}" class="hover:underline">
        <li><strong>{{$job['title']}}:</strong> Pays {{$job['salary']}}$</li>
      </a>
    @endforeach
  </ul>
</x-layout>