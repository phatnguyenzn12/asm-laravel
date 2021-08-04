@extends('index')
@section('content')
<div class="content-wrapper">
  <table id="example2" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Room</th>
        <th>floor</th>
        <th>image</th>
        <th>detail</th>
        <th>price</th>
        <th><a href="{{route('getaddRoom')}}"><button class="btn btn-success">thêm</button></a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($rooms as $r)
      <tr>
        <td>{{$r->room_no}}</td>
        <td>{{$r->floor}}</td>
        <td>
        <img src="{{ asset('storage/' . $r->image) }}" alt="" width="150" height="150">
        </td>
        <td>{{$r->detail}}</td>
        <td>{{$r->price}}</td>
        <td>
          <a href="{{route('geteditRoom', $r->id)}}"><button class="btn btn-primary">sửa</button></a>
          <a href="{{route('deleteRom', $r->id)}}"><button class="btn btn-danger">xoá</button></a>
        </td>
      </tr>
      @endforeach
  </table>
</div>
@endsection