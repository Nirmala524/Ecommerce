 <x-guest-layout>
     <!-- Session Status -->
     <x-auth-session-status class="mb-4" :status="session('status')" />


     <form class="login-form" method="POST" action="{{ route('login') }}">
         @csrf
         <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>

         <!-- Email Address -->
         <x-input-label for="email" :value="__('Email')" />
         <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"
             placeholder="Email" required autofocus autocomplete="username" />
         <x-input-error :messages="$errors->get('email')" class="mt-2" />

         <!-- Password -->
         <div class="mt-4">
             <x-input-label for="password" :value="__('Password')" />

             <x-text-input id="password" class="block mt-1 w-full" placeholder="Password" type="password"
                 name="password" required autocomplete="current-password" />

             <x-input-error :messages="$errors->get('password')" class="mt-2" />
         </div>

         <!-- Remember Me -->
         <div class="flex items-center justify-end mt-4 mb-2 ">
         <div class="block  mx-2 mt-2">
             <label for="remember_me" class="inline-flex items-center">
                 <input id="remember_me" type="checkbox"
                     class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                 <span class="ms-2 label-text">{{ __('Remember me ') }}</span>
             </label>
            </div>
           <div class="block mx-2">

               @if (Route::has('password.request'))
               {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" --}}
               <a data-toggle="flip" href="{{ route('password.request') }}" class="semibold-text mb-2">
                   {{ __('Forgot password?') }}
                </a>
                @endif
            </div>
            {{-- <span class="flip-indecator" data-toggle-on="Active" data-toggle-off="Inactive"></span> --}}

             {{-- <x-primary-button class="ms-3">
                 {{ __('Log in') }}
             </x-primary-button> --}}


            </div>
             <x-primary-button>
                <i class="fa fa-sign-in fa-lg fa-fw"></i>  {{ __(' SIGN IN ') }}
            </x-primary-button>
     </form>

 </x-guest-layout>
