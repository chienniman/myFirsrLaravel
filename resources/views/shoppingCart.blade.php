@extends('layout.templateIndex')
    @section('shoppingTitle')
        模板化的購物車1
    @endsection
    @section('shoppingCart')
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/shoppingCart.css" />
    @endsection
  <body>
      @section('shoppingMain')
      <section id="shopping">
        <div class="container-lg rounded">
          <h1 class="fw-bold">購物車</h1>
          <div class="shopping_progress border-bottom border-1 mb-4 pb-4">
            <div class="row">
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle bg-success d-flex justify-content-center align-items-center text-white mb-3"
                >
                  1
                </div>
                <div>
                  <span>確認購物車</span>
                </div>
              </div>
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3"
                >
                  2
                </div>
                <div>
                  <span>付款與運送方式</span>
                </div>
              </div>
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3"
                >
                  3
                </div>
                <div>
                  <span>填寫資料</span>
                </div>
              </div>
              <div class="data col-3 d-flex flex-column align-items-center">
                <div
                  class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3"
                >
                  4
                </div>
                <div>
                  <span>完成訂購</span>
                </div>
              </div>
              <div class="progress">
                <div
                  class="progress-bar bg-success"
                  role="progressbar"
                  style="width: 18%"
                  aria-valuenow="25"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
          </div>
        <form class="orderList" action="/shoppingCart02" method="POST">
            @csrf
            <span class="fs-3">訂單明細</span>
            @foreach ($shopping_cart as $data )
            <div class="order mt-3 pt-3 pb-4 mb-3 border-bottom border-1">
                <div class="d-flex justify-content-between">
                  <div class="d-flex">
                    <div>
                      <img
                      src="{{$data->Item2->items_img_path}}"
                      alt="商品不存在"
                    />
                    </div>
                    <div
                      class="food-text d-flex flex-column ms-3 justify-content-center"
                    >
                      <span class="fw-bold">{{$data->Item2->items_name}}</span>
                      <span>{{$data->Item2->items_context}}</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-4">
                        {{-- <span>價格:</span>
                        {{$data->Item2->items_price}}元 --}}
                        <label for="price">價格</label>
                        <input style="width:200px; height:20px" type="text" id="price" name="price[]" value="{{$data->Item2->items_price}}">
                    </div>
                    <div>
                        {{-- <span>數量:</span> --}}
                      <label for="qty">數量:</label>
                      <input type="number" value="{{$data->qty}}" name="qty[]" min="0" max="{{$data->Item2->items_number}}">
                      {{-- <span>{{$data->qty}}</span> --}}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          <?php
           $subtotal=0;
           $total=0;
           $fee=100;

          foreach ($shopping_cart as $data) {
            $subtotal+=$data->qty*$data->Item2->items_price;
          };
          $total=$subtotal+$fee;
          ?>
          <div class="total d-flex flex-row-reverse">
            <div class="p-0 col-3">
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>數量:</span>
                  <p class="fw-bold fs-3 m-0">{{count($shopping_cart)}}</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>小記:</span>
                  <p class="fw-bold fs-3 m-0">{{$subtotal}}</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>運費:</span>
                  <p class="fw-bold fs-3 m-0">{{$fee}}</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>總計:</span>
                  <p class="fw-bold fs-3 m-0">{{$total}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="link">
            <div class="d-flex justify-content-between align-items-center mt-5">
              <div>
                <a href="#">
                  <i class="fa fa-arrow-left pe-2 text-dark"></i>
                  <span class="text-dark fs-5">返回購物</span>
                </a>
              </div>
              <div>
                  <button class="btn btn-primary btn-lg text-light" type="submit">下一步</button>
              </div>
            </div>
          </div>
        </form>
        </div>
      </section>
      @endsection

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
