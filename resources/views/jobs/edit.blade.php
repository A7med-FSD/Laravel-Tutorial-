<x-layout>
  <x-slot:heading>
    <span class="font-semibold">Edit Job : </span><a href="/jobs/{{$job->id}}">{{$job->title}}</a>
  </x-slot:heading>
<form method="post" action="/jobs/{{$job->id}}">
  @csrf
  @method('PATCH')
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input value="{{$job->title}}" id="title" type="text" name="title" placeholder="Shift Leader" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required/>
            </div>
          </div>
          @error('title')
            <p class="text-red-500 font-semibold mt-1 text-xs">{{ $message }}</p>
          @enderror
        </div>
        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input value="{{$job->salary}}" id="salary" type="text" name="salary" placeholder="$50,000 Per Year" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" required/>
            </div>
          </div>
          @error('salary')
            <p class="text-red-500 font-semibold mt-1 text-xs">{{ $message }}</p>
          @enderror
        </div>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-between gap-x-6">
    <div>
      <button form="delete_form" class="rounded-md px-3 py-2 text-sm rounded-m text-red-600 font-semibold hover:text-white hover:bg-red-700 focus-visible:outline-2 focus-visible:outline-offset-2 cursor-pointer">Delete</button>
    </div>
    <div class="self-end">
      <a href="/jobs/{{$job->id}}" type="button" class="text-sm/6 font-semibold text-white">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
    </div>
  </div>
</form>
{{-- delete form --}}
<form action="/jobs/{{$job->id}}" id="delete_form" method="POST">
  @csrf
  @method('DELETE')
</form>
</x-layout>