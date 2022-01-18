@include ('layouts/admin/head')

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include ('layouts/admin/sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include ('layouts/admin/header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Add User</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                
                <div class="card-body">
                  <form action="{{route('user.c')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="username">เพิ่ม User</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                      <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter phone">
                    </div>

                    <div class="form-group">
                      <input type="address" class="form-control" id="address" name="address" placeholder="Enter address">
                    </div>

                   
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    @error('username')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                  </form>
                </div>
              </div>

           
              
            </div>

          
          </div>
         
          <!--Row-->

      
        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include ('layouts/admin/footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 
</body>

</html>