<header class="main-header">
  <!-- Logo -->
  <a class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>配</b>送</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>微配</b>直送</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ Config::get('constants.IMAGE_HOST') }}{{ $auth->avatar }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ $auth->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ Config::get('constants.IMAGE_HOST') }}{{ $auth->avatar }}" class="img-circle" alt="User Image">
              <p>
                {{ $auth->name }} - {{ $auth->realname }}
                <small>集散点管理员</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">基本信息</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('logout') }}" class="btn btn-danger">退出登录</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
