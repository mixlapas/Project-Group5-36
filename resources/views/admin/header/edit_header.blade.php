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
            <h1 class="h3 mb-0 text-gray-800">แก้ไขหน้า header</h1>
            <ol class="breadcrumb">
              
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">แก้ไขหน้า header</h6>
                </div>
                <div class="card-body">
                  <form action="{{url('/admin/Header/update/'.$header_edit->id_header)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">ข้อความ</label>
                      <input type="text" id="name" name="name" class="form-control" aria-describedby="emailHelp" value="{{$header_edit->text}}">

                      @error('name')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>

                    <label for="exampleInputEmail1">รูปภาพ</label>
                    <div class="form-group">
                      <div class="custom-file">
                        <input type="file" id="image" name="image" class="custom-file-input">
                        <label class="custom-file-label" for="customFile">Choose file</label>

                        <img id="showImage" src="{{asset('admin/images/'.$header_edit->image)}}" alt="" style="width: 150px; padding-bottom: 20px; padding-top: 20px;">
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>

                        @error('image')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
        <!---Container Fluid-->
      </div>

      <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
      </script>

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