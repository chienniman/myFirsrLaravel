@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的商品編輯區
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="/css/shoppingCart.css"/>
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">商品編輯區</h1>
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
                         </div>
                    </div>
                </div>
                <div class="row text border border-secondary">
                    <form action="/itemsList/update/{{$item->id}}" method="post" enctype="multipart/form-data">
                        <div class="col-4">
                            <div class="mt-5">
                                <span>目前主要商品的圖片</span>
                                <div>
                                    <img src="{{$item->items_img_path}}" alt="">
                                </div>
                            </div>
                        </div>
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

                        <div class="d-flex">
                            <div class="mb-3 mt-3">
                                <label for="secondary_items_img">2.次要商品圖片的新增</label>
                                <input type="file" name="secondary_items_img">
                           </div>
                            @foreach ($item->imgs as $item)
                            <div class="me-1">
                                <span>
                                    次要商品的圖片{{$item->id}}
                                </span>
                                <div>
                                    <img src="{{$item->img_path}}" alt="" style="width: 200px">
                                </div>
                                <div>
                                    <a href="/itemsList/delete_imgs/{{$item->id}}" class="btn btn-danger">刪除</a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div>
                            <button class="btn btn-primary"  type="submit">更新資料</button>
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
