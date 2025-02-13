<x-guest-layout>
    {{-- <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div> --}}
    <h3 class="login-head "><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" >

        @csrf


        <!-- Email Address -->
        <div class="mb-4 form-group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full " type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 " />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                <i class="fa fa-unlock fa-lg fa-fw"></i>  {{ __(' Reset ') }}
            </x-primary-button>
        </div>

        <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="{{route('login')}}" data-toggle="flip">Back to Login</a></p>
          </div>
    </form>
</x-guest-layout>
