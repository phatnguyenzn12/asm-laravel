@extends('index')
@section('content')
<div class="content-wrapper">
     <form action="" method="post" enctype="multipart/form-data">
     @csrf
     <div class="container">
     @foreach($room as $r)
          <div class="">
               <div class="form-group">
                    <label for="">Tên Room</label>
                    <input type="text" name="room_no" class="form-control" value="{{$r->room_no}}">
               </div>
               <div class="form-group">
                         <label>floor</label>
                         <select name="floor" class="form-control" value="{{$r->floor}}">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                         </select>
                    </div>
               <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="uploadfile" class="form-control">
                    <img src="{{ asset('storage/' . $r->image) }}" alt="" width="150" height="150">
               </div>
               <div class="form-group">
                    <label for="">detail</label>
                    <input type="text" name="detail" class="form-control" value="{{$r->detail}}">
               </div>
               <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" name="price" class="form-control" value="{{$r->price}}">
               </div>
          <div class="text-right">
               <button type="submit" class="btn btn-primary">Lưu</button>
               <a href="{{route('listRoom')}}" class="btn btn-danger">Hủy</a>
          </div>
     </div>   
     @endforeach
     </form>
</div>
@endsection