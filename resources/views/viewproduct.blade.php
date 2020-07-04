@extends('contain')
@section('content')

 <div class="container">
   <div class="row">
     <div class="col-lg-10 col-md-12 mx-auto">
       
     
      <div>
        <table class="table table-danger " border>
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Image</th>
				<th>Product Id</th>
				<th>Product Code</th>
				<th>Product Godaun</th>
				
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $product->product_name }}</th>
                <td><img src="{{ URL::to($product->image) }}" height="70px;"></td>
                <td>{{ $product->product_id }}</td>
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->product_garege }}</td>
              </tr>
            </tbody>
      </table>
         
      </div>
     </div>
   </div>
</div>
@endsection