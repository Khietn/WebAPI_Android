<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>	
	.paginate ul li {
		display:inline-block;
		font-size:20px;
		border:1px solid black;
		padding:5px;
		text-align:center;
		text-decoration: none;
		color:red;
		box-shadow: 1px 2px 0px 0px black;
		margin:5px;
	}
	table tr td{
		border: 1px solid black;
		text-align: center;
		padding:10px;
	}
	.formEdit{
		top:35%;
		left:40%;
		position: absolute;
		height:100px;
		width:auto;
		background:red;
		padding:50px;
	}
</style>
<form aciton="{{route("linh-vuc.danh-sach.cap-nhat",['id'=>$linhVuc->id])}}" method="POST" class="formEdit" >
	@method('PUT')
	@csrf
	ID: <input type="text" name="txtIDEdit" value="{{$linhVuc->id}}" readonly><br>
	Linh vuc: <input type="text"  name="txtTenEdit" value="{{$linhVuc->ten}}"><br>
	<button type="Submit">Đồng ý</button>
	<a href="{{route('linh-vuc.danh-sach')}}" type="button" class="btnCancel">Hủy</button>
</form>
