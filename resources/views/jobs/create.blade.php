<x-layout>
  <x-slot:heading>
    Create Jog
  </x-slot:heading>
<form method="post" action="/jobs">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <h2 class="text-base/7 font-semibold text-white">Create A New Job</h2>
      <p class="mt-1 text-sm/6 text-gray-400">We just need more information about your job.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-label for="title">Title</x-form-label>
          <div class="mt-2">
            <x-form-input id="title" type="text" name="title" placeholder="Shift Leader"/>
          </div>
          <x-form-error name="title"/>
        </x-form-field>
        <x-form-field>
          <label for="salary" class="block text-sm/6 font-medium text-white">Salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
              <input id="salary" type="text" name="salary" placeholder="$50,000 Per Year" class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"/>
            </div>
          </div>
          <x-form-error name="salary"/>
        </x-form-field>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" type="button" class="font-semibold text-white text-sm/6">Cancel</a>
    <x-form-button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</x-form-button>
  </div>
</form>
</x-layout>
  