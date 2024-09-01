<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">

    .room_data{
        border: 2px solid white;
        margin: auto;
        width: 80%;
        text-align: center;
        padding-top: 40px;
    }
    .th_deg{
      background-color: skyblue;
      color: black;
      padding: 15px;
    }
    tr{
      border: 3px solid white;
    }
    td{
      padding: 10px;
    }

  </style>
  </head>
  <body>
    <header class="header">   
      @include('admin.header ')
    </header>
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <table class="room_data">
                <tr>
                <th class="th_deg">User Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone Number</th>
                <th class="th_deg">Messages</th>
                <th class="th_deg">Send Email</th>
                <th class="th_deg">Delete</th>
                </tr>

                @foreach ($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->message}}</td>
                    <td><a class="btn btn-success" href="{{url('send_email', $data->id)}}">Send Email</a></td>
                    <td><a onclick="return confirm('Are you sure to delete this?');" 
                    class="btn btn-danger" href="{{url('delete_messages', $data->id)}}">Delete</a></td>
                </tr>
                @endforeach
            </table>
                

          </div>     
        </div>
    </div>
    @include('admin.footer')
  </body>
</html>