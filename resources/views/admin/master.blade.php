<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Classy Cloth</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/monster-admin-lite/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    /> 
    <!-- Custom CSS -->
    <link
      href="{{url('/backend/css/chartist.min.css')}}"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link href="{{url('/backend/css/style.min.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- //toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    {{-- <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div> --}}
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
     

  @include('admin.fixed.header') 
         
    




      @include('admin.fixed.sideber')
    

      <div class="page-wrapper">
      @yield('content')
      </div>





        {{-- @include('admin.fixed.footer') --}}
       
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    
    <script src="{{url('/backend/js/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('/backend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/backend/js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('/backend/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('/backend/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('/backend/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="{{url('/backend/js/jquery.flot.js')}}"></script>
    <script src="{{url('/backend/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{url('/backend/js/dashboard1.js')}}"></script>

    {{-- toastr --}}
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}




  </body>
</html>
