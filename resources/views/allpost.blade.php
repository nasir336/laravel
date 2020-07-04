@extends('contain')
@section('content')
<!-- <div class="container-fluid">
 <div class="container">
   <div class="row">
     <div class="col-lg-12  mx-auto">
       	<a href="{{ route('write.post') }}" class="btn btn-info">Write Post</a>
       
      <hr>
     	<table class="table table-dark">
     		<tr>
     			<th>SL</th>
     			<th>Category</th>
     			<th>Title </th>
                <th>Description</th>
     			<th>Image</th>
     			<th>Action</th>
     		</tr>
     		@foreach($post as $row)
     		<tr>
     			<td>{{ $row->id }}</td>
     			<td>{{ $row->name }}</td>
     			<td>{{ $row->title }}</td>
                <td>{{ $row->details }}</td>
     			<td><img src="{{ URL::to($row->image) }}" style="height: 40px; width: 70px;"></td>
     			<td>
                    <a href="{{ URL::to('edit/post/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('delete/post/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                    <a href="{{ URL::to('view/post/'.$row->id) }}" class="btn btn-sm btn-success">View</a>
                </td>
     		</tr>
     		@endforeach
     	</table>
       
     </div>
   </div>
</div>
</div> -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All Post Data Here</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SL</th>
                <th>Category</th>
                <th>Title </th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($post as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->details }}</td>
                <td><img src="{{ URL::to($row->image) }}" style="height: 40px; width: 70px;"></td>
                <td>
                    <a href="{{ URL::to('edit/post/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{ URL::to('delete/post/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                    <a href="{{ URL::to('view/post/'.$row->id) }}" class="btn btn-sm btn-success">View</a>
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



