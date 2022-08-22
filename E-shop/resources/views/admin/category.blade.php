<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
    
	    /*.div_center{
	      text-align: center;
	      padding-top: 40px;

	    }
	    .h2_font{
	      font-size: 30px;
	      padding-bottom: 30px;
	    }*/
	    .input_color{
	      color: black;
	    }

	    .center{
        /*background-color: #C689C6;*/
	      margin: auto;
	      width: 50%;
	      text-align: center;
	      margin-top: 30px;
        margin-bottom: 50px;
	      /*border: 3px solid white;*/
        padding-top: 40px;

	    }

        .font_size
        {
            text-align: center;
            font-size: 40px;
            color: #31112C;
            padding-bottom: 40px;
        } 
        table,th,td
        {
          border: 2px solid #864879;
        }
        .th_deg
        {
          font-size: 20px;
          padding: 5px;
          background: #31112C;
        }
        .img_deg
        {
          height: 70px;
          width:  100px;
        }
      /*.table_deg*/
        .title_deg
        {
          text-align: center;
          font-size: 20px;
          font-weight: bold;
          padding-bottom: 30px;
        }
        .table_deg
        {
          border: 2px solid #321F28;
          width: 60%;
          margin: auto;
          text-align: center;
          background-color: #321F28;
        }

 	  </style>

    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <!-- navbar -->
      @include('admin.header')      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          	@if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

              {{session()->get('message')}}

             </div>

            @endif

          <div class="center">
<br>
              <h2 class="title_deg"> Add Category </h2>

              <form action="{{url('/add_category')}}" method="POST">
				      
              @csrf
<br>
      				<input class="input_color" type="text" name="category" placeholder="Enter category name">
              <br> <br>
      				<input type="submit" class="btn btn-primary" name="Submit" value="Add">

              <br>

              </form>
          	</div>

          	<table class="table_deg">
              <tr class="th_deg">
                <td>Category Name</td>
                <td>Action</td>
              </tr>

              @foreach($data as $data)

              <tr>
                <td>{{$data->category_name}}</td>
                <td>
                  <a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" href="{{url('delete_category',$data->ID)}}">Delete</a>
                  <!-- <a class="btn btn-danger" href="">Delete</a> -->

                </td>
              </tr>

              @endforeach

            </table>	

          </div>
    	</div>
    <!-- </div> -->

    <!-- container-scroller -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>