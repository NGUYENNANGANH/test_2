@extends('students.master')

@section('content')
@if($message = Session::get('success'))



<div class="alert alert-success">
    {{$message}}
</div>
@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý sinh viên</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b></b></div>
             <div class="col col-md-6">
                <a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end ">Thêm mới</a>
             </div>
        </div>
</div>
<div class = "card-body">
    <table class="table table-bordered">
        <tr>
            <th>Mã sinh viên</th>
            <th>Tên sinh viên</th>
            <th>Địa chỉ Email</th>
            <th>Giới Tính</th>
            <th>Lớp</th>
            <th>Thao tác</th>
        </tr>
        @if($students->count() > 0)
            @foreach($students as $row)
        <tr>
            <td>{{ $row->StudentID}}</td>
            <td>{{ $row->StudentName}}</td>
            <td>{{ $row->StudentEmail}}</td>
            <td> @if ($row->StudentGender == 0) Nam @else Nữ @endif</td>
            <td>{{ $row->ClassRoom->ClassRoomName}}</td>
            <td>
                <form method="post" action="{{route('students.destroy', $row->StudentID)}}">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('students.show', $row->StudentID) }}" class="btn btn-primary btn-sm">Xem</a>
                    <a href="{{ route('students.edit', $row->StudentID) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="Xóa" />
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
    {!! $students->links() !!}
</div>


@endsection
