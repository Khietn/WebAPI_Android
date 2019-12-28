<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\NguoiChoiModel;
use App\Http\Requests\NguoiChoiRequest;
use App\Http\Resources\NguoiChoiResource;
use Illuminate\Support\Facades\Hash;
class NguoiChoiController extends Controller
{
    public function data()
    {
        $NguoiChoi=NguoiChoiModel::all();
        return view ('NguoiChoi',compact('NguoiChoi'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $NguoiChoi=DB::table('nguoi_choi')->get();
        return view('NguoiChoi',compact('NguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form-nguoi-choi-them-moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NguoiChoiRequest  $request)
    {             
            $NguoiChoi=new NguoiChoiModel;
            $NguoiChoi->ten_dang_nhap=$request->ten_dang_nhap;
            $NguoiChoi->mat_khau=Hash::make($request->matkhau);
            $NguoiChoi->email=$request->email;
            $NguoiChoi->hinh_dai_dien=$request->hinh_dai_dien;
            $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
            $NguoiChoi->credit=$request->credit;
            $NguoiChoi->save();
            return redirect('nguoi-choi')->with('success','Thêm Mới Thành Công !');
    }
    public function updatestatus(Request $request,$id)
    {
        if($request->xoa==0)
        {
            $NguoiChoi=NguoiChoiModel::where('id',$id)->update(['xoa'=>1]);
        }
        else
        {
            $NguoiChoi=NguoiChoiModel::where('id',$id)->update(['xoa'=>0]);
        }
        return redirect('nguoi-choi')->with('success','Xóa Thành Công !');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $NguoiChoi = NguoiChoiModel::findOrFail($id);
        $NguoiChoi->ten_dang_nhap=$request->input('ten_dang_nhap_moi');
        $NguoiChoi->mat_khau=Hash::make($request->input('mat_khau_moi'));
        $NguoiChoi->email=$request->input('email_moi');
        $NguoiChoi->hinh_dai_dien=$request->input('hinh_dai_dien_moi');
        $NguoiChoi->diem_cao_nhat=$request->input('diem_cao_nhat_moi');
        $NguoiChoi->credit=$request->input('credit_moi');
        $NguoiChoi->save();
        return redirect('nguoi-choi')->with('success',"Cập Nhật Thành Công !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function getAPI($id){
        $nguoichoi = NguoiChoiModel::find($id);
        return new NguoiChoiResource($nguoichoi);
    }
    public function getallAPI(){
        $nguoichoi= NguoiChoiModel::all();
        return NguoiChoiResource::collection($nguoichoi);
    }
    public function LayAPI(){
        $danhsachnguoichoi=NguoiChoiModel::all();
        $result=[
            'success'=>true,
            'data'=>$danhsachnguoichoi
        ];
        return response()->json($result);
    }

    public function getAPIa(Request $request){
        $username = $request->query('username');
        $password = $request->query('password');
        $nguoichoi = NguoiChoiModel::where('ten_dang_nhap',$username)->where('mat_khau',$password)->get();
        return NguoiChoiResource::collection($nguoichoi);
    }
    /**Them nguoi choi */
    public function storeAPI(Request $request)
    {
        $NguoiChoi=new NguoiChoiModel;
        $NguoiChoi->ten_dang_nhap=$request->ten_dang_nhap;
        $NguoiChoi->mat_khau=$request->mat_khau;
        $NguoiChoi->email=$request->email;
        $NguoiChoi->hinh_dai_dien=0;
        $NguoiChoi->diem_cao_nhat=0;
        $NguoiChoi->credit=0;
        $NguoiChoi->save();
        return response()->json($NguoiChoi);
    }
    /**Cap nhat nguoi choi */
    public function editAPI(Request $request){
        // $username = $request->query('ten_dang_nhap');
        // $password = $request->query('mat_khau');
        // $email = $request->query('email');
        // $picture = $request->query('hinh_anh');
        // $nguoichoi = NguoiChoiModel::where('ten_dang_nhap',$username)->update([
        //                                                                 'ten_dang_nhap'=>$username,
        //                                                                 'mat_khau'=>$password,
        //                                                                 'email'=>$email,
        //                                                                 'hinh_dai_dien'=>$picture]);
        $nguoichoi = NguoiChoiModel::where('ten_dang_nhap',$request->query('ten_dang_nhap'))
                                                                            ->update([
                                                                                'mat_khau'=>$request->query('mat_khau'),
                                                                                'email'=>$request->query('email'),
                                                                                'hinh_dai_dien'=>$request->query('hinh_dai_dien')
                                                                            ]);
        return response()->json($nguoichoi);
                                   
    }
    public function CapNhatNguoiChoi(Request $request){
        $id=$request->id;
        $nguoichoi=NguoiChoiModel::find($id);
        $nguoichoi->email=$request->email;
        $nguoichoi->mat_khau=$request->mat_khau;
        $nguoichoi->hinh_dai_dien=$request->hinh_dai_dien;
        $nguoichoi->save();
        return response()->json($nguoichoi);

    }
    /* BXH */
    public function rankAPI(){
        $nguoichoi = NguoiChoiModel::select('id','ten_dang_nhap','hinh_dai_dien','diem_cao_nhat')->orderBy('diem_cao_nhat','desc')->take(10)->get();
        return response()->json($nguoichoi);
    }
}
