@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">SỬA THÔNG TIN TUYẾN</h2>
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

            <form class="form-horizontal striped-rows b-form" method="post" action="admin/sua-tuyen-xe">
            <input type="hidden" name="_token" value={{csrf_token()}}>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-labelt col-md-3">ID:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->IDTuyen}}" placeholder="Mã tuyến" name="IDTuyen" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">TenTuyen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->TenTuyen}}" name="TenTuyen" placeholder="Tên tuyến">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DiemDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->DiemDi}}" name="DiemDi" placeholder="Điểm đi">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DiemDen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->DiemDen}}" name="DiemDen" placeholder="Điểm đến">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DoDai:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->DoDai}}" name="DoDai" placeholder="Độ dài">
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">ThoiGian:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->ThoiGian}}" name="ThoiGian" placeholder="Thời gian">
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$tuyen_xe->MoTa}}" name="MoTa" placeholder="Mô tả">
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
                                    <input type="submit" value="Save" class="btn btn-info" name="btnLuu">
                                    <a href="./qlt_detail.html"><button type="button" class="btn btn-dark">Cancel</button></a>
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
@endsection
