@extends('home')

<!-- <head>
    <link href="{{ asset('css/dasboard.css') }}" rel="stylesheet">
</head> -->

@section('content1')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Show book</li>
  </ol>
</nav>

<div class="card-header">{{ __('Liệt kê sách') }}</div>

<table class="table sortable">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col" class="sortcol">Tên sách</th>
            <th scope="col">Slug sách</th>
            <th scope="col">Tên tác giả</th>
			<th scope="col"> Lớp DDC </th>
            <th scope="col"> Danh mục </th>
            <th scope="col"> Nhà xuất bản </th>
            <th scope="col"> Năm xuất bản</th>
            <th scope="col"> Hình ảnh </th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá bìa</th>
            <th scope="col"> Quản lý </th>

        </tr>
    </thead>
    <tbody class="tbody">
        @foreach($list_sach as $key => $sach)
        <tr>
            <td scope="row">{{$key}}</td>
            <td>{{$sach->tensach}}</td>
            <td>{{$sach->slugsach}}</td>
            <td>{{$sach->tentacgia}}</td>
			<td>{{$sach->ddc->tenlopDDC}}</td>
            <td>{{$sach->danhmucsach->tendanhmuc}}</td>
            <td>{{$sach->nhaxuatban}}</td>
            <td>{{$sach->namxuatban}}</td>
            <td><img src="{{asset('uploads/sach/'.$sach->hinhanh)}}" height="180px" width="150px" </td>
            <td>{{$sach->soluong}}</td>
            <td>{{$sach->giabia}}</td>
            <td>
                <div style="display:flex;">
                <a href="{{route('sach.edit',[$sach->id_Sach])}}" class="btn btn-primary btn-sm">edit</a>
                <form action="{{route('sach.destroy',[$sach->id_Sach])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button style="margin-left: 5px;;" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger btn-sm">delete</button>

                </form>
            </div>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

</div>
<script>
    // Lấy tham chiếu đến tất cả các bảng sắp xếp được
var tbls = document.querySelectorAll("table.sortable");
// Tiền xử lý các bảng, cột sắp xếp được
for (var i = 0; i < tbls.length; i++)
	preProcessSortableTbl(tbls[i]);
// Hàm tiền xử lý
function preProcessSortableTbl(tbl) {
	// Do chưa biết trước số bảng sắp xếp được
	// nên không thể dùng các biến toàn cục để
	// biểu thị cột và chiều đang được sắp xếp cho từng bảng
	// như ở ví dụ đơn giản.

	// Giải pháp: Thêm vào trước mỗi bảng sắp xếp được 
	// 2 đối tượng hidden để lưu thông tin
	// cột và chiều đang được sắp xếp trên bảng.

	var col = document.createElement("input");
	var dir = document.createElement("input");
	col.type = "hidden";
	dir.type = "hidden";
	col.value = "-1";
	dir.value = "";
	tbl.parentNode.insertBefore(col, tbl);
	tbl.parentNode.insertBefore(dir, tbl);

	// Tiền xử lý các ô tiêu đề cột sắp xếp được
	var hcells = tbl.rows[0].cells;
	for (var i = 0; i < hcells.length; i++)
		if (hcells[i].classList.contains("sortcol")) { // là cột sắp xếp được
			// Chèn đối tượng <span class="arrow"></span> vào cuối tiêu đề
			// để biểu thị mũi tên chiều sắp xếp.
			hcells[i].innerHTML += '<span class="arrow"></span>';
 
			// Xử lý sự kiện kích chuột trên ô tiêu đề
			hcells[i].onclick = function() {
				// Cột và chiều đang được sắp xếp trên bảng chứa ô tiêu đề
				var d = this.parentNode.parentNode.parentNode.previousSibling;
				var c = d.previousSibling;

				// Bỏ biểu thị cột đang được sắp xếp (nếu có)
				var j;
				for (j = 0; j < this.parentNode.cells.length; j++) {
					this.parentNode.cells[j].classList.remove("asc");
					this.parentNode.cells[j].classList.remove("desc");
				}

				// Lấy chỉ mục của ô tiêu đề
				// (có thể gộp với vòng for trên cho tối ưu nhưng
				//  được tác ra cho dễ hiểu)
				for (j = 0; j < this.parentNode.cells.length; j++)
					if (this.parentNode.cells[j] == this) break;

				if (c.value == j.toString()) {
					// Cột chứa ô tiêu đề đang được sắp xếp, đảo chiều
					d.value = (d.value == "desc" ? "asc" : "desc");

				} else {
					// Mặc định sắp xếp tăng dần
					c.value = j.toString();
					d.value = "asc";
				}

				// Thêm biểu thị cột được sắp xếp
				this.classList.add(d.value);

				// Sắp xếp
				sortTbl(this.parentNode.parentNode.parentNode);
			};
	}
}


// Sắp xếp dữ liệu trong bảng, trừ cột 1
// Có thể mở rộng hàm này để cho biết có đảo cả cột 1 hay không
function sortTbl(tbl) {
	var dir = tbl.previousSibling.value;
	var col = parseInt(tbl.previousSibling.previousSibling.value);

	for (var i = 1; i < tbl.rows.length; i++)
		for (var j = i+1; j < tbl.rows.length; j++) 
			if ((dir == "asc" && tbl.rows[i].cells[col].innerHTML.toLowerCase() > 
				tbl.rows[j].cells[col].innerHTML.toLowerCase()) || 
				(dir == "desc" && tbl.rows[i].cells[col].innerHTML.toLowerCase() <
				tbl.rows[j].cells[col].innerHTML.toLowerCase())) {
					//hoán vị
					for (var t = 1; t < tbl.rows[i].cells.length; t++) {
						tmp = tbl.rows[i].cells[t].innerHTML;
						tbl.rows[i].cells[t].innerHTML = tbl.rows[j].cells[t].innerHTML;
						tbl.rows[j].cells[t].innerHTML = tmp;
					}				
			}
}


</script>
@endsection