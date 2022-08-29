<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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
                       <span>Register</span>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- Breadcrumb-area-end -->
  
        <!-- Register area start  -->
        <div class="bd-register__area pt-110 pb-130">
           <div class="container small-container">
              <div class="row justify-content-center">
                 <div class="col-xl-8 col-lg-10">
                    <div class="signup-form-wrapper">
                       <div class="bd-postbox__contact">
                        <x-jet-validation-errors class="mb-4" />
                          <form method="POST" action="{{ route('register') }}">
                            @csrf
                             <div class="row">
                                <div class="col-xl-6 col-xl-6 col-md-6">
                                   <div class="bd-postbox__singel-input">
                                      <input type="text" name="name" placeholder="Name" required autofocus autocomplete="name">
                                   </div>
                                </div>
                                
                                <div class="col-xl-12">
                                   <div class="bd-postbox__singel-input">
                                      <input type="email" name="email" placeholder="Email" :value="email"  >
                                   </div>
                                </div>
                                <div class="col-xl-12">
                                   <div class="bd-postbox__singel-input">
                                      <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                                   </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="bd-postbox__singel-input">
                                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                
                                </div>
                                </div>
                                <div class="signup-action">
                                   <div class="signup-action-check">
                                      <input class="e-check-input" type="checkbox" id="sing-up">
                                      <label class="sign-check" for="sing-up"><span>Accept the terms and <a
                                               href="#">Privacy
                                               Policy</a></span></label>
                                   </div>
                                </div>
                                <div class="bd-sigin__action-button mb-20">
                                   <button class="bd-fill__btn w-100">Register now</button>
                                </div>
                                <div class="bd-resister__bottom-text text-center">
                                   <div class="bd-acount__login-text">
                                      <span>Already have an account? <a href="/login">Log in</a></span>
                                   </div>
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
