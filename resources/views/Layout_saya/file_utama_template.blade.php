<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	@component('layout_saya.file_header')
	@slot('judul_saya',$title)
	@endcomponent
</head>
<body>
	@yield('content')
	@component('layout_saya.file_javascript')
	@endcomponent

	@stack('script')
</body>
</html>