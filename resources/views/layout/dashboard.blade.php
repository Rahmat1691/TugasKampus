<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	@component('layout.header')
		@isset($title)
			@slot('judul_saya',$title)
		@endisset
	@endcomponent

	@stack('styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

  @component('dashboard.header')
  @endcomponent
  @component('dashboard.sidebar')
  @endcomponent

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  @component('dashboard.footer')
  @endcomponent
  
</div>
	

	@component('layout.js')
	@endcomponent

	@stack('scripts')
</body>
</html>