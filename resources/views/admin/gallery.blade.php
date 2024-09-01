<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>

  <body>
    <header class="header">   
      @include('admin.header ')
    </header>
    @include('admin.sidebar')


    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          
          <center>
          <h1 style="font-size:40px; font-weight:bold; padding-bottom: 20px">Gallery</h1>

          <div class="row">

          @foreach ($gallery as $gallery)
          
          <div class="col-md-4">
          
          <img style="height: 300px!important; width: 400px!important; padding: 25px;" src="/gallery/{{$gallery->image}}" alt="">
          <a class="btn btn-danger" href="{{url('delete_image', $gallery->id)}}">Delete Image</a>
        </div>
          @endforeach
          </div>

          <form action="{{url('upload_gallery')}}" method="Post" enctype="multipart/form-data">

          @csrf
            <div style="padding: 30px;">
            <label style="color:white; font-weight:bold; font-size:20px;">Upload Image: </label>
            <input type="file" name="image" required>
            
            <input class="btn btn-primary" type="submit" value="Add Image">
            </div>
          </form>
          </center>
            
          </div>     
        </div>
    </div>

     @include('admin.footer')
  </body>
</html>