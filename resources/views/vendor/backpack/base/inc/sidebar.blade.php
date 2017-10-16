@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          @if (Auth::User()->isAdmin())
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
          <li><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
          <li><a href="{{ url('admin/aboutus') }}"><i class="fa fa-info"></i> <span>About us</span></a></li>
          <!-- <li><a href="{{ url('admin/addresses') }}"><i class="fa fa-address-card-o"></i> <span>Addresses</span></a></li> -->
          <li><a href="{{ url('admin/courts') }}"><i class="fa fa-map-marker"></i> <span>Courts</span></a></li>
          <!-- <li><a href="{{ url('admin/court_infos') }}"><i class="fa fa-map-marker"></i> <span>Courts info</span></a></li> -->
          <!-- <li><a href="{{ url('admin/court_schedules') }}"><i class="fa fa-map-marker"></i> <span>Court schedules</span></a></li> -->
          <!-- <li><a href="{{ url('admin/court_types') }}"><i class="fa fa-map-marker"></i> <span>Court types</span></a></li> -->
          <li><a href="{{ url('admin/documents') }}"><i class="fa fa-file-text-o"></i> <span>Documents</span></a></li>
          <!-- <li><a href="{{ url('admin/document_types') }}"><i class="fa fa-file-text-o"></i> <span>Document types</span></a></li> -->
          <li><a href="{{ url('admin/links') }}"><i class="fa fa-link"></i> <span>Links</span></a></li>
          <!-- <li><a href="{{ url('admin/link_types') }}"><i class="fa fa-link"></i> <span>Link types</span></a></li> -->
          <li><a href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
          <!-- <li><a href="{{ url('admin/seasons') }}"><i class="fa fa-calendar"></i> <span>Seasons</span></a></li> -->
          @endif
          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
