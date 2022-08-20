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
		background: #5ca16f; 
	}
	.th_d
	{
		padding: 30px;
	}

	/**/
	.center
        {
          margin: auto;
          width: 60%;
          text-align: center;
          padding: 30px;
        }
        table,th,td
        {
          border: 2px solid #864879;
        }
        .th_deg
        {/*font-size: 20px;
          padding: 5px;*/
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
          border: 2px solid blue;
          width: 100%;
          margin: auto;
          /*font-size: 40px;*/
          text-align: center;
          background-color: #321F28;
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

	            <h1 class="font_size">Product List</h1>

	          	<table class="table_deg">
	          		<tr class="th_deg">
	          			<th class="th_d">Product Title</th>
	          			<th class="th_d">Description</th>
	          			<th class="th_d">Image</th>
	          			<th class="th_d">Category</th>
	          			<th class="th_d">Quantity</th>
	          			<th class="th_d">Price</th>
	          			<th class="th_d">Discount Price</th>
	          			<th class="th_d">Edit</th>
	          			<th class="th_d">Delete</th>
	          		</tr>

          			@foreach($product as $product)
	          		<tr>
	          			<td>{{$product->title}}</td>
	          			<td>{{$product->description}}</td>
	          			<td>
	          			<img class="image_size" src="/product/{{$product->image}}">
	          			</td>
	          			<td>{{$product->category}}</td>
	          			<td>{{$product->quantity}}</td>
	          			<td>{{$product->price}}</td>
	          			<td>{{$product->discount_price}}</td>

	          			<td>
          					<a class="btn btn-primary" href="{{url('update_product',$product->id)}}">Edit</a>
	          			</td>
	          			
	          			<td>
          					<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete_product',$product->id)}}">Delete</a>
          				</td>
          			</tr>
          			@endforeach

	          	</table>


	          </div>
	      </div>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>