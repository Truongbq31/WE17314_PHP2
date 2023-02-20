@extends("layout.main")
@section("content")
    @if(isset($_SESSION['errors']) && $_GET['msg'])
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red; ">{{$error}}</li>
            @endforeach
        </ul>
    @endif

    @if(isset($_SESSION['success']))
        <span style="color: green">Thêm thành công!</span>
    @endif


<form method="post" action="{{route('post-product')}}">
    Tên sản phẩm <input type="text" name="ten_sp" value="">
    <br>
    Giá <input type="text" name="gia" value="">
    <button type="submit" name="btn_add">Submit</button>
</form>
@endsection