@extends('backend.layout.main')

@section('css')
    <!-- third party css -->
    <link href="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"> --}}
    <link href="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('backend/assets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"> --}}
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
                            <h4 class="page-title">Quản lý người dùng</h4>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Email</th>
                                            <th>Ảnh đại diện</th>
                                            <th>Chức vụ</th>
                                            <th>Ngày tạo</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $us)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $us->name }}</td>
                                                <td>{{ $us->email }}</td>
                                                <td><img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}"
                                                        alt="avatar" style="width: 50px; height: 50px;"></td>
                                                <td>{{ $us->role->name }}</td>
                                                <td>{{ $us->created_at->format('d/m/Y') }}</td>
                                                <td style="text-alight:center;">
                                                    <a href="{{ route('user.edit', $us->id) }}"
                                                        class="tabledit-edit-button btn btn-success">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
    </div>
@endsection

@section('js')
    <!-- Required datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    {{-- <script src="{{ asset('backend/assets/libs/datatables/dataTables.buttons.min.js') }}"></script> --}}
    <script src="{{ asset('backend/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/libs/datatables/buttons.html5.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/libs/datatables/buttons.print.min.js') }}"></script> --}}
    <!-- Responsive examples -->
    <script src="{{ asset('backend/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/libs/datatables/dataTables.select.min.js') }}"></script> --}}
    <!-- Datatables init -->
    <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>
    <script>
       $(document).ready(function() {
    if ($.fn.dataTable.isDataTable('#datatable')) {
        $('#datatable').DataTable().destroy();
    } 
    $('#datatable').DataTable({
        paging: false,
        columnDefs: [
            { 
                targets: [3,5, 6], // cột thứ 4 và thứ 7
                orderable: false // tắt sắp xếp cho các cột này
            }
        ],
        searchable: true,
        //ordering: false, // Tắt tính năng sắp xếp cho toàn bộ bảng
        responsive: true // Đảm bảo bảng có thể thích ứng với các kích thước màn hình khác nhau
    });
    
});

    </script>
@endsection
