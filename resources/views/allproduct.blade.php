	@extends('contain')
	@section('content')

	<!-- Begin Page Content -->
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">All Products Data Here</h1>


	<!-- DataTales Example -->
	<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 font-weight-bold text-primary">Products</h6>
	</div>
	<div class="card-body">
	<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	  <thead>
	    <tr>
	    <th>Product Name</th>
		<th>Product Id</th>
		<th>Product Code</th>
		<th>Product Godaun</th>
		<th>Product Image</th>
		<th>Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($product as $row)
	<tr>
	<td>{{ $row->product_name }}</td>
	<td>{{ $row->product_id }}</td>
	<td>{{ $row->product_code }}</td>
	<td>{{ $row->product_garege }}</td>
	<td><img src="{{ URL::to($row->image) }}" style="height: 40px; width: 70px;"></td>
	<td>
	    <a href="{{ URL::to('edit/product/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
	    <a href="{{ URL::to('delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	    <a href="{{ URL::to('view/product/'.$row->id) }}" class="btn btn-sm btn-success">View</a>
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



