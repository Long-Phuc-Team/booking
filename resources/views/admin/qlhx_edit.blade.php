@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">SỬA THÔNG TIN HÃNG XE</h2>
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

            <form class="form-horizontal striped-rows b-form" method="post" action="admin/sua-hang-xe">
            <input type="hidden" name="_token" value={{csrf_token()}}>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-labelt col-md-3">ID:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$hang_xe->IDHangXe}}" name="IDHangXe" readonly>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">TenHangXe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$hang_xe->TenHangXe}}" name="TenHangXe">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">DienThoai:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$hang_xe->DienThoai}}" name="DienThoai">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="{{$hang_xe->MoTa}}" name="MoTa">
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
                                    <input type="submit" value="Save" name="btnLuu" class="btn btn-primary">
                                    <a href="./qlhx.html"><button type="button" class="btn btn-dark">Cancel</button></a>
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