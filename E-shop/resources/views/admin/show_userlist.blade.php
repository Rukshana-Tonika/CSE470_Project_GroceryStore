<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      @include('admin.css')
    <!-- End layout styles -->
	<style type="text/css">
   	.center
   	{
   		margin: auto;
   		width: 70%;
   		border: 2px solid white;
   		text-align: center;
        margin-top: 40px;
		background-color: #321F28;
   	}
   	.font_size
	{
	    text-align: center;
	    font-size: 40px;
	    padding-bottom: 40px;
	} 
	.image_size
	{
		width: 150px;
		height: 150px;
	}
	.th_color
	{
		/*background: #5ca16f;*/
		/*background: #734046;*/
		background: #31112C;

	}
	.th_d
	{
		padding: 30px;

	}
	</style>

    <!-- <link rel="shortcut icon" href="admin/assets/images/favicon.png" /> -->

  </head>
  <body>
    <div class="container-scroller">
	      <!-- partial:partials/_sidebar.html -->
	      @include('admin.sidebar')
	      <!-- partial -->
	      <!-- navbar -->
	      @include('admin.header')      
	        <!-- partial -->
	    <!-- container-scroller -->
	    <div class="main-panel">

	          <div class="content-wrapper">
	          	@if(session()->has('message'))

	            <div class="alert alert-success">

	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

	              {{session()->get('message')}}

	             </div>

	            @endif

	            <h1 class="font_size">User list</h1>

	          	<table class="center">
	          		<tr class="th_color">
	          			<th class="th_d">ID</th>
	          			<th class="th_d">Name</th>
	          			<th class="th_d">Email</th>
	          			<th class="th_d">Usertype</th>
	          			<th class="th_d">Phone</th>
	          			<th class="th_d">Address</th>
	          			<th class="th_d">Action</th>
	          			<th class="th_d">Admin</th>
	          		</tr>

	          		@foreach($user as $user)
	          		@if($user->usertype=='0')
	     			<tr>
		     			<td>{{$user->id}} </td>
		     			<td>{{$user->name}}</td>
	          			<td>{{$user->email}}</td>
	          			<td>{{$user->usertype}}</td>
	          			<td>{{$user->phone}}</td>
	          			<td>{{$user->address}}</td>

	          			<td>
          					<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete_user',$user->id)}}">Delete</a>
      					</td>

      					<td>
          					<a class="btn btn-success" href="{{url('update_admin',$user->id)}}">Make Admin</a>
      					</td>

      					<!-- <div class="div_design">
              
			              <input type="submit" value="Add User"class="btn btn-primary">

			            </div> -->

	     			</tr>
	     			@endif
	     			@endforeach

	     			
          			
	          	</table>


	          </div>
	      </div>
	      <!-- dlt pore -->
	  </div> 
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>