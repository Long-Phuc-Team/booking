@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">THÔNG TIN CHI TIẾT XE</h2>
            <hr>
            <form class="form-horizontal striped-rows b-form">
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-labelt col-md-3">SoXe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$xe->SoXe}}" placeholder="Số xe" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">HangXe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$xe->TenHangXe}}" placeholder="Số xe" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">LoaiXe:</label>
                    <div class="col-md-9">
                            <input type="text" class="form-control" id="" value="{{$xe->TenLoaiXe}}" placeholder="Số xe" readonly>
                    </div>
                </div>
                <!--/span-->
                <div class="form-group row">
                    <label class="control-label col-md-3">SoGhe:</label>
                    <div class="col-md-9">
                            <input type="text" class="form-control" id="" value="{{$xe->SoGhe}}" placeholder="Số xe" readonly>
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                            <input type="text" class="form-control" id="" value="{{$xe->MoTa}}" placeholder="Số xe" readonly>
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
                                    <a href="./qlx_edit.html"><button type="button" class="btn btn-success">Edit</button></a>
                                    <a href="./qlx.html"><button type="button" class="btn btn-dark">Cancel</button></a>
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