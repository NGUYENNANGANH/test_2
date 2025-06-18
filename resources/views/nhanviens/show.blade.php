@extends('nhanviens.master')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thông tin chi tiết nhan vien</b></div>
            <div class="col col-md-6">
                <a href="{{route('nhanviens.index')}}" class="btn btn-primary btn-sm float-end ">Xem tất cả danh sách</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Tên nhan vien</b></label>
            <div class="col-sm-10">
                {{$nhanvien->name_nv}}
            </div>
         </div>


         <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>Mô tả</b></label>
            <div class="col-sm-10">
                {{$nhanvien->mota}}
            </div>
         </div>



           <div class="row mb-3">
            <label class="col-sm-2 col-form-label"><b>birthday</b></label>
            <div class="col-sm-10">
                {{$nhanvien->birthday}}
            </div>
         </div>

           <div class="mb-3 row">
              <label class="col-sm-2 col-form-label"><b>Phòng</b></label>
              <div class="col-sm-10">
                  {{ $nhanvien->phong->name_phong }}
             </div>
        </div>




          
     

<a href="{{ route('nhanviens.index') }}" class="btn btn-secondary">Quay lại</a>
</div>
        </div>
    </div>
</div>
@endsection('content')
