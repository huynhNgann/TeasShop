@extends('backend.layout.main')
@section('css')
<!-- Plugins css -->
<link href="{{asset('backend/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css">

<!-- App css -->
<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
<link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">

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
                        <h4 class="page-title">Multiple File Upload</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Multiple File Upload</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Dropzone File Upload</h4>

                            <form action="/" method="post" class="dropzone" id="myAwesomeDropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="">
                                </div>

                                <div class="dz-message needsclick">
                                    <div>
                                        <i class="mdi mdi-cloud-upload-outline display-4"></i>
                                    </div>
                                    <h4>Drop files here or click to upload.</h4>
                                    <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                        <strong>not</strong> actually uploaded.)</span>
                                </div>
                            </form>
                            <div class="clearfix text-right mt-3">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->

    

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
    <label class="btn btn-success mb-0 btn-upload btn-sm" for="inputImage" title="Upload image file">
        <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="" data-original-title="Import image with Blob URLs">
        <span class="mdi mdi-upload"></span>
        </span>
    </label>
</div>
@endsection
@section('js')
 

 <!-- Vendor js -->
 <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

 <!-- Plugins js -->
 <script src="{{asset('backend/assets/libs/dropzone/dropzone.min.js')}}"></script>

 <!-- App js -->
 <script src="{{asset('backend/assets/js/app.min.js')}}"></script>

@endsection