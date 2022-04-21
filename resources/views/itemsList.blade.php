@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的商品頁
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="/css/shoppingCart.css"/>
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">商品選購區</h1>
<div class="cuz_data">
    <p class="fs-3  fw-bold">請在這裡選購您的商品</p>
    <div class="mt-3 mb-3">
        <div class="comment border-bottom border-3 mb-3">
            <div class="row  mb-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-8 d-flex">
                         <div class="d-flex col-4">
                            <h3 class="fw-bold">文章標題</h3>&nbsp;&nbsp;
                            <p class="fw-bold fs-6 pt-2"></p>
                         </div>
                         <div class="col-6">
                             <h4 class="fw-bold">管理員:&nbsp;&nbsp;匿名管管</h4>
                         </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex">
                            <p>新增時間</p>&nbsp;&nbsp;
                            <p></p>
                            <div class="d-flex ms-3">
                                <div class="me-3">
                                    <a href="" class="btn btn-primary">編輯</a>
                                </div>
                                <div>
                                    <a href ="" class="btn btn-danger">刪除</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text border border-secondary">
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection

