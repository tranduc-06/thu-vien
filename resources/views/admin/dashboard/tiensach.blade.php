@extends('home')
@section('content1')

<section>
<p><strong>Tổng tiền theo danh mục</strong></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Tổng tiền</th>
    </tr>
  </thead>
  <tbody>
      @foreach($tien_danhmuc as $key=>$value)
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$value->tendanhmuc}}</td>
      <td>{{$value->sum}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</section>

<section>
<p><strong>Tổng tiền theo nhà xuất bản</strong></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Tổng tiền</th>
    </tr>
  </thead>
  <tbody>
      @foreach($tien_nhaxuatban as $key=>$value)
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$value->nhaxuatban}}</td>
      <td>{{$value->sum}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</section>

<section>
<p><strong>Tổng tiền theo tên tác giả</strong></p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên tác giả</th>
      <th scope="col">Tổng tiền</th>
    </tr>
  </thead>
  <tbody>
      @foreach($tien_tentacgia as $key=>$value)
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$value->tentacgia}}</td>
      <td>{{$value->sum}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</section>
@endsection