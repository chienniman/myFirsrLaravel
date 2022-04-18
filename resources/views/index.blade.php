@extends('layout.templateIndex')
    @section('pageTitle')
        模板化的主頁
    @endsection

    @section('css')
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    @endsection
</head>
<body>
@section('indexMain')
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
        {{-- @foreach ( as )

        @endforeach --}}
        <div class="card  col-md-4 text-center p-4">
            <div class="d-flex justify-content-center">
                <div class="card_img_wrapper d-flex justify-content-center align-items-center rounded-circle">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="shooting_star_icon" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$title}}</h5>
              <p class="card-text">{{$content}}</p>
              <a href="#">Learn More
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
              </a>
            </div>
        </div>
        {{-- <div class="card  col-md-4 text-center p-4" >
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
        </div> --}}
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
@endsection

@section('indexJS')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
    <script>
        console.log('模組化成功')
    </script>
@endsection
