@extends('layouts.user')
@section('content2')
<section>
  <div class="text-center">
 
   <h2 style="color:black">Sách bạn đang mượn</h2>
  
</div> <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên sách</th>
      <th scope="col">Ngày mượn</th>
      <th scope="col">Ngày hẹn trả</th>
      <th scope="col">Ngày trả</th>
      <th scope="col">Tình trạng</th>
    </tr>
  </thead>
  <tbody>  
    @foreach ($muon as $key => $value)
    <tr>
    
      <th scope="row">{{$key}}</th>
      <td>{{$value->tensach}}</td>  
      <td>{{$value->ngay_Muon}}</td>
      <td>{{$value->ngay_Hentra}}</td>
      <td>{{$value->ngay_Tra}}</td>
      <td>{{$value->tinhtrang}}</td>   
    </tr>
    @endforeach
  </tbody>
</table>
</section>
@endsection