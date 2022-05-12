@extends('layouts.app')
@section('shoppingTitle03')
會員管理頁
@endsection
@section('shoppingCart03')
<link rel="stylesheet" href="/css/shoppingCart.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endsection
<body>
@section('shoppingMain03')
<section id="shopping3">
<div class="container-lg rounded">
<h1 class="fw-bold mb-5">
    <div class="row justify-content-between">
        <div class="col-4">
            會員管理頁
        </div>
        <div class="col-2">
            <a href="/account/create" class="btn btn-primary">
                點此新增
            </a>
        </div>
    </div>
</h1>
<div class="comment_board">
    <table id="table_id" class="display" style="width: 100%">
        <thead>
            <tr>
                <th>圖片預覽</th>
                <th>
                    <div class="row justify-content-center">
                        <span class="col-6">
                            信箱
                        </span>
                        <span class="col-6">
                            權限
                        </span>
                    </div>

                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $datas as $data)
            <tr>
                <td>
                    <p>{{$data->name}}</p>
                </td>
                <td>
                    <div class="row">
                        <div class="row col-3">
                            <p class="text-center pt-3">{{$data->email}}</p>
                        </div>
                        <div class="row col-3">
                            @if ($data->power===1)
                            <p class="text-center pt-3">無上大總統</p>
                            @elseif ($data->power===2)
                            <p class="text-center pt-3">一人之下總理</p>
                            @else
                            <p class="text-center pt-3">可憐下賤貧民</p>
                            @endif
                        </div>
                        <div class="row col-6 flex-column align-items-center">
                            <a href="/banner/edit/{{$data->id}}" class="btn btn-success col-6 mb-3">編輯</a>
                            <button class="btn btn-danger col-6"
                            onclick="document.querySelector('#deleteForm{{$data->id}}').submit();"
                            >刪除</button>
                            <form id="deleteForm{{$data->id}}"
                            action="/banner/delete/{{$data->id}}" method="post" hidden>
                            @csrf
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>
@endsection
{{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script> --}}




