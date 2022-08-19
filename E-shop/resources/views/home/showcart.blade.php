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
      <link rel="shortcut icon" href="images/47048.eps" type="">
      <title>Online Grocery Store</title>
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
      		width: 50%;
      		text-align: center;
      		padding: 30px;
      	}
        .font_size
        {
            text-align: center;
            font-size: 40px;
            color: red;
            padding-bottom: 40px;
        } 
      	table,th,td
      	{
      		border: 2px solid #e8ca87;
      	}
      	.th_deg
      	{font-size: 20px;
      		padding: 10px;
      		background: #e8ca87;
      	}
      	.img_deg
      	{
      		height: 150px;
      		width:  150px;
      	}
      	.total_deg
    	{
    		font-size: 20px;
    		padding: 40px;
        color: blue;
    	}

      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
         
     
        <!-- why section -->
        <h1 class="font_size">Cart</h1>

         @if(session()->has('message'))

	            <div class="alert alert-success">

	              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">#</button>

	              {{session()->get('message')}}

	             </div>

        @endif

      <div class="center">
     	<table>
     		
     		<tr>
     			<th class="th_deg">Product Title</th>
     			<th class="th_deg">Quantity</th>
     			<th class="th_deg">Price</th>
     			<th class="th_deg">Image</th>
     			<th class="th_deg">Action</th>
     		</tr>

     		<?php $totalprice=0 ?>
     		@foreach($cart as $cart)
     		<tr>
     			<td>{{$cart->product_title}} </td>
     			<td>{{$cart->quantity}}</td>
     			<td>Tk {{$cart->price}}</td>
     			<td><img class="img_deg" src="/product/{{$cart->image}}"></td>
     			<td> <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('remove_cart',$cart->id)}}">Remove</td>

 			</tr>
 			<?php $totalprice=$totalprice + $cart->price ?>
 			@endforeach
     	</table>


     	<div>
		<h1 class="total_deg">Total Price : Tk {{$totalprice}}</h1>
     	</div>

     	<div>
     		
     		<a href="{{url('cash_order')}}" class="btn btn-danger"> Click to Order </a>
     		<!-- <a href="" class="btn btn-danger">Cash on delivery</a> -->
     		<!-- <a href="" class="btn btn-danger">Cash on delivery</a> -->
     		



     	</div>

     </div>


      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
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