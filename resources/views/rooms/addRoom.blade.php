@extends('index')
@section('content')
<div class="content-wrapper">
     <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="container">
               <div class="">
                    <div class="form-group">
                         <label for="">Tên Room</label>
                         <input type="text" name="room_no" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="">ID Room</label>
                         <input type="text" name="room_id" class="form-control">
                    </div>
                    <div class="form-group">
                         <label>floor</label>
                         <select name="floor" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                         </select>
                    </div>
                    <div class="form-group">
                         <label>service</label>
                         <select name="service_id[]" multiple class="form-control">
                         @foreach($services as $s)
                              <option value="{{$s->id}}">{{$s->name}}</option>
                              @endforeach
                         </select>
                    </div>
                    <div class="form-group">
                         <label for="">Ảnh sản phẩm</label>
                         <input type="file" name="uploadfile" class="form-control">
                    </div>
                    <div class="form-group">
                         <label for="">detail</label>
                         <input type="text" name="detail" class="form-control">
                    </div>
                    
                    <div class="form-group">
                         <label for="">Giá</label>
                         <input type="text" name="price" class="form-control">
                    </div>
                    <div class="text-right">
                         <button type="submit" class="btn btn-primary">Lưu</button>
                         <a href="{{route('listRoom')}}" class="btn btn-danger">Hủy</a>
                    </div>
               </div>
     </form>
</div>
@endsection