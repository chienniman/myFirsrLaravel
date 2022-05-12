@extends('layout.templateIndex')
    @section('shoppingTitle04')
        模板化的購物車04
    @endsection
    @section('shoppingCart04')
    <link rel="stylesheet" href="./css/shoppingCart.css" />
    @endsection
<body>
@section('shoppingMain04')
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
              style="width: 100%"
              aria-valuenow="25"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
        </div>
      </div>
      <div>
        <h1 class="fw-1 text-center fw-bold">訂單成立</h1>
      </div>
      <div class="orderList">
        <span class="fs-3">訂單明細<span class="ps-5">訂購人姓名:{{$history_shopping_data[0]->name}}</span></span>
        @foreach ($history_shopping_data as $data )
        <div class="order mt-3 pt-3 pb-4 mb-3 border-bottom border-1">
            <div class="d-flex justify-content-between">
              <div class="d-flex">
                <div>
                @foreach ( $data->order as $order_list )
                <div class="d-flex">
                    <div>
                        <img src="{{$order_list->product->items_img_path}}" alt="商品預覽圖">
                    </div>
                    <div class="food-text d-flex flex-column ms-3 justify-content-center">
                        <span class="fw-bold"></span>
                        <div class="d-flex align-items-center">
                            <div class="me-4">
                              <span>{{$order_list->qty}}個{{$order_list->product->items_name}}</span>
                            </div>
                            <div>
                                <span>每個單價{{$order_list->product_price}}元</span>
                            </div>
                          </div>
                    </div>
                </div>
                @endforeach

                </div>
            </div>
            </div>
          @endforeach
          <div class="total d-flex flex-row-reverse">
            <div class="p-0 col-3">
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>數量:</span>
                  <p class="fw-bold fs-3 m-0">{{$data->product_qty}}</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>小記:</span>
                  <p class="fw-bold fs-3 m-0">${{$data ->subTotal}}</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>運費:</span>
                  <p class="fw-bold fs-3 m-0">${{$data ->shipping_fee}}</p>
                </div>
              </div>
              <div>
                <div class="d-flex justify-content-between align-items-center">
                  <span>總計:</span>
                  <p class="fw-bold fs-3 m-0">${{$data ->total}}</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="link">
        <div class="d-flex flex-row-reverse mt-5">
          <div>
            <a class="text-light" href="/bootstrap">
              <button class="btn btn-primary btn-lg">返回首頁</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection



