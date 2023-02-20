@extends("layout.main")
@section("content")
    @isset($_GET['done'])
        <span style="color: greenyellow">Xóa thành công</span>
{{--       <script>alert("Xóa thành công")</script>--}}
    @endisset
    <table style="width: 100% !important;" border="1">
        <tr>
            <td>ID</td>
            <td>Tên Sản Phẩm</td>
            <td>Giá</td>
            <td>Hành Động</td>
        </tr>
        @foreach($products as $pr)
        <tr>
            <td>{{$pr->id}}</td>
            <td>{{$pr->ten_san_pham}}</td>
            <td>{{number_format($pr->gia)}} VNĐ</td>
            <td>
                <button>
                    <a href="{{route('edit-prd/'.$pr->id)}}">Sửa</a>
                </button>

                <button>
                    <a href="del_prd&id_prd={{$pr->id}}">Xóa</a>
                </button>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

