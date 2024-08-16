@extends('backend.layout.main')
@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Thêm người dùng</h4>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10">
                                    <div class="">
                                        <form class="form-horizontal" action="{{ route('user.store') }}" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Tên đăng nhập <span class="text-danger">*</span></label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="name" placeholder="Nguyễn Văn A" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="email">Email <span class="text-danger">*</span></label>
                                                <div class="col-lg-10">
                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-password">Password <span class="text-danger">*</span></label>
                                                <div class="col-lg-10">
                                                    <input type="password" id="example-password" class="form-control" value="password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-placeholder">Chức vụ</label>
                                                <div class="col-lg-10">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected value="2">Nhân viên</option>
                                                        <option value="1">Quản lý</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="example-placeholder">Ảnh đại diện</label>
                                                <div class="col-lg-10">
                                                    <input type="file" class="form-control" id="example-placeholder" placeholder="placeholder">
                                                </div>
                                            </div>
                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

         
         
        </div>
        <!-- end container-fluid -->

    </div>
   

</div>
@endsection