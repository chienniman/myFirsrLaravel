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
<h1 class="fw-bold mb-5">訂單修改區</h1>
<div class="cuz_data">
    <div class="mt-3 mb-3">
        <div class="comment border-bottom border-3 mb-3">
            <div class="row  mb-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-9 d-flex">
                         <div class="d-flex col-6">
                             <div>
                                <h3 class="fw-bold">訂單</h3>&nbsp;&nbsp;
                             </div>
                         </div>
                         <div class="row col-6">
                            <div>
                                <tr>
                                    <th>訂單編號</th>
                                    <th>購買人</th>
                                    <th>信箱</th>
                                    <th>總金額</th>
                                    <th>訂單狀態</th>
                                    <th>功能</th>
                                </tr>
                            </div>
                            @foreach ($edited_shopping_data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->total}}</td>
                                <td>
                                    {{-- 1->訂單成立(未付款), 2->已付款, 3->已出貨, 4->已結單, 5->已取消 --}}
                                    @if ($item->status == 1)
                                        訂單成立(未付款)
                                    @elseif ($item->status == 2)
                                        已付款
                                    @elseif ($item->status == 3)
                                        已出貨
                                    @elseif ($item->status == 4)
                                        已結單
                                    @else
                                        已取消
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                         </div>
                    </div>
                    <div class="d-flex col-6">
                        <div>
                           <h3 class="fw-bold">訂單狀態</h3>&nbsp;&nbsp;
                           <select name="status" id="status">
                               <option value="1" @if($edited_shopping_data[0]->status==1)selected @endif>未付款</option>
                               <option value="2" @if($edited_shopping_data[0]->status==2)selected @endif>已付款</option>
                               <option value="3" @if($edited_shopping_data[0]->status==3)selected @endif>已出貨</option>
                               <option value="4" @if($edited_shopping_data[0]->status==4)selected @endif>已取貨</option>
                               <option value="5" @if($edited_shopping_data[0]->status==5)selected @endif>已結單</option>
                           </select>
                        </div>
                        <div class="d-flex col-6">
                            <div>
                               <h3 class="fw-bold">訂單備註</h3>&nbsp;&nbsp;
                               <textarea name="ps" id="ps" resize="none"></textarea>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success" onclick="location.href='/edit_order/{{$item->id}}'">修改訂單</button>
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
