<!DOCTYPE html>
<html>

  <head> 
    @include('admin.css')
  </head>
  <style>
    body{
      background-color: #222;
    }
.addroom {
    background-color: #222;
    padding: 30px 100px;
    margin-bottom: 50px;
}

.addroom .heading-section h1 {
    font-family: "Lora", serif;
    font-style: italic;
    font-size: 30px;
    font-weight: bold;
    color: #bbb; 
}

/* Form Group Styling */
.addroom .form-group {
    margin-bottom: 1rem;
}

.addroom .form-group label {
    color: #bbb;
    display: block;
    font-weight: 600;
    margin-bottom: 5px;
}

.addroom .form-control {
    color: #aaa;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #af9556;
    border-radius: 4px;
    background-color: transparent;
    background-clip: padding-box;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.addroom .form-control:focus {
    border-color: #af9556;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.addroom .form-control-file{
  color: #aaa;
    width: 100%;
    padding: 5px;
    font-size: 16px;
    border: 1px solid #af9556;
    border-radius: 4px;
    background-color: transparent;
    background-clip: padding-box;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
/* Submit Button Styling */
.addroom .btn-primary {
    color: #fff;
    background-color: transparent;
    border-color: #af9556;
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    margin-left: 40%;
}

.addroom .btn-primary:hover {
    background-color: #af9556;
}

.addroom .col-md-12 .form-group {
    margin-top: 20px;
}

.addroom .select-wrap {
    position: relative;
}

.addroom .select-wrap .icon {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none;
    color: #af9556;
}

/* Responsive Styling */
@media (max-width: 767.98px) {
    .addroom .form-group {
        margin-bottom: 1rem;
    }

    .addroom .btn-primary {
        width: 100%;
        margin-left: 0;
    }
}

  </style>

  <body>
    <header class="header">   
      @include('admin.header ')
    </header>
    
    @include('admin.sidebar')
     
    <div class="col-md-6 addroom p-4 p-md-5">
    <div class="heading-section mb-5">
        <h1 style="font-size: 30px; font-weight: bold;">Add Room</h1>
    </div>
    <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Room Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Room Title">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" placeholder="Room Description"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" name="price" placeholder="Room Price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Room Type</label>
                    <select name="type" id="" class="form-control">
                        <option value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="delux">Delux</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Wifi</label>
                    <select name="wifi" id="" class="form-control">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group file-input">
                <label for="">Upload Image</label>
                <input type="file" class="form-control-file" name="image">
              </div>
            </div>
            
            <div class="col-md-12 mt-3">
              <div class="form-group">
                <input type="submit" value="Add Room" class="btn btn-primary">
              </div>
            </div>
        </div>
    </form>
</div>

    @include('admin.footer')
  </body>
</html>