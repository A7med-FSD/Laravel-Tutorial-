<x-layout>
  <x-slot:heading>
    Register
  </x-slot:heading>
<form method="post" action="/register">
  @csrf
  <div class="space-y-12">
    <div class="border-b border-white/10 pb-12">
      <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <x-form-field>
          <x-form-label for="name">Full Name</x-form-label>
          <div class="mt-2">
            <x-form-input id="name" type="text" name="name"/>
          </div>
          <x-form-error name="name"/>
        </x-form-field>
        <x-form-field>
          <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
          <div class="mt-2">
            <x-form-input id="email" type="email" name="email"/>
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
        <x-form-field>
          <label for="password_confirmation" class="block text-sm/6 font-medium text-white">Confirm Password</label>
          <div class="mt-2">
            <x-form-input id="password_confirmation" type="password" name="password_confirmation"/>
          </div>
          <x-form-error name="password_confirmation"/>
        </x-form-field>
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" type="button" class="font-semibold text-white text-sm/6">Cancel</a>
    <x-form-button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Register</x-form-button>
  </div>
</form>
</x-layout>
  