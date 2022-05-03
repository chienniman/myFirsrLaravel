@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的商品內頁
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="/css/shoppingCart.css"/>
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">商品內頁
@auth
{{Auth::user()->name}}您好
@endauth
@guest
訪客您好
@endguest
</h1>
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
                    <div class="col-4">
                        <div class="mt-5">
                            主要圖片
                            <img src="{{$item[0]->items_img_path}}" alt="">
                        </div>
                    </div>
                    <div class="col-8 row">
                        <div class="col-2 ps-5">{{$item[0]->items_name}}</div>
                        <div class="col-2 ps-5">{{$item[0]->items_price}}</div>
                        <div class="col-8 row justify-content-between">{{$item[0]->items_context}}
                            <div class="col-5 ms-6">{{$item[0]->created_at}}
                        </div>
                        </div>
                    </div>
                    <div >
                        <div class="mt-5 d-flex flex-wrap">
                            <div>
                                次要圖片
                            </div>
                            @foreach ($item[0]->imgs as $item)
                            <div id="sup_img">
                                <div>
                                    <img src="{{$item->img_path}}" alt="" >
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
