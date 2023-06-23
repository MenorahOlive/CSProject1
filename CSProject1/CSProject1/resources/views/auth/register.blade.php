<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label style="color:black;" for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label style="color:black;" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
        
            <x-input-label style="color:black;" for="password" :value="__('Password')" />
            
            

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label style="color:black;" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            

        <a tabindex="0" class="btn btn-lg " role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Password Guidelines" data-bs-content="
English uppercase letters (A through Z). English lower case letters (a through z). Numbers (0 through 9). Special characters and punctuation symbols (Example: _, -. Not more than 8 characters">    
                <i class=" bi-info-circle text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"></i>
</a>
            <a class=" text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button style="background-color:black;" class="ml-4">
                {{ __('Register') }}
            </x-primary-button>


        </div>
    </form>
</x-guest-layout>
const popover = new bootstrap.Popover('.popover-dismiss', {
  trigger: 'focus'
})