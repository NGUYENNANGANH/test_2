@extends('students.master')
@section('content')
<div class="card">
    <div class="card-header">Sửa thông tin sinh viên</div>
    <div class="card-body">
    <form method="POST" action="{{ route('students.update', $student->StudentID) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Tên sinh viên</label>
            <div class="col-sm-10">
                <input type="text" name="StudentName" class="form-control" value="{{ $student->StudentName }}"/>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Địa chỉ Email</label>
            <div class="col-sm-10">
                <input type="email" name="StudentEmail" class="form-control" value="{{ $student->StudentEmail }}"/>
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form">Giới tính</label>
            <div class="col-sm-10">
                <select name="StudentGender" class="form-select">
                    <option value="0" >Nam</option>
                    <option value="1" >Nữ</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="ClassRoomID" class="col-sm-2 col-label-form">Lớp</label>
                <select id="ClassRoomID" class="form-select" name="ClassRoomID" required>
                    @foreach($classrooms as $classroom)
                        <option value="{{ $classroom->ClassRoomID }}" @if ($classroom->ClassRoomID == $student->ClassRoomID) selected @endif>
                            {{ $classroom->ClassRoomName }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $student->StudentID }}" />
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class ="btn btn-primary" value="sửa" />

            </div>
        </form>
        </div>
    </div>

<script>
    document.getElementsByName('StudentGender')[0].value = "{{ $student->StudentGender }}";
</script>

@endsection('content')
