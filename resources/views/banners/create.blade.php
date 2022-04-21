@extends('layout.templateIndex')
@section('shoppingTitle03')
模板化的Banner新增頁
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
            Banner產品新增頁
        </div>
        <div class="col-2">
        </div>
    </div>
</h1>
<div class="comment_board">
    <form action="">
        <div>
            <h3>
                請在此新增
            </h3>
        </div>
       <div class="mb-3 mt-3">
            <label for="banner_img">1.選擇圖片</label>
            <input type="file" name="banner_img">
       </div>
       <div class="mb-3 mt-3">
            <label for="banner_opacity">2.透明度設定</label>
            <input type="text" name="banner_opacity">
        </div>
        <div class="mb-3 mt-3">
            <label for="banner_weight">3.權重設定</label>
            <input type="number" name="banner_weight">
        </div>
        <div>
            <button class="btn btn-primary"  type="submit">確定送出</button>
        </div>
    </form>
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



