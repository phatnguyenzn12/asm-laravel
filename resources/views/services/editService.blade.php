@extends('index')
@section('content')
<div class="content-wrapper">
     <form action="" method="post" enctype="multipart/form-data">
          @csrf
          @foreach($services as $s)
          <div class="container">
               <div class="">
                    <div class="form-group">
                         <label for="">Tên Service</label>
                         <input type="text" name="name" class="form-control" value="{{$s->name}}">
                    </div>
                    <div class="form-group">
                         <label for="">icon</label>
                         <input type="file" name="uploadfile" class="form-control">
                    </div>
                    <img src="{{ asset('storage/' . $s->icon) }}" alt="" width="150" height="150" mt-2>
                    <div class="text-right">
                         <button type="submit" class="btn btn-primary">Lưu</button>
                         <a href="{{route('listService')}}" class="btn btn-danger">Hủy</a>
                    </div>
               </div>
          </div>
          @endforeach
     </form>
</div>
@endsection