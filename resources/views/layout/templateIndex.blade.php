<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('pageTitle')
        @yield('shoppingTitle')
        @yield('shoppingTitle02')
        @yield('shoppingTitle03')
        @yield('shoppingTitle04')
    </title>
    {{-- 共用css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- 各自css --}}
        @yield('css')
        @yield('shoppingCart')
        @yield('shoppingCart02')
        @yield('shoppingCart03')
        @yield('shoppingCart04')
</head>
<body>
    <div id="header" class="header container-xl  d-flex justify-content-between ps-2 pe-2">
        <nav class="navbar navbar-light">
            <div class="p-3">
              <a class="navbar-brand" href="/bootstrap">
                <img src="https://lesson-bootstrap.dev-hub.io/img/logo.svg"  class="d-inline-block align-text-top logo">
              </a>
            </div>
        </nav>
        <nav class="d-flex d-md-none justify-content-center align-items-center">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none;"></path>
                    </svg>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li >
                      <a class="dropdown-item d-flex justify-content-center" href="#">
                          Blog
                      </a>
                  </li>
                  <li >
                    <a class="dropdown-item d-flex justify-content-center" href="#">
                        Portfolio
                    </a>
                </li>
                <li >
                    <a class="dropdown-item d-flex justify-content-center" href="#">
                        About
                    </a>
                </li>
                <li >
                    <a class="dropdown-item d-flex justify-content-center" href="#">
                        Contact
                    </a>
                </li>
                <li class="d-flex justify-content-center">
                    <div>
                        <span>
                            <a href="/shoppingCart">
                            <svg class="cart_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            </a>
                        </span>
                        <span>
                            <svg class="user_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </span>
                    </div>
                </li>
                </ul>
              </div>
        </nav>
        <nav class="nav-right d-none d-md-flex">
            <ul class="p-0 mb-0 d-flex align-items-center">
                <li>
                    <a class="nav-link text-black" href="#">Blog</a>
                </li>
            </ul>
            <ul class="p-0 mb-0 d-flex align-items-center">
                <li>
                    <a class="nav-link" href="#">Profolio</a>
                </li>
            </ul>
            <ul class="p-0 mb-0 d-flex align-items-center">
                <li>
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <ul class="p-0 mb-0 d-flex align-items-center">
                <li>
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <div class="function_zone d-flex align-items-center">
                <div class="cart me-3">
                    <a href="/shoppingCart">
                        <svg class="cart_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </a>
                </div>
                <div class="log_in">
                    <a href="/log_in">
                        <svg class="user_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <main>
        @yield('indexMain')
        @yield('shoppingMain')
        @yield('shoppingMain02')
        @yield('shoppingMain03')
        @yield('shoppingMain04')
    </main>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="box-wrapper col-md-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="index.html">
                            <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" style="width: 40px; height:40px">
                                <defs>
                                  <style>
                                    .cls-1 {
                                      fill: #162446;
                                    }

                                    .cls-2 {
                                      fill: #fff;
                                    }
                                  </style>
                                </defs>
                                <title>資產 2</title>
                                <g id="圖層_2" data-name="圖層 2">
                                  <g id="圖層_1-2" data-name="圖層 1">
                                    <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                    <path class="cls-2" d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z"></path>
                                  </g>
                                </g>
                              </svg>
                        </a>
                        <span class="ms-3">數位方塊</span>
                    </div>
                    <p>
                        Air plant banjo lyft occupy retro adaptogen indego
                    </p>
                </div>
                <div class="footer_list d-flex col-9 m-auto">
                    <ul class="col-12 row">
                        <li class="col-md-6 col-lg-3">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </li>
                        <li class="col-md-6 col-lg-3">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </li>
                        <li class="col-md-6 col-lg-3">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </li>
                        <li class="col-md-6 col-lg-3">
                            <ul>
                                <li>CATEGORIES</li>
                                <li>First Link</li>
                                <li>Second Link</li>
                                <li>Third Link</li>
                                <li>Fourth Link</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="copyRight">
        <div class="copyRight d-flex justify-content-between container">
            <div class="author">
                © 2020 Tailblocks — @knyttneve
            </div>
            <div class="socialMedia">
                <a href="#">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a href="#">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    {{-- 共用JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- 各自JS --}}
        @yield('indexJS')
</body>
</html>
