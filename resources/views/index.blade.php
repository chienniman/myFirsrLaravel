<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('css/index.css')}}">
     <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
</head>
<body>
    <div id="header" class="header container-xl  d-flex justify-content-between ps-2 pe-2">
        <nav class="navbar navbar-light">
            <div class="p-3">
              <a class="navbar-brand" href="index.html">
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
                            <a href="./shoppingCart.html">
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
                    <a href="./shoppingCart.html">
                        <svg class="cart_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </a>
                </div>
                <div class="log_in">
                    <a href="./log_in.html">
                        <svg class="user_icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active bg-secondary">
          </div>
          <div class="carousel-item bg-light">
          </div>
          <div class="carousel-item  bg-secondary">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="section section_row_cards">
        <div class="container ">
            <div class="text-center">
                <h1>Raw Denim Heirloom Man Braid</h1>
                <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug.</p>
            </div>
            <div class="decoration_bar d-flex justify-content-center mt-4">
                <div class="decoration_bar d-flex justify-content-center mt-4">
                    <div class="bar "></div>
                </div>
            </div>
        </div>
        <div class="card-wrapper row">
            <div class="card  col-md-4 text-center p-4">
                <div class="d-flex justify-content-center">
                    <div class="card_img_wrapper d-flex justify-content-center align-items-center rounded-circle">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="shooting_star_icon" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Shooting Stars</h5>
                  <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                  <a href="#">Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                  </a>
                </div>
            </div>
            <div class="card  col-md-4 text-center p-4" >
                <div class="d-flex justify-content-center">
                    <div class="card_img_wrapper d-flex justify-content-center align-items-center rounded-circle">
                        <svg class="scissor" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                  <h5 class="card-title">The Catalyzer</h5>
                  <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard</p>
                  <a href="#">Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                  </a>
                </div>
            </div>
            <div class="card col-md-4 text-center p-4" >
                <div class="d-flex justify-content-center">
                    <div class="card_img_wrapper d-flex justify-content-center align-items-center rounded-circle">
                        <svg class="user" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Neptune</h5>
                  <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
                  <a href="#">Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                  </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="button btn-lg px-4 rounded">button</button>
        </div>
    </div>
    <div id="box_group" class="container">
        <div class="d-flex">
            <h2 class="me-3">Master Cleanse Reliac Heirloom</h1>
            <p>Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify,<br>subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
        </div>
        <div class="box_wrapper">
           <div class="row">
               <div class="col-6 p-2">
                   <div class="row">
                       <div class="col-6 ">
                           <img class="img-fluid" src="https://dummyimage.com/500x300" alt="">
                       </div>
                       <div class="col-6 ">
                            <img class="img-fluid" src="https://dummyimage.com/500x300" alt="">
                       </div>
                       <div class="col-12 mt-3">
                           <img class=" col-12" src="https://dummyimage.com/600x360" alt="">
                       </div>
                   </div>
               </div>
               <div class="col-6 p-2">
                    <div class="col-12 mb-3">
                        <img class="col-12" src="https://dummyimage.com/600x360" alt="">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img class="img-fluid" src="https://dummyimage.com/500x300" alt="">
                        </div>
                        <div class="col-6">
                             <img class="img-fluid" src="https://dummyimage.com/500x300" alt="">
                        </div>
                    </div>
               </div>
           </div>
        </div>
    </div>
    <section id="price">
        <div class="container text-center">
            <h2>Pricing</h2>
            <p>Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct<br>
                trade mumblecore 3 wolf moon twee
            </p>
        </div>
        <div class="container table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>Plan</th>
                        <th>Speed</th>
                        <th>Storage</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Start</td>
                        <td>5 Mb/s</td>
                        <td>15 GB</td>
                        <td class="d-flex justify-content-between"
                        >Free<input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Pro</td>
                        <td>25 Mb/s</td>
                        <td>25 GB</td>
                        <td class="d-flex justify-content-between"
                        >$24<input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Business</td>
                        <td>36 Mb/s</td>
                        <td>40 GB</td>
                        <td class="d-flex justify-content-between"
                        >$50<input type="radio"></td>
                    </tr>
                    <tr>
                        <td>Exclusive</td>
                        <td>48 Mb/s</td>
                        <td>120 GB</td>
                        <td class="d-flex justify-content-between"
                        >$72<input type="radio"></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <a href="#" class="text-primary">Learn More
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg>
                  </a>
                  <div class="btn btn-primary">
                      Button
                  </div>
            </div>
        </div>
    </section>
    <section class="locations container-xl">
        <div>
            <div class="container">
                <div class="row location_title">
                    <div class="col-6">
                        <h2>Pitchfork Kickstarter Taxidermy</h2>
                        <div class="decoration_bar d-flex justify-content-start">
                            <div class="bar "></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <p>
                        Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.
                        </p>
                    </div>
                </div>
            </div>
            <div class="location_card_wrapper container">
                <div class="row ">
                    <div class="col-md-6 col-xl-3 mb-5">
                        <div class="card bg-light ">
                            <img src="https://dummyimage.com/720x400" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Chichen Itza</h5>
                              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3  mb-5">
                        <div class="card  bg-light ">
                            <img src="https://dummyimage.com/720x400" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Chichen Itza</h5>
                              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3  mb-5" >
                        <div class="card   bg-light ">
                            <img src="https://dummyimage.com/720x400" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Chichen Itza</h5>
                              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3  mb-5">
                        <div class="card  bg-light ">
                            <img src="https://dummyimage.com/720x400" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Chichen Itza</h5>
                              <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="veritical_cards">
        <div class="container">
            <div class="card_wrapper">
                <div class="wrapper d-flex align-items-center">
                    <div class="card_img_wrapper d-flex justify-content-center align-items-center rounded-circle">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="shooting_star_icon" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Shooting Stars</h5>
                        <p class="card-text " >Blue bottle crucifix vinyl post-ironic four dollar toast <br>vegan taxidermy. Gastropub indxgo juice poutine.</p>
                        <a class="link" href="#">Learn More
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                          </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card_wrapper">
                <div class="wrapper d-flex align-items-center flex-row-reverse">
                    <div class="card_img_wrapper d-flex justify-content-center align-items-center rounded-circle">
                        <svg class="scissor" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The Catalyzer</h5>
                        <p class="card-text " >Blue bottle crucifix vinyl post-ironic four dollar toast <br>vegan taxidermy. Gastropub indxgo juice poutine.</p>
                        <a class="link" href="#">Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card_wrapper">
                <div class="wrapper d-flex align-items-center ">
                    <div class="card_img_wrapper d-flex justify-content-center align-items-center rounded-circle">
                        <svg class="user" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The 400 Blows</h5>
                        <p class="card-text " >Blue bottle crucifix vinyl post-ironic four dollar toast <br>vegan taxidermy. Gastropub indxgo juice poutine.</p>
                        <a class="link" href="#">Learn More
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                          </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="brand_card">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src=" https://dummyimage.com/400x400 " alt="">
                </div>
                <div class="col-lg-6 description">
                    <h2 class="fs-6">BRAND NAME</h2>
                    <h1 class="fs-2">The Catcher in the Rye</h1>
                    <div class="mb-4 d-flex">
                        <span class="stars d-flex">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                </path>
                              </svg>
                        </span>
                        <span class="text-secondary ps-3">
                            4 Reviews
                        </span>
                        <div class="d-flex">
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
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <p>
                        Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.
                    </p>
                    <div class="button_groups mt-6 pb-5  d-flex ">
                        <span class="me-3">Color</span>
                        <div class="d-flex">
                            <button class="rounded-circle me-1">
                            </button>
                            <button class="rounded-circle me-1">
                            </button>
                            <button class="rounded-circle me-1">
                            </button>
                        </div>
                        <label class="me-3 ms-3" for="size">Size</label>
                        <div>
                            <select class="mb-3" name="size" id="size">SM
                                <option name="size" value="SM">SM</option>
                                <option name="size" value="M">M</option>
                                <option name="size" value="L">L</option>
                                <option name="size" value="XL">XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between pe-5 mt-3">
                        <span class=" fs-4 fw-bolder">$58.00</span>
                        <div>
                            <button class="me-3 bg-main text-white rounded">Button</button>
                            <span class="heart">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="category">
        <div class="container">
            <div class="row">
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
                <div class="card col-md-6 col-lg-3" >
                    <img src="https://dummyimage.com/400x400 " class="card-img-top img-fluid" style="height:256px">
                    <div class="card-body">
                      <h5 class="card-title fs-6">CATEGORY</h5>
                      <p class="card-text fs-6">The Catalyzer</p>
                      <p>$16.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="map">
        <div class="map_wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200065.3962880729!2d26.93963067930331!3d38.417860687431926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd862a762cacd%3A0x628cbba1a59ce8fe!2z5Zyf6ICz5YW25LyK6Iyy5a-G54i-55yB5LyK5aOr6bql!5e0!3m2!1szh-TW!2stw!4v1649662638012!5m2!1szh-TW!2stw" width="100%" height="712" style="border:0; filter: grayscale(1) contrast(1.2) opacity(0.4);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container container-md">
            <div class="row flex-row-reverse">
                <div class="form col-md-6 col-lg-4">
                    <div class="mb-3">
                        <h4>Feedback</h4>
                        <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div>
                        <div class="d-flex justify-content-center">
                            <button class="rounded">Button</button>
                        </div>
                        <span class="fs-6">
                            Chicharrones blog helvetica normcore iceland tousled brook viral artisan.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
</body>
</html>
