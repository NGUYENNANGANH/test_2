@extends('students.master')
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
    <div class="card-header">Thêm sinh viên mới</div>
    <div class="card-body">
        <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><b>Tên sinh viên</b></label>
                <div class="col-sm-10">
                    <input type="text" name="StudentName" class="form-control"/>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"><b>Địa chỉ Email</b></label>
                <div class="col-sm-10">
                    <input type="email" name="StudentEmail" class="form-control"/>
                </div>
            </div>

            <div class="row mb-4">
                <label class="col-sm-2 col-form-label"><b>Giới tính</b></label>
                <div class="col-sm-10">
                    <select name="StudentGender" class="form-select">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
            </div>
        <div class="md-3">
            <label for="ClassRoomID" class="form-label"><b>Chọn lớp</b></label>
            <select name="ClassRoomID" class="form-select" required>
                @foreach($classrooms as $classroom)
                <option value="{{ $classroom->ClassRoomID }}">{{ $classroom->ClassRoomName }}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
            <input type="submit"  class="btn btn-primary" value="Thêm"/>
        </div>
        </form>
    </div>
</div>
@endsection('content')

