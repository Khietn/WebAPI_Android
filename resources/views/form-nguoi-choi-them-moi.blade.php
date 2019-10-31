@extends('layouts.Master')
@section('head')
@parent
@endsection

@section('main-content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
        <h4 class="mb-3 header-title">Thêm Mới Người Chơi</h4>
    <form action="{{route('nguoi-choi.tm-them-moi')}}" method="POST">
        @csrf
        
                <div class="form-group col-md-3">
                    <label form="ten_dang_nhap">Tên Đăng Nhập</label>
                    <input type="text" id="ten_dang_nhap" name="ten_dang_nhap"class="form-control" placeholder="Tên Đăng Nhập">
                    <label form="mat_khau">Mật Khẩu</label>
                    <input type="text" id="mat_khau" name="mat_khau"class="form-control" placeholder="Mật Khẩu"> 
                    <label form="email">email</label>
                    <input type="text" id="email" name="email"class="form-control" placeholder="email"> 
                    <label form="hinh_dai_dien">Hình đại diện</label>
                    <input type="text" id="hinh_dai_dien" name="hinh_dai_dien"class="form-control" placeholder="Hình đại diện"> 
                    <label form="diem_cao_nhat">Điểm cao nhất</label>
                    <input type="number" id="diem_cao_nhat" name="diem_cao_nhat"class="form-control" placeholder="Điểm cao nhất"> 
                    <label form="credit">Credit</label>
                    <input type="number" id="credit" name="credit"class="form-control" placeholder="Credit"> 
                    <br> <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>                   
                </div>  
        
        
        </form>
        </div>
    </div>
    </div>
</div>
@endsection
@section('footer')
@parent
@endsection
