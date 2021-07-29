@extends('home')

@section('content1')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên sách</th>
      <th scope="col">Tên độc giả</th>
      <th scope="col">id_Thẻ</th>
      <th scope="col">Email</th>
      <th scope="col">Ngày mượn</th>
      <th scope="col">Ngày hẹn trả</th>
      <th scope="col">Ngày trả</th>
      <th scope="col">Tình trạng</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

@endsection