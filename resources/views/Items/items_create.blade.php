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
                         </div>
                    </div>
                </div>
                <div class="row text border border-secondary">
                    {{-- <div class="col-4">
                        <div class="mt-5">
                            <img src="https://th.bing.com/th/id/OIP.HxKxf8D_C9yExZlmwZIRDgHaFj?w=238&h=180&c=7&r=0&o=5&pid=1.7" alt="">
                        </div>
                    </div>
                    <div class="col-8 row">
                        <div class="col-2 ps-5">軒轅劍</div>
                        <div class="col-2 ps-5">10000</div>
                        <div class="col-8">傳說中，軒轅劍是一把黃金色的聖道古劍，是由眾神采首山之銅所鑄，黃金色的千年古劍，
                            劍身一面刻日月星辰，一面刻山川草木;劍柄一面書農耕畜養之術，一面書四海一統之策。傳說
                            是天界諸神賜於軒轅黃帝擊敗蚩尤的曠世神劍，其內蘊藏著無窮的力量，為斬妖除魔的神劍。天
                            界諸神將此劍賜予軒轅黃帝擊敗蚩尤之曠世神劍。此劍後傳與夏禹，大禹治水時立下汗馬功勞，夏朝憑此立國。幾
                            百年後，夏朝國君無道，此劍輾轉被商湯所得，商湯持此劍取天下，大敗上古三大邪刀，再次建立新的王國——商朝。最
                            後，商朝後期也開始動亂，這把聖道神劍也不知所蹤。</div>
                    </div> --}}
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
