<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title')</title>

<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/themify-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/toastr.min.css') }}">
<script src="{{ asset('dist/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/toastr.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/jquery.dataTables.min.css') }}">
<script src="{{ asset('dist/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<style>
    .topbar-header {
    background-color: #2DC716;
    2DC716
}
</style>
</head>

<body>

<div id="main">
	
    <header class="main-header">
    	<div class="topbar-header">
        	<div class="container-fluid">
            	<a class="logo" href="{{ route('home') }}">Marketplace</a>
                <h5 class="app-title">Putri Salma Wulandari</h5>
                <div class="topbar-right">
                	<ul class="topbar-menu">
                    	<li>
                        	<div class="user-menu">
                                <a href="#!" data-toggle="dropdown">
                                    <span class="user-avatar">
                                        <div class="thumb">
                                            <img src="{{ asset('dist/images/avatar_profile.png') }}">
                                        </div>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    
                                    <li>
                                        <div class="dropdown-heading">
                                            <h5 class="user-name">{{ Auth::user()->name }}</h5>
                                            
                                        </div>
                                    </li>
                                    
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul><!-- topbar-user -->
                </div><!-- topbar-right -->
            </div><!-- container -->
        </div><!-- topbar-header -->
        <nav class="header-nav">
        	<div class="container-fluid">
            	<div class="header-menu">
                	<ul class="menu">
                      <li class=""><a href="{{ route('home') }}"><span class="icon icon-layers"></span>Dashboard</a></li>
                      <li class=""><a href="{{ route('category.index') }}"><span class="icon icon-layers"></span>Category</a></li>
                      <li class=""><a href="{{ route('product.index') }}"><span class="icon icon-layers"></span>Product</a></li>
                    </ul>
                </div><!-- header-menu -->
            </div><!-- container -->
        </nav><!-- header-nav -->
    </header>
    
    <section class="page-content">
    
    	<section class="bg-title">
        	<div class="container-fluid">
            	<h5 class="page-title">@yield('title')</h5>
                
            </div><!-- container -->
        </section><!-- bg-title -->
        
        <section class="main-page--content">
        	<div class="container-fluid">
            @yield('content')
            </div><!-- container -->
        </section><!-- main-page--content -->
        
    </section><!-- page-content -->
    
    <footer class="main-footer">
    	<div class="container-fluid">
        	<span class="copyright">
        		© 2017 Badan Usaha Milik Ohoi (Bumo) Kabupaten Maluku Tenggara
            </span>
            <ul class="footer-nav">
            	<li><a href="#!">Contact Us</a></li>
                <li><a href="#!">Terms</a></li>
                <li><a href="#!">Privacy</a></li>
            </ul>
        </div>
    </footer>
    
</div><!-- main -->
@include('alert')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script>
	// $('.thumb img').fillBox();
	
	// $('.main-header .header-nav').sticky({topSpacing:0});
	

    $('datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    });

</script>

</body>
</html>
