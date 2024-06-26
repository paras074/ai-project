<html>

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ url('assets/style.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
</head>

<body>

    <header class="w-100">
        <nav class="navbar navbar-expand-md navbar-dark  w-100  p-0">
            <div class="custom-container">
                <div class="outer-nav-bar">
                    <a class="navbar-brand fw-bold" href="#">
                        <img src={{url("assets/images/logo.png")}} alt="logo">
                    </a>
                    <li class="nav-item mobile-icon">
                        <a class="nav-link p-0 "><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.00041 9.8C4.98706 8.81988 5.7703 8.01426 6.75041 8H17.2504C18.2305 8.01426 19.0138 8.81988 19.0004 9.8V17.9C19.0277 19.8605 17.4609 21.472 15.5004 21.5H8.50041C6.53995 21.472 4.97316 19.8605 5.00041 17.9V9.8Z"
                                    stroke="#C4A484" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M15.5004 10.7V7.1C15.5277 5.13953 13.9609 3.52797 12.0004 3.5C10.04 3.52797 8.47316 5.13953 8.50041 7.1V10.7"
                                    stroke="#C4A484" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item serch-icon mobile-icon">
                        <a class="nav-link p-0 "><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                viewBox="0 0 22 22" fill="none">
                                <path
                                    d="M20.6 20.6L15 15M9.4 17.8C8.2969 17.8 7.20459 17.5827 6.18546 17.1606C5.16632 16.7384 4.24032 16.1197 3.4603 15.3397C2.68029 14.5597 2.06155 13.6337 1.63941 12.6145C1.21727 11.5954 1 10.5031 1 9.4C1 8.2969 1.21727 7.20459 1.63941 6.18546C2.06155 5.16632 2.68029 4.24032 3.4603 3.4603C4.24032 2.68029 5.16632 2.06155 6.18546 1.63941C7.20459 1.21727 8.2969 1 9.4 1C11.6278 1 13.7644 1.885 15.3397 3.4603C16.915 5.03561 17.8 7.17218 17.8 9.4C17.8 11.6278 16.915 13.7644 15.3397 15.3397C13.7644 16.915 11.6278 17.8 9.4 17.8Z"
                                    stroke="#C4A484" stroke-width="2" />
                            </svg>
                        </a>
                    </li>
                    <button class="toggle-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="15" viewBox="0 0 30 15" fill="none">
                            <rect width="30" height="3" rx="1.5" fill="#C4A484" />
                            <rect y="6" width="30" height="3" rx="1.5" fill="#C4A484" />
                            <rect y="12" width="30" height="3" rx="1.5" fill="#C4A484" />
                        </svg>
                    </button>
                </div>
                <div class="nav-bar">
                    <ul class="navbar-nav  align-items-center  w-100 navigation-side bg-white">
                        <button class="toggle-btn button-crose">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" viewBox="0 0 18 21"
                                fill="none">
                                <rect width="23.6705" height="2.55553" rx="1.27777"
                                    transform="matrix(-0.611949 0.790897 -0.882351 -0.470591 17.3706 1.25372)"
                                    fill="#C4A484" />
                                <rect width="23.5951" height="2.56249" rx="1.28125"
                                    transform="matrix(0.596904 0.802313 -0.889816 0.456319 3.24048 0)" fill="#C4A484" />
                            </svg></button>
                        <li class="nav-item">
                            <a class="nav-link p-0" aria-current="page" href="#">Browse AI solutions and products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 " href="#">Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 ">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 ">Support</a>
                        </li>
                        <div class="icon-lists">
                            <li class="nav-item">
                                <a class="nav-link p-0 "><svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.375 10.3333C19.375 12.4734 17.6401 14.2083 15.5 14.2083C13.3599 14.2083 11.625 12.4734 11.625 10.3333C11.625 8.19315 13.3599 6.45825 15.5 6.45825C16.5277 6.45825 17.5133 6.86651 18.24 7.59321C18.9667 8.31992 19.375 9.30554 19.375 10.3333Z"
                                            stroke="#C4A484" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.0208 18.0833H10.9792C9.19575 18.0833 7.75 19.529 7.75 21.3124C7.75 23.0958 9.19575 24.5416 10.9792 24.5416H20.0208C21.8043 24.5416 23.25 23.0958 23.25 21.3124C23.25 19.529 21.8043 18.0833 20.0208 18.0833V18.0833Z"
                                            stroke="#C4A484" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item destop-icon">
                                <a class="nav-link p-0 "><svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.00041 9.8C4.98706 8.81988 5.7703 8.01426 6.75041 8H17.2504C18.2305 8.01426 19.0138 8.81988 19.0004 9.8V17.9C19.0277 19.8605 17.4609 21.472 15.5004 21.5H8.50041C6.53995 21.472 4.97316 19.8605 5.00041 17.9V9.8Z"
                                            stroke="#C4A484" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M15.5004 10.7V7.1C15.5277 5.13953 13.9609 3.52797 12.0004 3.5C10.04 3.52797 8.47316 5.13953 8.50041 7.1V10.7"
                                            stroke="#C4A484" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item destop-icon serch-icon">
                                <a class="nav-link p-0 "><svg width="55" height="55" viewBox="0 0 55 55" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="55" height="55" fill="#C4A484" />
                                        <path
                                            d="M37.3 37.3L31.7 31.7M26.1 34.5C24.9969 34.5 23.9046 34.2827 22.8855 33.8605C21.8663 33.4384 20.9403 32.8197 20.1603 32.0396C19.3803 31.2596 18.7616 30.3336 18.3394 29.3145C17.9173 28.2954 17.7 27.2031 17.7 26.1C17.7 24.9968 17.9173 23.9045 18.3394 22.8854C18.7616 21.8663 19.3803 20.9403 20.1603 20.1603C20.9403 19.3802 21.8663 18.7615 22.8855 18.3394C23.9046 17.9172 24.9969 17.7 26.1 17.7C28.3278 17.7 30.4644 18.5849 32.0397 20.1603C33.615 21.7356 34.5 23.8721 34.5 26.1C34.5 28.3278 33.615 30.4643 32.0397 32.0396C30.4644 33.615 28.3278 34.5 26.1 34.5Z"
                                            stroke="white" stroke-width="2" />
                                    </svg>
                                </a>
                            </li>

                        </div>
                    </ul>
                </div>
                <div class="search-bar">
                    <input type="search" name="" placeholder="search" id="">
                </div>
            </div>
        </nav>
    </header>
    <!-- header end  -->


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="login-page">
        <div class="container">
            <div class="login-outer">
                <div class="login-image">
                    <img src="{{ url('assets/images/login.webp') }}" class="img-fluid" alt="">
                </div>
                <div class="login-form">
                    <div class="form-box">
                        <h3>Admin Login</h3>
                        <p class="form-sub-heading">Login into your account</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- email -->
                            <div class="filed-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"  placeholder="Email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                            </div>
                            <!-- password -->
                            <div class="filed-group">
                                <x-input-label for="password" :value="__('Password')" />
                                <div class="password-grp">
                                    <x-text-input id="password" class="block mt-1 w-full" type="password" placeholder="Password"
                                        name="password" required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    <h6 toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password">
                                    </h6>
                                </div>
                            </div>
                            <!-- Remember Me -->
                            <!-- <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div> -->
                            <!-- Forgot Password Link -->
                            <div class="mt-4">
                                @if (Route::has('password.request'))
                                    <p class="text-pass">Forgot your <a href="{{ route('password.request') }}">password?</a></p>
                                @endif
                                <p class="text-pass">Don't have an account? <a href={{route('register')}}>Sign up</a></p>
                                <!-- Login Button -->
                                <button type="submit" class="form-btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class=" footer">
        <div class="container">
            <div class="fotter-outer">
                <div class="footer-inner logo-text">
                    <img src="assets/images/logo.png" alt="">
                    <p>We are at the forefront of AI chatbot development, revolutionizing the way businesses engage with
                        their
                        customers.</p>
                </div>
                <div class="footer-inner">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Rotar AI</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Demo</a></li>
                    </ul>
                </div>
                <div class="footer-inner">
                    <h3>Recources</h3>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Tool Library</a></li>
                    </ul>
                </div>
                <div class="footer-inner">
                    <h3>Legal</h3>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="socail-copyright">
                <div class="social-links">
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">Twitter</a>
                    <a href="#">Facebook</a>
                </div>
                <div class="copy-right">
                    <img src={{url("assets/images/short-logo.svg")}} alt="logo">
                    <p>logoipsum. all Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end  -->


    <!-- Optional JavaScript for password toggle -->
    <script>
        // Add JavaScript for password visibility toggle if needed
    </script>

</body>

</html>