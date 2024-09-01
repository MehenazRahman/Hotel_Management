<!DOCTYPE html>
<html>

  <head> 
    <base href="/public">
    @include('admin.css')
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
            <h1 style="font-size:30px; font-weight: bold;">Mail send to {{$data->name}}</h1>


            <form action="{{url('mail', $data->id)}}" method="Post" enctype="multipart/form-data">
    
              @csrf
              <div class="div_room">
                <label for="">Greeting</label>
                <input type="text" name="greeting">
              </div>

              <div class="div_room">
                <label for="">Mail Body</label>
                <textarea name="body"></textarea>
              </div>

              <div class="div_room">
                <label for="">Action Text</label>
                <input type="text" name="action_text">
              </div>

              <div class="div_room">
                <label for="">Action Url</label>
                <input type="text" name="action_url">
              </div>

              <div class="div_room">
                <label for="">End Line</label>
                <input type="text" name="end_line">
              </div>

              <div class="div_room">
                <input class="btn btn-primary" type="submit" value="Send Email">
              </div>
            </form>
          </center>
    
            
          </div>
        </div>
      </div>
    </div>
    @include('admin.footer')
  </body>
</html>