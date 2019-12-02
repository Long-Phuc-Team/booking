@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">THÊM LỊCH TRÌNH</h2>
            <hr>

            @if (count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
            @endif

            @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif

            <form class="form-horizontal striped-rows b-form" method="post" action="admin/them-lich-trinh">
            <input type="hidden" name="_token" value={{csrf_token()}}>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-label col-md-3">Tuyen:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="IDTuyen">
                            <option>Chọn tuyến</option>
                            @foreach ($ds_tuyen_xe as $tuyen_xe)
                                <option value="{{$tuyen_xe->IDTuyen}}">{{$tuyen_xe->TenTuyen}}</option>    
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">HangXe:</label>
                    <div class="col-md-9">
                        <select class="form-control" onchange="loadCbxXeTheoCbxHang()" id="cbx_hang_xe" name="IDHangXe">
                            <option>Chọn hãng xe</option>
                            @foreach ($ds_hang_xe as $hang_xe)
                                <option value="{{$hang_xe->IDHangXe}}">{{$hang_xe->TenHangXe}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                        <label class="control-label col-md-3">Xe:</label>
                        <div class="col-md-9">
                            <select class="form-control" id="cbx_xe" name="SoXe">
                                <option>Chọn xe</option>
                            </select>
                        </div>
                    </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GioDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="" placeholder="Giờ đi (Ví dụ: 17:00)" name="GioDi">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GioDen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="" placeholder="Giờ đến (Ví dụ: 19:30)" name="GioDen">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">NgayDi:</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="" value="" placeholder="Ngày đi" name="NgayDi" >
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GiaVe:</label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="" value="" placeholder="Giá vé" name="GiaVe" >
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="" placeholder="Mô tả" name="MoTa">
                    </div>
                </div>
                <!--/span-->  
            </div>
            <hr>
            <div class="form-actions">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" value="Add" class="btn btn-danger" name="btnThem">
                                    <button type="reset" class="btn btn-primary">Reset</button> 
                                    <a href="./qllt.html"><button type="button" class="btn btn-dark">Cancel</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>
<!-- end content -->
<script src="assets/js/load-data.js"></script>
@endsection