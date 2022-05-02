@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的留言板
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="./css/shoppingCart.css" />
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">留言板</h1>
<div class="comment_board">
    @foreach ($data as $news)
    <div class="comment border-bottom border-3 mb-3">
        <div class="row  mb-3">
            <div class="row d-flex justify-content-between">
                <div class="col-8 d-flex">
                     <div class="d-flex col-4">
                        <h3 class="fw-bold">文章標題</h3>&nbsp;&nbsp;
                        <p class="fw-bold fs-6 pt-2">{{$news->title}}</p>
                     </div>
                     <div class="col-6">
                         @if (($news->author)!='' || ($news->author)!=null)
                         <h4 class="fw-bold">作者:&nbsp;&nbsp;{{$news->author}}</h4>
                         @else()
                         <h4 class="fw-bold">作者:&nbsp;&nbsp;匿名鍵盤俠</h4>
                         @endif
                     </div>
                </div>
                <div class="col-4">
                    <div class="d-flex">
                        <p>發文時間</p>&nbsp;&nbsp;
                        <p>{{$news->created_at}}</p>
                        <div class="d-flex ms-3">
                            @auth
                            <div class="me-3">
                                <a href="/comment/edit/{{$news->id}}" class="btn btn-primary">編輯</a>
                            </div>
                            <div>
                                <a href ="/comment/delete/{{$news->id}}" class="btn btn-danger">刪除</a>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text border border-secondary">
                <p>
                    {{$news->context}}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="cuz_data">
    <p class="fs-3  fw-bold">立即在下方留言討論</p>
    <div class="mt-3">
        <form action="/comment/save" method="get">
            <div>
                <label for="cuz_name" class="form-label fs-4">您的姓名</label>
                <input type="text" name="cuz_name"  class="form-control ps-4 rounded" placeholder="王小明">
            </div>
            <div>
                <label for="cuz_title" class="form-label fs-4">您的標題</label>
                <input type="text" name="cuz_title"  class="form-control ps-4 rounded">
            </div>
            <div>
                <label for="cuz_comment" class="form-label fs-4">您的寶貴意見</label>
                <input type="text" name="cuz_comment"  class="form-control ps-4 rounded">
            </div>
            <div>
                <button
                class="btn btn-primary btn-lg mt-3 ps-5 pe-5" type="submit">
                    送出
                </button>
            </div>
        </form>
    </div>
</div>

</div>
</section>
@endsection


