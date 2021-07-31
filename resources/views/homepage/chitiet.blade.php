@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('status') }}
</div>
@endif
<ul class="list-group">
  @foreach($sach as $key => $chitiet)
  <img src="{{asset('uploads/sach/'.$chitiet->hinhanh)}}">
  <li class="list-group-item">{{$chitiet->id_Sach}}</li>
  <li class="list-group-item">{{$chitiet->tensach}}</li>
  <li class="list-group-item">{{$chitiet->tentacgia}}</li>
  <li class="list-group-item">{{$chitiet->nhaxuatban}}</li>
  <li class="list-group-item">{{$chitiet->namxuatban}}</li>
  <li class="list-group-item">{{$chitiet->tomtat}}</li>

  @endforeach
</ul>
@if(empty($user->id) && empty(chitiet->id_Sach))
    <p>Bạn đã mượn sách này,vui lòng chọn sách khác</p>
@else


<form action="{{url('muon-sach')}}" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$user->id}}">
  <input type="hidden" name="id_Sach" value="{{$chitiet->id_Sach}}"/>
  <button type="submit" class="btn btn-primary btn-sm">Mượn</button>
</form>

@endif