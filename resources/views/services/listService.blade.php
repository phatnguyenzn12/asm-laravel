@extends('index')
@section('content')
<div class="content-wrapper">
  <table id="example2" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>icon</th>
        <th><a href="{{route('getCreateService')}}"><button class="btn btn-success">Thêm</button></a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($services as $s)
      <tr>
        <td>{{$s->name}}</td>
        <td> <img src="{{ asset('storage/' . $s->icon) }}" alt="" width="150" height="150"></td>
        <td>
          <a href="{{route('getEditService', $s->id)}}"><button class="btn btn-success">sửa</button></a>
          <a href="{{route('deleteService', $s->id)}}"><button class="btn btn-danger">xoá</button></a>
        </td>
      </tr>
      @endforeach
  </table>
</div>
@endsection