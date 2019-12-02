@extends('admin.master-layout')
@section('content')
    <!-- content -->
    <div class="col-12">
            <div class="container">
            <h2 class="pt-1">THÔNG TIN CHI TIẾT LỊCH TRÌNH</h2>
            <hr>
            <form class="form-horizontal striped-rows b-form">
            <div class="card-body">
                <div class="form-group row">
                    <label class="control-labelt col-md-3">ID:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="1" placeholder="Mã lịch trình">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">Tuyen:</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option>Chọn tuyến</option>
                            <option selected>123</option>
                            <option>456</option>
                        </select>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">Xe:</label>
                    <div class="col-md-9">
                        <select class="form-control">
                            <option>Chọn xe</option>
                            <option selected>67G1-51413</option>
                            <option>67G1-23067</option>
                        </select>
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GioDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="6:00 am" placeholder="Giờ đi">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">GioDen:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="10:00 am" placeholder="Giờ đến">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">NgayDi:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="30/11/2019" placeholder="Ngày đi">
                    </div>
                </div>
                <!--/span--> 
                <div class="form-group row">
                    <label class="control-label col-md-3">MoTa:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="" value="..." placeholder="Mô tả">
                    </div>
                </div>
                <!--/span-->  
                <div class="form-group row">
                    <label class="control-label col-md-3">NgayThem:</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="" value="30/11/2019" placeholder="Ngày thêm">
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
                                    <a href="./qllt_edit.html"><button type="button" class="btn btn-success">Edit</button></a>
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
@endsection
