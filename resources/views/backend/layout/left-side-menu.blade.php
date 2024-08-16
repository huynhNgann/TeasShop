<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Quản lý quán trà</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-person"></i>
                        <span>Người dùng</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('user.index')}}">Danh sách người dùng</a></li>
                        <li><a href="{{route('user.create')}}">Thêm người dùng</a></li>
                        {{-- <li><a href="ui-fontawesome.html">Thêm mới</a></li> --}}
                        {{-- <li><a href="ui-materialdesign.html">Material Design Icons</a></li> --}}
                    </ul>
                </li>
           
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->