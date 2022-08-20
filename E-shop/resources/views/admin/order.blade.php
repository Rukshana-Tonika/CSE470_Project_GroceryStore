<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')

   <style type="text/css">
   	.center
        {
          margin: auto;
          width: 70%;
          text-align: center;
          padding: 30px;
        }
        table,th,td
        {
          border: 1px solid grey;
        }
        .th_deg
        {/*font-size: 20px;
          padding: 5px;*/
          background: #e8ca87;
        }
        .img_deg
        {
          height: 50px;
          width:  70px;
        }
      /*.table_deg*/
        .title_deg
        {
          text-align: center;
          font-size: 20px;
          font-weight: bold;
          padding-bottom: 50px;
        }
        .table_deg
        {
          border: 2px solid blue;
          width: 70%;
          margin: auto;
          text-align: center;
        }

   </style>
  </head>
  <body>

    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
       @include('admin.header')
      <div class="main-pane l">

          <div class="content-wrapper">

          	@if(session()->has('message'))

            <div class="alert alert-success">

              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">#</button>

              {{session()->get('message')}}

             </div>

            @endif

          	<h1 class="title_deg">Order List</h1>

          	<table class="table_deg">

          		<tr class="th_deg">

          			<th style="padding: 10px;">Name</th>
          			<th style="padding: 10px;">Email</th>
          			<th style="padding: 10px;">Phone</th>
          			<th style="padding: 10px;">Address</th>
          			<th style="padding: 10px;">Product Title</th>
          			<th style="padding: 10px;">Quantity</th>
          			<th style="padding: 10px;">Price</th>
          			<th style="padding: 10px;">Payment Status</th>
          			<th style="padding: 10px;">Delivery Status</th>
          			<th style="padding: 10px;">Image</th>
                <th style="padding: 10px;">Delivered</th>
          			<!-- <th style="padding: 10px;">Action</th> -->
          			


          		</tr>

          		@foreach($order as $order)
          		<tr>
          			<td>{{$order->name}}</td>
          			<td>{{$order->email}}</td>
          			
          			<td>{{$order->phone}}</td>
          			<td>{{$order->address}}</td>
          			<td>{{$order->product_title}}</td>
          			<td>{{$order->quantity}}</td>
          			<td>{{$order->price}}</td>
          			<td>{{$order->payment_status}}</td>
          			<td>{{$order->delivery_status}}</td>

          			<td>
          				<img class="img_deg" src="/product/{{$order->image}}">
          			</td>

                <td>
                  @if($order->delivery_status=='processing')
                  <a class="btn btn-primary" onclick="return confirm('Are you sure the product is delivered?')"href="{{url('delivered',$order->id)}}">Delivered</a>

                  @else
                  <p style="color: green">Delivered</p>

                  @endif
                </td>

          			
          			<!-- <td>
          				<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete_order',$order->id)}}">Delete Order</a>
          			</td> -->
          			
          		</tr>

          		@endforeach
          		

          	</table>



      </div>
    </div>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>