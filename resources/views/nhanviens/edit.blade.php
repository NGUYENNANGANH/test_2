@extends('nhanviens.master')
@section('content')
<div class="card">
    <div class="card-header">Sửa thông tin nhan vien</div>
    <div class="card-body">
    <form method="POST" action="{{ route('nhanviens.update', $nhanvien->id_nv) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Tên nhan vien</label>
            <div class="col-sm-10">
                <input type="text" name="name_nv" class="form-control" value="{{ $nhanvien->name_nv }}"/>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Mo ta</label>
            <div class="col-sm-10">
                <input type="text" name="mota" class="form-control" value="{{ $nhanvien->mota }}"/>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Birthday</label>
            <div class="col-sm-10">
                <input type="date" name="birthday" class="form-control" value="{{ $nhanvien->birthday }}"/>
            </div>
        </div>


        <!-- <div class="row mb-4">
            <label class="col-sm-2 col-label-form">Giới tính</label>
            <div class="col-sm-10">
                <select name="StudentGender" class="form-select">
                    <option value="0" >Nam</option>
                    <option value="1" >Nữ</option>
                </select>
            </div>
        </div> -->


        <div class="mb-3">
            <label for="id_phong" class="col-sm-2 col-label-form">Phong</label>
                <select id="id_phong" class="form-select" name="id_phong" required>
                    @foreach($phongs as $phong)
                        <option value="{{ $phong->id_phong}}" @if ($phong->id_phong == $nhanvien->id_phong) selected @endif>
                            {{ $phong->name_phong}}
                        </option>
                    @endforeach
                </select>
            </div>

            
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $nhanvien->id_nv}}" />
                <a href="{{ route('nhanviens.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class ="btn btn-primary" value="sửa" />

            </div>
        </form>
        </div>
    </div>


@endsection('content')
