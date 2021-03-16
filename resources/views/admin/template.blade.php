<!DOCTYPE html>
<html lang="en">
<head>
 @include('admin.head')
@yield('title')
@section('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('admin.header')
		@include('admin.sidebar')

		@yield('content')
		</div>
		@include('admin.footer')
	  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
@include('admin.footerjs')
@yield('js')
</body>
</html>