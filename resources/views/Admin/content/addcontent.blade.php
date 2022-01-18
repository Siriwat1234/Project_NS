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
            <h1 class="h3 mb-0 text-gray-800">Add Contents</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Add Contents</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-body">
                  <form action="{{route('content.c')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">เพิ่มสินค้า</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
                     
                    </div>

                    <div class="form-group">
                      <input type="description" class="form-control" id="description" name="description" placeholder="Enter details">

                    </div>
                    <div class="form-group">
                      <input type="price" class="form-control" id="price" name="price" placeholder="Enter price">

                    </div>
                    <div class="form-group">
                      <input type="category" class="form-control" id="category" name="category" placeholder="Enter category">

                    </div>
                   
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    @error('name')
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