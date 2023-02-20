@extends("layout.main")
@section("content")
    @isset($_SESSION['errors'])
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red; ">{{$error}}</li>
            @endforeach
        </ul>
    @endisset

    @isset($_GET['done'])
        <span style="color: green">Thêm thành công!</span>
    @endisset
    <form method="post" action="{{route('edit-post-product/'.$product_detail->id)}}">
        Tên sản phẩm <input type="text" name="ten_sp" value="{{$product_detail->ten_san_pham}}">
        <br>
        Giá <input type="text" name="gia" value="{{$product_detail->gia}}">
        <button type="submit" name="btn_edit">Lưu</button>
    </form>
@endsection
