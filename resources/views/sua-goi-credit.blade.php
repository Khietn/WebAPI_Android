@extends('layouts.Master')
@section('title')
Cập Nhật Gói credit
@endsection
@section('main-content')

<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
        <h4 class="mb-3 header-title">Thêm Mới Gói credit</h4>
    <form action="{{route('goi-credit.cap-nhat-update',['id'=>$GoiCredit->id])}}" method="POST">
        @csrf    
                <div class="form-group col-md-3">
                    <label form="ten_goi">Tên Gói Credit</label>
                    <input type="text" id="ten_goi" name="ten_goi"class="form-control" placeholder="Tên Gói Credit" value="{{$GoiCredit->ten_goi}}">
                    <label form="credit">Credit</label>
                    <input type="text" id="credit" name="credit"class="form-control" placeholder="Credit" value="{{$GoiCredit->credit}}"> 
                    <label form="so-tien">Số Tiền</label>
                    <input type="text" id="so_tien" name="so_tien"class="form-control" placeholder="Số Tiền" value="{{$GoiCredit->so_tien}}"> 
                      <br> <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>                   
                </div>  
        
        
        </form>
        </div>
    </div>
    </div>
</div>
@endsection
