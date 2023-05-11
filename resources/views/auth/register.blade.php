<x-guest-layout>
    <x-slot name="title">
        Register
    </x-slot>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}

    <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="sign__shape">
               <img class="man-1" src="assets/img/icon/sign/man-3.png" alt="">
               <img class="man-2 man-22" src="assets/img/icon/sign/man-2.png" alt="">
               <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
               <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
               <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
               <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
               <img class="flower" src="assets/img/icon/sign/flower.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="page__title-wrapper text-center mb-55">
                        <h2 class="page__title-2">Create a free <br> Account</h2>
                        <p>I'm a subhead that goes with a story.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        <div class="sign__header mb-35">
                           <div class="sign__in text-center">
                              <a href="#" class="sign__social g-plus text-start mb-15"><i class="fab fa-google-plus-g"></i>Sign Up with Google</a>
                              <p> <span>........</span> Or, <a href="sign-up.html">sign up</a> with your email<span> ........</span> </p>
                           </div>
                        </div>
                        <div class="sign__form">
                           <form  method="POST" action="{{ route('register') }}">
                            @csrf
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Full Name</h5>
                                 <div class="sign__input">
                                    <input type="text" placeholder="Full name" name="name" value="{{old('name')}}" required autofocus autocomplete="name">
                                    <i class="fal fa-user"></i>
                                     <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Email</h5>
                                 <div class="sign__input">
                                    <input type="email" placeholder="e-mail address" name="email" value="{{old('email')}}" required autocomplete="email">
                                    <i class="fal fa-envelope"></i>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="password" placeholder="Password" name="password" required autocomplete="new-password">
                                    <i class="fal fa-lock"></i>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                 </div>
                              </div>
                              <div class="sign__input-wrapper mb-10">
                                 <h5>Re-Password</h5>
                                 <div class="sign__input">
                                    <input type="password" placeholder="Re-Password" name="password_confirmation" required autocomplete="new-password">
                                    <i class="fal fa-lock"></i>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                 </div>
                              </div>
                              <div class="sign__action d-flex justify-content-between mb-30">
                                 <div class="sign__agree d-flex align-items-center">
                                    <input class="m-check-input" type="checkbox" id="m-agree">
                                    <label class="m-check-label" for="m-agree">I agree to the <a href="#">Terms & Conditions</a>
                                       </label>
                                 </div>
                              </div>
                              <button class="m-btn m-btn-4 w-100"> <span></span> Sign Up</button>
                              <div class="sign__new text-center mt-20">
                                 <p>Already in Markit ? <a href="{{ route('login') }}"> Sign In</a></p>
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