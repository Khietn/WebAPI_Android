<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


@if (session('success'))
<script>alert('{{session('success')}}'</script>
@endif
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
<table style="margin:5px;">
	<tr>
		<th>ID</th>
		<th>Ten</th>
		<th></th>
		<th></th>
	</tr>
	@foreach($dsLinhVuc as $ds)
	<tr>
		<td>{{$ds->id}}</td>
		<td>{{$ds->ten}}</td>
		<td><button type="button" class="btnEdit" >Edit</button></td>
		<td>
			<a href="{{ route('linh-vuc.danh-sach.chinh-sua', ['id'=>$ds->id]) }}" class="btn btn-info">Edit</a>
		</td>
		<td>
			<form method="GET" action=" {{route('linh-vuc.danh-sach.xoa',['id'=>$ds->id])}} ">
				<input value="{{$ds->xoa}}" name="txtXoa" hidden>
				<button type="Submit" formaction="{{route('linh-vuc.danh-sach.xoa',['id'=>$ds->id])}}">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
<div class="paginate">{{ $dsLinhVuc->links() }}</div>


<form action="{{route('linh-vuc.xl-them-moi')}}" method="POST">
	@csrf
	Them linh vuc: <input type="text" ID="txt_Them" name="txtTen"><br>
	<button type="Submit" class="them">Them</button>
</form>

<script>
	$(document).ready(function(){
		$(".btnEdit").click(function(){
			$(".formEdit").show();
			$("body").css("background-color","black");
			$(".btnEdit").hide();
			$(".btnDelete").hide();
			$(".paginate").hide();
			$("#txt_Them").hide();
			$(".them").hide();
		});
		$(".btnCancel").click(function(){
			$(".formEdit").hide();
			$("body").css("background-color","white");
			$(".btnEdit").show();
			$(".btnDelete").show();
			$(".paginate").show();
			$("#txt_Them").show();
			$(".them").show();
		});
	});
</script>