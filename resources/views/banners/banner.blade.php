@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的Banner管理頁
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
            Banner管理頁
        </div>
        <div class="col-2">
            <a href="/banner/create" class="btn btn-primary">
                點此新增圖片
            </a>
        </div>
    </div>
</h1>
<div class="comment_board">
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>圖片預覽</th>
                <th>
                    <div class="row justify-content-center">
                        <span class="col-6">
                            圖片權重
                        </span>
                        <span class="col-6">
                            功能區
                        </span>
                    </div>

                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="https://dummyimage.com/500x300" alt="">
                </td>
                <td>
                    <div class="row">
                        <div class="row col-6">
                            <p class="text-center pt-3">1</p>
                        </div>
                        <div class="row col-6 flex-column align-items-center">
                            <a href="" class="btn btn-success col-6 mb-3">編輯</a>
                            <a href="" class="btn btn-danger col-6">刪除</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://dummyimage.com/500x300" alt="">
                </td>
                <td>
                    <div class="row">
                        <div class="row col-6">
                            <p class="text-center pt-3">1</p>
                        </div>
                        <div class="row col-6 flex-column align-items-center">
                            <a href="" class="btn btn-success col-6 mb-3">編輯</a>
                            <a href="" class="btn btn-danger col-6">刪除</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://dummyimage.com/500x300" alt="">
                </td>
                <td>
                    <div class="row">
                        <div class="row col-6">
                            <p class="text-center pt-3">1</p>
                        </div>
                        <div class="row col-6 flex-column align-items-center">
                            <a href="" class="btn btn-success col-6 mb-3">編輯</a>
                            <a href="" class="btn btn-danger col-6">刪除</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="https://dummyimage.com/500x300" alt="">
                </td>
                <td>
                    <div class="row">
                        <div class="row col-6">
                            <p class="text-center pt-3">1</p>
                        </div>
                        <div class="row col-6 flex-column align-items-center">
                            <a href="" class="btn btn-success col-6 mb-3">編輯</a>
                            <a href="" class="btn btn-danger col-6">刪除</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>



