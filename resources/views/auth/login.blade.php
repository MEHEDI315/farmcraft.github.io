<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}

    <main>
        <!-- Breadcrumb-area-start -->
        <div class="breadcrumb-area pt-10 pb-10">
           <div class="container">
              <div class="row">
                 <div class="col-12">
                    <div class="breadcrumb__list">
                       <span><a href="/">Home</a></span>
                       <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                       <span>Login</span>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- Breadcrumb-area-end -->
  
        <!-- Register area start  -->
        <div class="bd-login__area pt-110 pb-130">
           <div class="container small-container">
              <div class="row justify-content-center">
                 <div class="col-xl-8 col-lg-10">
                    <div class="Login-form-wrapper" >
                       <div class="bd-postbox__contact">
                        <x-jet-validation-errors class="mb-4" />
                          <form method = "POST" action="{{ route('login') }}">
                            @csrf
                             <div class="row">
                                <div class="col-xxl-12">
                                   <div class="bd-postbox__singel-input">
                                      <input type="email" name="email" placeholder="Email" :value="old('email')" required autofocus>
                                   </div>
                                </div>
                                <div class="col-xxl-12">
                                   <div class="bd-postbox__singel-input">
                                  
                                     <input type="password" name="password" placeholder="******" required autocomplete="current-password">
                                   </div>
                                </div>
                                <div class="signup-action">
                                   <div class="signup-action-check">
                                      <input class="e-check-input" type="checkbox" id="sing-up">
                                      <label class="sign-check" for="sing-up"><span>Remember me</span></label>
                                   </div>
                                </div>
                                <div class="bd-sigin__action-button mb-20">
                                   <button class="bd-fill__btn w-100">Login now</button>
                                </div>
                                <div class="bd-registered__wrapper">
                                   <div class="not-register">
                                      <span>Not registered?</span><span><a href="register.html"> Sign up</a></span>
                                   </div>
                                   <div class="forget-password">
                                      <a href="{{ route('password.request') }}">Forgot password?</a>
                                   </div>
                                </div>
                                <div class="bd-resister__bottom-text text-center">
                                   <div class="bd-sign__social-text">
                                      <span>Or Sign- in with</span>
                                   </div>
                                   <div class="bd-sign__social-icon">
                                      <a href="https://www.facebook.com/">
                                         <i class="fa-brands fa-facebook-f"></i>
                                         <span>Facebook</span>
                                      </a>
                                      <a href="https://www.gmail.com/">
                                         <i class="fa-solid fa-envelope-open"></i>
                                         <span>Google</span>
                                      </a>
                                   </div>
                                </div>
                             </div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- Register area end  -->
     </main>
</x-guest-layout>
