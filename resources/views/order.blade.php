
	@extends('contain')
	@section('content')

	<!-- Begin Page Content -->
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">All Orders  Here</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 font-weight-bold text-primary">Orders</h6>
	</div>
	<div class="card-body">
	<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	  <thead>
	    <th>SL NO.</th>
        
        <th>Total Price</th>
        <th>Order Date </th>
        <th>Payment Type </th>
        <th>Payment Status</th>
        <th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($orders as $row)
<tr>
    <td>{{$row->id}}</td>
   
    <td>{{$row->total_price}}</td>
    <td>{{$row->created_at}}</td>
    <td>{{$row->payment_type}}</td>
    <td>{{$row->payment_status}}</td>
    <td>
	    <a href="{{ URL::to('edit/product/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
	    <a href="{{ URL::to('delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	    
	</td>
</tr> 
	@endforeach
	  </tbody>
	</table>
	</div>
	</div>
	</div>

	</div>
	<!-- /.container-fluid -->

	<!-- End of Main Content -->

	@endsection





