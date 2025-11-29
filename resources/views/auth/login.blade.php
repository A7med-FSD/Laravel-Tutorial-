<x-layout>
  <x-slot:heading>
    Log In
  </x-slot:heading>
<form method="post" action="/login">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
          <div class="mt-2">
            <x-form-input id="email" type="email" name="email" :value="old('email')"/>
          </div>
          <x-form-error name="email"/>
        </x-form-field>
        <x-form-field>
          <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
          <div class="mt-2">
            <x-form-input id="password" type="password" name="password"/>
          </div>
          <x-form-error name="password"/>
        </x-form-field>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" type="button" class="font-semibold text-white text-sm/6">Cancel</a>
    <x-form-button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Log In</x-form-button>
  </div>
</form>
</x-layout>
  