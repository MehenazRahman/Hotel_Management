<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">

    .room_data{
        border: 2px solid white;
        margin: auto;
        width: 50%;
        text-align: center;
        padding-top: 40px;
        
    }
    .th_deg{
      background-color: skyblue;
      color: black;
      padding: 10px;
    }
    tr{
      border: 3px solid white;
      color: white;
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
                <th class="th_deg">Room ID</th>
                <th class="th_deg">Customer Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Arrival Date</th>
                <th class="th_deg">Leaving Date</th>
                <th class="th_deg">Status</th>
                <th class="th_deg">Room Title</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Status Update</th>
                </tr>

                @foreach ($data as $data)
                <tr>
                    <td>{{$data->room_id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->arraivalDate}}</td>
                    <td>{{$data->endDate}}</td>
                    <td>
                        @if ($data->status == 'approved')
                        <span style="color: green;">Approved</span>
                        
                        @endif
                        @if ($data->status == 'rejected')
                        <span style="color: red;">Rejected</span>
                        
                        @endif
                        @if ($data->status == 'waiting')
                        <span style="color: yellow;">Waiting</span>
                        
                        @endif
                    </td>
                    <td>{{$data->room->room_title}}</td>
                    <td>{{$data->room->price}}</td>
                    <td><img width="200px;" src="room/{{$data->room->image}}" alt=""></td>
                    <td><a onclick="return confirm('Are you sure to delete this?');" 
                     class="btn btn-danger" href="{{url('delete_booking', $data->id)}}">Delete</a></td>
                     
                     <td>
                        <span style="padding-bottom: 10px; ">
                        <a class="btn btn-success" href="{{url('approve_booking', $data->id)}}">Approve</a>
                        </span>
                        <a style="width:90px;" class="btn btn-warning" href="{{url('reject_booking', $data->id)}}">Reject</a>
                     </td>
                </tr>

                @endforeach
            </table>
            

          </div>     
        </div>
    </div>

      
        @include('admin.footer')
  </body>
</html>