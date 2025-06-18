
@extends('nhanviens.master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Xác nhận xóa nhân viên</h4>
                </div>
                <div class="card-body">
                    <p class="text-danger fw-bold">Bạn có chắc chắn muốn xóa nhân viên sau?</p>
                    
                    <table class="table table-bordered">
                        <tr>
                            <th>Mã nhân viên</th>
                            <td>{{ $nhanvien->id_nv }}</td>
                        </tr>
                        <tr>
                            <th>Tên nhân viên</th>
                            <td>{{ $nhanvien->name_nv }}</td>
                        </tr>
                        <tr>
                            <th>Mô tả</th>
                            <td>{{ $nhanvien->mota }}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{ $nhanvien->birthday }}</td>
                        </tr>
                        <tr>
                            <th>Phòng</th>
                            <td>{{ $nhanvien->phong->name_phong }}</td>
                        </tr>
                    </table>
                    
                    <div class="mt-3">
                        <form method="post" action="{{ route('nhanviens.destroy', $nhanvien->id_nv) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger me-2">Xác nhận xóa</button>
                            <a href="{{ route('nhanviens.index') }}" class="btn btn-secondary">Hủy</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection