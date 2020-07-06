@extends('contain')
@section('content')

 <div class="container">
   <div class="row">
     <div class="col-lg-10 col-md-12 mx-auto">
       
     
      <div>
        <table class="table table-danger " border>
            <thead>
              <tr>
              	<th>Sl NO.</th>
                <th>Total Price</th>
                <th>Order Date</th>
				<th>Payment Type</th>
				<th>Payment Status</th>
				
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $order->id }}</th>
                <td>{{ $order->total_price }}</th>
                <td>{{ $order->create_at }}</td>
                <td>{{ $order->payment_type }}</td>>
                <td>{{ $order->payment_status }}</td>>
              </tr>
            </tbody>
      </table>
         
      </div>
     </div>
   </div>
</div>
@endsection