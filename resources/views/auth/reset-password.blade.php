<x-app-layout>
    <div class=" flex justify-center p-2 m-2 ">

        <div class="shadow-lg border p-5 rounded-md mt-4 bg-white">
            <p class="mb-0 mr-4 text-2xl text-center pb-6">{{ __('Reset Password') }}</p>
            <x-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
    
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
    
                <div class="block">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                </div>
    
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <x-button>
                        {{ __('Reset Password') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('login') }}" autocomplete="false">
                @csrf
                <!--Username input-->
                <div class="relative mb-4">
                    <div class="space-y-2">

                        <div>
                            <label for="email" class="text-gray-600 mb-2 block">{{ __('Email') }}</label>
                            <input type="email"name="email" :value="old('email', $request->email)"autofocus autocomplete="username"
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
                        <div>
                            <label for="confirm" class="text-gray-600 mb-2 block">{{ __('Confirm password') }}
                                <span class="text-primary"> *</span></label>
                            <div class="relative  w-full flex items-center">
                                <input type="password" name="password_confirmation" id="password2"
                                    class="block w-full border rounded border-gray-300 px-4 py-3 text-gray-600 text-sm  focus:ring-0 focus:border-primary placeholder-gray-400"
                                    placeholder="*******">
                                <i id="icon2" onclick="ShowHidePassword(password2,icon2)"
                                    class="absolute font-bold text-lg  right-0 pr-4 fa fa-eye-slash cursor-pointer "></i>
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
                        Login
                    </button>
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

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-app-layout> --}}
