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
            <h1 class="h3 mb-0 text-gray-800">Edit Content2</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Edit Content2</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-body">
                  <form action="{{url('/admin/content2/Update/'.$content2->id_content2s)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">แก้ไขสินค้า</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{$content2->name}}">
                     
                    </div>

                    <div class="form-group">
                      <input type="description" class="form-control" id="description" name="description" value="{{$content2->description}}">

                    </div>
                    <div class="form-group">
                      <input type="price" class="form-control" id="price" name="price" value="{{$content2->price}}">

                    </div>
                    <div class="form-group">
                      <input type="category" class="form-control" id="category" name="category" value="{{$content2->id_categorys}}">

                    </div>
                    
                   
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="image" >Choose image</label>
                      </div>
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
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