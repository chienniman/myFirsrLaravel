@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的留言編輯板
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="/css/shoppingCart.css"/>
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">留言板編輯區</h1>
<div class="cuz_data">
    <p class="fs-3  fw-bold">請在這裡編輯您的留言</p>
    <div class="mt-3">
        <form action="/comment/update/{{$comment->id}}" method="get">
            <div>
                <label for="cuz_name" class="form-label fs-4">您的姓名</label>
                <input type="text" name="cuz_name"  class="form-control ps-4 rounded" value="{{$comment->author}}">
            </div>
            <div>
                <label for="cuz_title" class="form-label fs-4">您的標題</label>
                <input type="text" name="cuz_title"  class="form-control ps-4 rounded" value=" {{$comment->title}}">
            </div>
            <div>
                <label for="cuz_comment" class="form-label fs-4">您的寶貴意見</label>
                <input type="text" name="cuz_comment"  class="form-control ps-4 rounded" value=" {{$comment->context}}">
            </div>
            <div class="d-flex justify-content-center">
                <button
                class="btn btn-primary btn-lg mt-3 ps-5 pe-5" type="submit">
                    更新送出
                </button>
            </div>
        </form>
        <div class="d-flex flex-row-reverse">
        <a href="/comment"
        class="btn btn-danger btn-lg mt-3 ps-5 pe-5">
            取消返回
        </a>
        </div>
    </div>
</div>
</div>
</section>
@endsection

