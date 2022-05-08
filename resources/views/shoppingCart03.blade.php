@extends('layout.templateIndex')
    @section('shoppingTitle03')
        模板化的購物車03
    @endsection
    @section('shoppingCart03')
    <link rel="stylesheet" href="./css/shoppingCart.css" />
    @endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
    <form class="container-lg rounded" action="/shoppingCart04" method="POST">
        @csrf
        <h1 class="fw-bold">購物車</h1>
        <div class="shopping_progress border-bottom border-1 mb-4 pb-4">
            <div class="row">
                    <div class="data col-3 d-flex flex-column align-items-center">
                        <div class="progress-icon rounded-circle bg-success d-flex justify-content-center align-items-center text-white mb-3">
                            1
                        </div>
                        <div>
                            <span>確認購物車</span>
                        </div>
                    </div>
                <div class="data col-3 d-flex flex-column align-items-center">
                    <div class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3">
                        2
                    </div>
                    <div>
                        <span>付款與運送方式</span>
                    </div>
                </div>
                <div class="data col-3 d-flex flex-column align-items-center">
                    <div class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3">
                        3
                    </div>
                    <div>
                        <span>填寫資料</span>
                    </div>
                </div>
                <div class="data col-3 d-flex flex-column align-items-center">
                    <div class="progress-icon rounded-circle d-flex bg-light justify-content-center align-items-center text-dark mb-3">
                        4
                    </div>
                    <div>
                        <span>完成訂購</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
        </div>
        <div class="cuz_data">
            <span class="fs-3">寄送資料</span>
            <div class="mt-3">
                <form action="/shoppingCart04" method="POST">
                    <div>
                        <label for="cuz_name" class="form-label fs-4">姓名</label>
                        <input type="text" name="cuz_name"  class="form-control ps-4 rounded" placeholder="王小明">
                    </div>
                    <div>
                        <label for="cuz_phone" class="form-label fs-4">電話</label>
                        <input type="number" name="cuz_phone"  class="form-control ps-4 rounded" placeholder="0912345672">
                    </div>
                    <div>
                        <label for="cuz_email" class="form-label fs-4">Email</label>
                        <input type="email" name="cuz_email"  class="form-control ps-4 rounded" placeholder="fsdfsfs@yahoo.com.tw">
                    </div>
                    <div class="row justify-content-center gx-3">
                        <label for="cuz_address" class="form-label fs-4">地址</label>
                        <div class="col-6 ps-0">
                            <input type="text" name="cuz_address"  class="form-control ps-4 rounded" placeholder="城市">
                        </div>
                        <div class="col-6 ps-0">
                            <input type="text" name="cuz_address" class="form-control ps-4 rounded" placeholder="郵遞區號">
                        </div>
                        <div class=" col-12 p-0 mt-2">
                            <input type="text" name="cuz_address"  class="form-control ps-4 rounded" placeholder="地址">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="total d-flex flex-row-reverse">
            <div class="p-0 col-3">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>數量:</span>
                        <p class="fw-bold fs-3 m-0">3</p>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>小記:</span>
                        <p class="fw-bold fs-3 m-0">$24.90</p>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>運費:</span>
                        <p class="fw-bold fs-3 m-0">$24.90</p>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>總計:</span>
                        <p class="fw-bold fs-3 m-0">$24.90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="link">
            <div class="d-flex justify-content-between align-items-center mt-5">
                <div>
                    <a href="/shoppingCart02">
                        <button class="btn btn-outline-primary btn-lg px-5">上一步</button>
                    </a>
                </div>
                <div>
                    <button class="btn btn-primary btn-lg px-5" type="submit">前往付款</button>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection






