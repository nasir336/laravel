@extends('contain')

@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">Welcome !</h4>
        <ol class="breadcrumb pull-right">
            <li><a href="#">Echoval</a></li>
            <li class="active">It</li>
        </ol>
    </div>
</div>
    <!-- start widget -->
    <div class="row">
    	<div class="col-md-2"></div>
        <!-- Basic example -->
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Add Category</h3></div>
                <div class="panel-body">
                   @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif
      <form method="POST" action=" {{route('store.category')}} " enctype="multipart/form-control">
      	@csrf
           <div class="form-group">
               <label for="name">Category Name</label>
       <input type="text" class="form-control" id="name" name = "name" placeholder="Cat Name" required>
             </div>
            <div class="form-group">
               <label for="email">Slug</label>
                 <input type="text" class="form-control" id="email" name="slug" placeholder="slug" required>
             </div>
                   <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
          </form>
        </div><!-- panel-body -->
    </div> <!-- panel -->
</div> <!-- col-->
    </div> <!-- End row -->
</div> <!-- container -->
</div> <!-- content -->
</div>

              
@endsection
