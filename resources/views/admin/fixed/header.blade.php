
<style>
  .col 
  {
    display: flex;
    justify-content: center;
    align-content: center;
  }
 
</style>



<header class="topbar" data-navbarbg="skin6">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin6">
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <a class="navbar-brand" href="index.html">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Classy Cloth</a>
        <!-- Logo icon -->
        {{-- <b class="logo-icon">
          <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
          <!-- Dark Logo icon -->
          <img
            src="../assets/images/logo-icon.png"
            alt="homepage"
            class="dark-logo"
          />
        </b> --}}
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text">
          
          <!-- dark Logo text -->
          {{-- <img
            src="../assets/images/logo-text.png"
            alt="homepage"
            class="dark-logo"
          /> --}}
        </span>
      </a>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- toggle and nav items -->
      <!-- ============================================================== -->
      <a
        class="
          nav-toggler
          waves-effect waves-light
          text-dark
          d-block d-md-none
        "
        href="javascript:void(0)"
        ><i class="ti-menu ti-close"></i
      ></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
    <div
      class="navbar-collapse collapse"
      id="navbarSupportedContent"
      data-navbarbg="skin5"
    >
      <!-- ============================================================== -->
      <!-- toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav me-auto mt-md-0">
        <!-- ============================================================== -->
        <!-- Search -->
        <!-- ============================================================== -->

        <li class="nav-item hidden-sm-down">
          {{-- <form class="app-search ps-3">
            <input
              type="text"
              class="form-control"
              placeholder="Search for..."
            />
            <a class="srh-btn"
              ><i class="mdi mdi-magnify fs-4 lh-sm"></i
            ></a>
          </form> --}}
        </li>
      </ul>
     
   <div class="col">
   <label for="" style="color: white;">Select Language:</label>
     <div class="col-md-4" style="padding-left: 10px;">
      <select class="form-control" size="1" name="links" onchange="window.location.href=this.value;">
          <option value="">Select language</option>
          <option value="{{route('language','en')}}">EN</option>
          <option value="{{route('language','bn')}}">BN</option>
          <option value="{{route('language','ar')}}">AR</option>
      </select>  
     </div> 
     </div>
     
     




      <!-- ============================================================== -->
      <!-- Right side toggle and nav items -->
      <!-- ============================================================== -->
      <ul class="navbar-nav">
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        {{-- <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle waves-effect waves-dark"
            href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="../assets/images/users/1.jpg"
              alt="user"
              class="profile-pic me-2"
            />Markarn Doe
          </a>
          <ul
            class="dropdown-menu show"
            aria-labelledby="navbarDropdown"
          ></ul>
        </li>
      </ul>
    </div> --}}
  </nav>
</header>