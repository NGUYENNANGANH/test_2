@extends('nhanviens.master')

@section('content')
@if($message = Session::get('success'))



<div class="alert alert-success">
    {{$message}}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý nhan vien</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b></b></div>
             <div class="col col-md-6">
                <a href="{{ route('nhanviens.create') }}" class="btn btn-success btn-sm float-end ">Thêm mới</a>
             </div>
        </div>
</div>
<div class = "card-body">
    <table class="table table-bordered">
        <tr>
            <th>Mã nhan vien</th>
            <th>Tên nhan vien</th>
            <th>Mo ta</th>
            <th>birthday</th>
            <th>Phong</th>
        </tr>
        @if($nhanviens->count() > 0)
            @foreach($nhanviens as $row)
        <tr>
            <td>{{ $row->id_nv}}</td>
            <td>{{ $row->name_nv}}</td>
            <td>{{ $row->mota}}</td>
            <!-- <td> @if ($row->StudentGender == 0) Nam @else Nữ @endif</td> -->
              <td>{{ $row->birthday}}</td>

              <!-- phong nay la phuong thuc model nhan vien -->
               <!-- $row->phong truy xuất đối tượng phong liên quan thông qua mối quan hệ
                name_phong lấy thuộc tính tên phòng từ đối tượng phòng đó -->
            <td>{{ $row->phong->name_phong}}</td>
            <td>
                <!-- <form method="post" action="{{route('nhanviens.destroy', $row->id_nv)}}" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('nhanviens.show', $row->id_nv) }}" class="btn btn-primary btn-sm">Xem</a>
                    <a href="{{ route('nhanviens.edit', $row->id_nv) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <button type="button" class="btn btn-danger btn-sm delete-btn">Xóa</button>
                </form> -->
            <form method="post" action="{{route('nhanviens.destroy', $row->id_nv)}}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa nhân viên {{ $row->name_nv }}?');">
                @csrf
                @method('DELETE')
                <a href="{{ route('nhanviens.show', $row->id_nv) }}" class="btn btn-primary btn-sm">Xem</a>
                <a href="{{ route('nhanviens.edit', $row->id_nv) }}" class="btn btn-warning btn-sm">Sửa</a>
                <a href="{{ route('nhanviens.confirm-delete', $row->id_nv) }}" class="btn btn-danger btn-sm">Xóa</a>
                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Xóa" /> -->
            </form>
            
            
            </td>
        </tr>

        @endforeach

        @else
        <tr>
            <td colspan="5" class="text-center">No Data Found</td>

        </tr>
        @endif

    </table>
    {!! $nhanviens->links() !!}
</div>


@endsection
