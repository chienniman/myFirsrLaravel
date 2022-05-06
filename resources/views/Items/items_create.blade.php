@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的商品上架區
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="/css/shoppingCart.css"/>
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">商品上架區</h1>
<div class="cuz_data">
    <div class="mt-3 mb-3">
        <div class="comment border-bottom border-3 mb-3">
            <div class="row  mb-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-9 d-flex">
                         <div class="d-flex col-6">
                             <div>
                                <h3 class="fw-bold">商品圖片</h3>&nbsp;&nbsp;
                             </div>
                         </div>
                         <div class="row col-6">
                             <div class="col-3">
                                 商品名稱
                             </div>
                             <div class="col-3">
                                商品價格
                            </div>
                            <div class="col-3">
                                商品描述
                            </div>
                             <div class="col-3">
                                商品數量
                            </div>
                         </div>
                    </div>
                </div>
                <div class="row text border border-secondary">
                    <form action="/itemsList/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <h3>
                                請在此新增
                            </h3>
                        </div>
                       <div class="mb-3 mt-3">
                            <label for="items_img">1.商品圖片</label>
                            <input type="file" name="items_img">
                       </div>
                       <div class="mb-3 mt-3">
                        <label for="second_img">2.商品次要圖片</label>
                        <input type="file" name="second_img[]" multiple>
                        </div>
                       <div class="mb-3 mt-3">
                            <label for="items_name">3.商品名稱</label>
                            <input type="text" name="items_name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="items_price">4.商品價格</label>
                            <input type="text" name="items_price">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="items_context"> 5.商品描述</label>
                            <input type="text" name="items_context">
                        </div>
                         <div class="mb-3 mt-3">
                            <label for="items_number"> 6.商品數量</label>
                            <input type="number" name="items_number">
                        </div>
                        <div>
                            <button class="btn btn-primary"  type="submit">確定送出</button>
                            <a href="/itemsList" class="btn btn-danger">忍痛退出</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
