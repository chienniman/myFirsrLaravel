@extends('layout.templateIndex')
    @section('shoppingTitle02')
        模板化的購物車02
    @endsection
    @section('shoppingCart02')
    <link rel="stylesheet" href="./css/shoppingCart.css" />
    @endsection
<body>
@section('shoppingMain02')
    <section id="shopping2">
        <div class="container-lg rounded">
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
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>
            </div>
            <div class="payway">
                <span class="fs-3">付款方式</span>
                <div class="mt-3">
                    <form action="..." method="get">
                        <label class="d-block ms-3 pt-4 pb-4  border-bottom">
                            <input type="radio" name="payway" class="me-1">信用卡付款
                        </label>
                        <label class="d-block ms-3 pt-4 pb-4 border-bottom">
                            <input type="radio" name="payway" class="me-1">網路 ATM
                        </label>
                        <label class="d-block ms-3 pt-4 pb-4 border-bottom">
                            <input type="radio" name="payway" class="me-1">超商代碼
                        </label>
                    </form>
                </div>
            </div>
            <div class="develivery">
                <span class="fs-3">運送方式</span>
                <div class="mt-3">
                    <form action="..." method="get">
                        <label class="d-block ms-3 pt-4 pb-4  border-bottom">
                            <input type="radio" name="develivery" class="me-1">黑貓宅配
                        </label>
                        <label class="d-block ms-3 pt-4 pb-4 border-bottom">
                            <input type="radio" name="develivery" class="me-1">超商店到店
                        </label>
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
                        <a href="/shoppingCart">
                            <button class="btn btn-outline-primary btn-lg px-5">上一步</button>
                        </a>
                    </div>
                    <div>
                        <a href="/shoppingCart03">
                            <button class="btn btn-primary btn-lg px-5">下一步</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

