@extends('backend.layout.main')
@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('backend/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css">
    <!-- select 2 -->
    <link href="{{ asset('backend/assets/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    {{-- upload file  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .custom-file-upload {
            position: relative;
            display: inline-block;
        }

        #output {
            display: block;
            max-width: 300px;
            max-height: 300px;
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
        }

        .file-input {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .file-label {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .file-label:hover {
            background-color: #0056b3;
        }

        .upload-icon {
            margin-right: 8px;
            font-size: 20px;
        }
    </style>
@endsection
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
                                                    <label class="col-lg-2 col-form-label">Tên đăng nhập <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-lg-10">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Nguyễn Văn A">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="email">Email <span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-lg-10">
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="example-password">Password
                                                        <span class="text-danger">*</span></label>
                                                    <div class="col-lg-10">
                                                        <input type="password" id="example-password" class="form-control"
                                                            value="password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="example-placeholder">Chức
                                                        vụ</label>
                                                    <div class="col-lg-10">
                                                        <select class="form-select cs-select-2"
                                                            aria-label="Default select example">
                                                            <option selected value="2">Nhân viên</option>
                                                            <option value="1">Quản lý</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- <div class="input-group mb-3">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">
                                                      <i class="bi bi-upload"></i> Upload
                                                    </label>
                                                  </div> --}}

                                                <!-- Nếu bạn chưa tích hợp Bootstrap Icons, hãy thêm liên kết sau vào phần <head> của trang HTML -->
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="">Photo</label>
                                                    <div class="input-group col-10">
                                                        <input type="file" class="form-control" accept="image/*"
                                                            onchange="loadFile(event)">

                                                    </div>
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-2">
                                                        <img id="output" />
                                                    </div>
                                                </div>
                                                <div class="form-group text-right mb-0">
                                                    <button class="btn btn-primary waves-effect waves-light mr-1"
                                                        type="submit">
                                                        Submit
                                                    </button>
                                                    <button type="reset"
                                                        class="btn btn-secondary waves-effect waves-light">
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
@section('js')
    <!-- select 2 -->
    <script src="{{ asset('backend/assets/js/select2.min.js') }}"></script>
    <!-- Plugins js -->

    <script type="text/javascript">
        //select 2
        $('.cs-select-2').select2();
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        }
    </script>
@endsection
