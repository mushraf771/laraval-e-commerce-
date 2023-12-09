<x-app-layout>
    <div class=" flex justify-center p-2 m-2 ">

        <div class="shadow-lg border p-5 rounded-md mt-4 bg-white">
            <p class="mb-0 mr-4 text-3xl font-bold text-center pb-6">{{ __('Sign in') }}</p>

            <div class="flex flex-row items-center justify-center ">
                <!-- Facebook -->
                <button type="button"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-primary uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Facebook -->
                    <i class="fa-brands fa-facebook-f mx-auto h-3 5 w-3"></i>

                </button>

                <!-- Twitter -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-primary uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Twitter -->
                    <i class="fa-brands fa-twitter mx-auto h-3 5 w-3"></i>

                </button>

                <!-- Linkedin -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-primary uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Linkedin -->
                    <i class="fa-brands fa-linkedin-in mx-auto h-3 5 w-3"></i>

                </button>
                <!-- Google -->
                <button type="button" data-te-ripple-init data-te-ripple-color="light"
                    class="inlne-block mx-1 h-9 w-9 rounded-full bg-primary uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <!-- Google -->
                    <i class="fa-brands fa-google mx-auto h-3 5 w-3"></i>

                </button>
            </div>

            <!-- Separator between social media sign in and email/password sign in -->
            <div
                class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-gray-300 after:mt-0.5 after:flex-1 after:border-t after:border-gray-300">
                <p class="mx-4 mb-0 text-center font-semibold ">
                    {{ __('OR') }} 
                </p>
            </div>
            <x-validation-errors class="mb-4" />
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" autocomplete="false">
                @csrf
                <!--Username input-->
                <div class="relative mb-4">
                    <div class="space-y-2">

                        <div>
                            <label for="email" class="text-gray-600 mb-2 block"> {{ __('Email') }}</label>
                            <input type="email" name="email" :value="old('email')" autofocus
                                autocomplete="username"
                                class="block w-full border rounded border-gray-300 px-4 py-3 text-gray-600 text-sm  focus:ring-0 focus:border-primary placeholder-gray-400"
                                placeholder="youremail.@domain.com">
                        </div>
                        <div>
                            <label for="password" class="text-gray-600 mb-2 block ">{{ __('Password') }}<span class="text-primary">
                                    *</span></label>
                            <div class="relative  w-full flex items-center">
                                <input type="password" name="password" id="password1"
                                    class="block w-full border rounded border-gray-300 px-4 py-3 text-gray-600 text-sm  focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="*******">
                                <i id="icon1" onclick="ShowHidePassword(password1,icon1)"
                                    class="absolute font-bold text-lg  right-0 pr-4 fa fa-eye-slash cursor-pointer  items-center "></i>
                            </div>
                        </div>
                        <div class="block">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!--Submit button-->
                <div class=" pb-1 pt-1 text-center">
                    <button
                        class="inline-block w-full  px-6 pb-2 pt-2.5 text-xs
                         font-medium uppercase leading-normal text-white hover:text-primary shadow 
                          bg-primary border hover:bg-white hover:border-primary "
                        type="submit">
                        {{ __('Login') }} 
                    </button>

                    <!-- Forgot password link-->
                    <div class="pt-4">
                        @if (Route::has('password.request'))
                            <a class="hover:underline text-sm hover:text-primary" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                   

                <!--Register button-->
                <div class="flex items-center justify-between pb-4 mt-3">
                    <p class="mb-0 mr-2">Don't have an account ?</p>
                    <a href="{{ route('register') }}" class="">
                    <button type="button"
                        class="inline-block  border border-primary px-8
                         pb-[6px] pt-2 text-xs font-medium uppercase 
                         leading-normal text-primary hover:text-white 
                         transition duration-150 ease-in-out hover:bg-primary 
                          ">
                          {{ __('Register Now') }}
                    </button></a>
                </div>
            </form>
        </div>

    </div>

</x-app-layout>

{{-- <x-app-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-app-layout> --}}
