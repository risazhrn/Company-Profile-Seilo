{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-guest-layout>
   <x-slot name="title">
        Login
    </x-slot>
<!-- bg shape area start -->
<div class="bg-shape">
    <img src="assets/img/shape/shape-1.png" alt="">
 </div>
 <!-- bg shape area end -->

 <!-- sign up area start -->
 <section class="signup__area po-rel-z1 pt-100 pb-145">
    <div class="sign__shape">
       <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
       <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
       <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
       <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
       <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
       <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
    </div>
    <div class="container">
       <div class="row">
          <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
             <div class="page__title-wrapper text-center mb-55">
                <h2 class="page__title-2">Sign in to <br>  recharge direct.</h2>
                <p>it you don't have an account you can <a href="#">Register here!</a></p>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
             <div class="sign__wrapper white-bg">
                {{-- <div class="sign__header mb-35">
                   <div class="sign__in text-center">
                      <a href="#" class="sign__social g-plus text-start mb-15"><i class="fab fa-google-plus-g"></i>Sign In with Google</a>
                      <p> <span>........</span> Or, <a href="sign-in.html">sign in</a> with your email<span> ........</span> </p>
                   </div>
                </div> --}}
                <div class="sign__form">
                   <form method="POST" action="{{route('login')}}">
                    @csrf
                      <div class="sign__input-wrapper mb-25">
                         <h5>Email</h5>
                         <div class="sign__input">
                            <input id="email" type="email" placeholder="e-mail address" name="email" :value="old('email')" required autofocus autocomplete="username">
                            <i class="fal fa-envelope"></i>
                           </div>
                           <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
                      <div class="sign__input-wrapper mb-10">
                         <h5>Password</h5>
                         <div class="sign__input">
                            <input id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password">
                            <i class="fal fa-lock"></i>
                           </div>
                           <x-input-error :messages="$errors->get('password')" class="mt-2" />
                      </div>
                      <div class="sign__action d-sm-flex justify-content-between mb-30">
                         <div class="sign__agree d-flex align-items-center">
                            <input class="m-check-input" type="checkbox" id="m-agree" name="remember">
                            <label class="m-check-label" for="m-agree">Keep me signed in
                               </label>
                         </div>
                         @if (Route::has('password.request'))
                         <div class="sign__forgot">
                            <a href="{{route('password.request')}}">Forgot your password?</a>
                         </div>
            @endif

                      </div>
                      <button class="m-btn m-btn-4 w-100" type="submit"> <span></span> Sign In</button>
                      <div class="sign__new text-center mt-20">
                         <p>New to Markit? <a href="{{route('register')}}">Sign Up</a></p>
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- sign up area end -->

</x-guest-layout>

