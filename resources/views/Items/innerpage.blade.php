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
                            <div class="col-3">
                                商品剩餘數量
                            </div>
                         </div>
                    </div>
                </div>
                <div class="row text border border-secondary">
                    <div class="col-4">
                        <div class="mt-5">
                            主要圖片{{$item->id}}
                            <img src="{{$item->items_img_path}}" alt="">
                        </div>
                    </div>
                    <div class="col-8 row">
                        <div class="col-2 ps-5">{{$item->items_name}}</div>
                        <div class="col-2 ps-5">{{$item->items_price}}</div>
                        <div class="col-4 row justify-content-between">{{$item->items_context}}
                            <div class="col-4 row justify-content-between">{{$item->items_number}}
                        </div>
                        </div>
                    </div>
                    <div >
                        <div class="mt-5 d-flex flex-wrap">
                            <div>
                                次要圖片
                            </div>
                            @foreach ($item->imgs as $item)
                            <div id="sup_img">
                                <div>
                                    <img src="{{$item->img_path}}" alt="" >
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="qty">
                            <span id="plus">+</span>
                            請輸入想要購買的數量
                            <span id="minus">-</span>
                        </label>
                        <input name="qty" id="qty" type="number" value="1" min=1 max="45">
                    </div>
                </div>
                <div class="link">
                    <div class="d-flex justify-content-between align-items-center mt-5">
                      <div>
                        <a href="/">
                          <i class="fa fa-arrow-left pe-2 text-dark"></i>
                          <span class="text-dark fs-5">返回主頁</span>

                        </a>
                      </div>
                      <div>
                        <div class="text-light btn btn-primary btn-lg" id="add_product">
                            加到購物車
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
    <script>
        const add_product=document.querySelector('#add_product');
        const minus=document.querySelector('#minus');
        const plus=document.querySelector('#plus');
        const qty=document.querySelector('#qty');
        console.log({!! $item->product_id !!})
        plus.onclick=function(){
            qty.value=parseInt(qty.value)+1;
        }
        minus.onclick=function(){
            if(qty.value>=2){
                qty.value=parseInt(qty.value)-1;
            }
        }
        add_product.onclick=function(){
            var formData = new FormData();
            //利用JS新增
            formData.append('qty', qty.value);
            formData.append('product_id',{!! $item->product_id !!} );
            formData.append('_token', '{!!csrf_token()!!}');
            fetch('/add_to_cart', {
            method: 'POST',
            body: formData
            })
            .then(response => response.json())
            .catch(error => {
                alert('新增失敗，請再試一次');
                return error
            })
            .then(response =>{
                console.log(response);
                
            });
        }
    </script>
@endsection


