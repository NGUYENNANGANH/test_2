@extends('nhanviens.master')
@section('content')
@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">Thêm nhan vien</div>
    <div class="card-body">
        <form method="post" action="{{ route('nhanviens.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><b>Tên nhan vien</b></label>
                <div class="col-sm-10">
                    <input type="text" name="name_nv" class="form-control"/>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><b>Mo ta</b></label>
                <div class="col-sm-10">
                    <input type="text" name="mota" class="form-control"/>
                </div>
            </div>


               <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><b>Birthday</b></label>
                <div class="col-sm-10">
                    <input type="date" name="birthday" class="form-control"/>
                </div>
            </div>


            <!-- <div class="row mb-4">
                <label class="col-sm-2 col-form-label"><b>Giới tính</b></label>
                <div class="col-sm-10">
                    <select name="StudentGender" class="form-select">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
            </div> -->


        <div class="md-3">
            <label for="id_phong" class="form-label"><b>Chọn lớp</b></label>
            <select name="id_phong" class="form-select" required>
                @foreach($phongs as $row)
                <option value="{{ $row->id_phong }}">{{ $row->name_phong}}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <a href="{{ route('nhanviens.index') }}" class="btn btn-secondary">Quay lại</a>
            <input type="submit"  class="btn btn-primary" value="Thêm"/>
        </div>
        </form>
    </div>
</div>
@endsection('content')

