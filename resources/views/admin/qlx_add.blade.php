@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">THÊM XE</h2>
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

            <form class="form-horizontal striped-rows b-form" method="post" action="admin/them-xe">
            <input type="hidden" name="_token" value={{csrf_token()}}>
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-labelt col-md-3">SoXe:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="" placeholder="Số xe" name="SoXe">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">HangXe:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="IDHangXe">
                            <option>Chọn hãng xe</option>
                            @foreach ($ds_hang_xe as $hang_xe)
                                <option value="{{$hang_xe->IDHangXe}}">{{$hang_xe->TenHangXe}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">LoaiXe:</label>
                    <div class="col-md-9">
                        <select class="form-control" name="IDLoaiXe">
                            <option>Chọn loại xe</option>
                            @foreach ($ds_loai_xe as $loai_xe)
                                <option value="{{$loai_xe->IDLoaiXe}}">{{$loai_xe->TenLoaiXe}}</option>
                            @endforeach
                        </select>
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
