@extends('index')
@section('content')
<div class="content-wrapper">
     <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="container">
               <div class="">
                    <div class="form-group">
                         <label for="">Tên Service</label>
                         <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="">icon</label>
                         <input type="file" name="uploadfile" class="form-control">
                    </div>
                    <div class="text-right">
                         <button type="submit" class="btn btn-primary">Lưu</button>
                         <a href="{{route('listService')}}" class="btn btn-danger">Hủy</a>
                    </div>
               </div>
     </form>
</div>
@endsection