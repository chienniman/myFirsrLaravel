@extends('layouts.app')
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
<h1 class="fw-bold mb-5">商品管理區</h1>
<div class="cuz_data">
    <div class="row">
        <div>
            <p class="fs-3  fw-bold">請在這裡管理上架商品</p>
        </div>
        <div>
            <div>
                <a href="/itemsList/create" class="btn btn-primary">
                    按這裡新增產品
                </a>
            </div>
        </div>
    </div>
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
                    <div class="col-3">
                        <div class="d-flex">
                            <p>新增時間</p>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
                <div class="row text border border-secondary">
                    @foreach ($item as $product)
                    <div class="col-4">
                        <div class="mt-5">
                            <img src="{{$product->items_img_path}}" alt="">
                        </div>
                    </div>
                    <div class="col-8 row">
                        <div class="col-2 ps-5">{{$product->items_name}}</div>
                        <div class="col-2 ps-5">{{$product->items_price}}</div>
                        <div class="col-8 row justify-content-between">{{$product->items_context}}
                            <div class="col-5 ms-6">{{$product->created_at}}
                        </div>
                        </div>
                        <div class="d-flex ms-3 flex-row-reverse">
                            <div class="ms-3">
                                <a href="/itemsList/edit{{$product->id}}" class="btn btn-primary">編輯</a>
                            </div>
                            <div>
                                <a href ="/itemsList/delete/{{$product->id}}" class="btn btn-danger">刪除全部</a>
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="mt-5 d-flex flex-wrap">
                            <div>
                                次要圖片
                            </div>
                            @foreach ($product->imgs as $item)
                            <div id="sup_img">
                                <div>
                                    <img src="{{$item->img_path}}" alt="" >
                                </div>
                                {{-- <a href="/itemsList/delete_img/{{$item->id}}" class="btn btn-danger">
                                    刪除單張圖片
                                </a> --}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection
{{-- @section('js')
    <script>
        function delete_img(id){
            let formData=new FormData();
            formData.append('_method','DELETE');
            formData.append('_token',`{{csrf_token()}}`);
            fetch("/product/delete_img"+id,{
                method="POST",
                body:formData
            }).then(function(response){
                let element=document.querySelector('#sup_img'+id)
                element.parentNode.removeChild(element);
            })
        }
    </script>
@endsection --}}

