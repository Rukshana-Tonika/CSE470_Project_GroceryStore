<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style type="text/css">
   	.center
   	{
   		margin: auto;
   		width: 80%;
   		/*border: 2px solid white;*/
      padding: 30px;
   		text-align: center;
      /*margin-top: 40px;*/
   	}
   	.font_size
  	{
  	    text-align: center;
  	    font-size: 40px;
        color: red;
  	    padding-bottom: 40px;
        /*font-style: bold;*/
  	} 
  	.image_size
  	{
  		width: 130px;
  		height: 90px;
  	}
  	/*.th_color
  	{
  		background: #e8ca87; 
  	}*/
    /*.th_rowname
    {
      font-style: bold;
    }*/
  	.th_deg
  	{
  		padding: 10px;
      background-color: #FFCD00; 
      /*border: 1px solid #FFCD00;*/
      font-size: 20px;
      font-weight: bold;
  	}
    table,th,td
    {
      border: 2px solid #FFCD00;
    }

	</style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         
       

          	<h1 class="font_size">Order List</h1>

          	<table class="center">
          		<tr class="th_deg">
          		
          			<th class="th_deg">Product Title</th>
          			<th class="th_deg">Quantity</th>
          			<th class="th_deg">Price</th>
          			<th class="th_deg">Payment Status</th>
          			<th class="th_deg">Delivery Status</th>
          			<th class="th_deg">Image</th>
          			<th class="th_deg">Action</th>
          			

          		</tr>

          		@foreach($order as $order)
          		<tr>
          			
          			<td>{{$order->product_title}}</td>
          			<td>{{$order->quantity}}</td>
          			<td>Tk {{$order->price}}</td>
          			<td>{{$order->payment_status}}</td>
          			<td>{{$order->delivery_status}}</td>

          			<td>
          				<img class="image_size" src="/product/{{$order->image}}">
          			</td>

          			
          			
          			<td>

          				@if($order->delivery_status=='processing')
          				<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>

          				@else
          				<p style="color: red">No Action</p>

          				@endif

          			</td>
          			
          		</tr>

          	@endforeach
          		

          	</table>

      </div>

    

      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Rukshana Amin Tonika</a><br>
         
            <!-- Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> -->
         
         </p>
      </div>



      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>