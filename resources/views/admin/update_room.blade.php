<!DOCTYPE html>
<html>

  <head> 
    <base href="/public">
    @include('admin.css')
  </head>
  <style>
    label{
        display: inline-block;
        width: 200px;
    }
    .div_room{
        padding-top: 30px;
    }
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
  </style>

  <body>
    <header class="header">   
      @include('admin.header ')
    </header>
    
    @include('admin.sidebar')
     
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
    
          <div class="div_center">
            <h1 style="font-size: 30px; font-weight: bold;">Update Room</h1>
    
            <form action="{{url('edit_room', $data->id)}}" method="Post" enctype="multipart/form-data">
    
              @csrf

              <div class="div_room">
                <label for="">Room Title</label>
                <input type="text" name="title" value="{{$data->room_title}}">
              </div>

              <div class="div_room">
                <label for="">Description</label>
                <textarea name="description">
                {{$data->description}}
                </textarea>
              </div>

              <div class="div_room">
                <label for="">Pice</label>
                <input type="text" name="price" value="{{$data->price}}">
              </div>

              <div class="div_room">
                <label for="">Room Type</label>
                <select name="type" id="">
                  <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>

                  <option value="regular"> Regular</option>
                  <option value="premium">Premium</option>
                  <option value="delux">Delux</option>
                </select>
              </div>

              <div class="div_room">
                <label for="">Wifi</label>
                <select name="wifi" id="">
                <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>

              <div class="div_room">
                <label for="">Current Image</label>
                <img style="margin:auto;" width="100px" src="room/{{$data->image}}" alt="">
              </div>


              <div class="div_room">
                <label for="">Upload Image</label>
                <input type="file" name="image">
              </div>

              <div class="div_room">
                <input class="btn btn-primary" type="submit" value="Update Room">
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    @include('admin.footer')
  </body>
</html>