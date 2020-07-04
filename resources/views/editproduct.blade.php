@extends('contain')
@section('content')
<div class="content-page">
<!-- Start content -->
<div class="content">
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
       
      <hr>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif

       <form action="{{ url('update/product/'.$product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product Name</label>
             <input type="text" class="form-control" value="{{ $product->product_name }}" name="product_name" required >
           </div>
         </div>
          <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product ID</label>
             <input type="text" class="form-control" value="{{ $product->product_id }}" name="product_id" required >
           </div>
         </div>
          <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product Code</label>
             <input type="text" class="form-control" value="{{ $product->product_code }}" name="product_code" required >
           </div>
         </div>
         <br>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Selling Price</label>
             <input type="text" class="form-control" value="{{ $product->selling_price }}" name="selling_price" required >
           </div>
         </div>
          <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Category</label>
            <select class="form-control" name="cat_id">
              @foreach($category as $row)
            	<option value="{{ $row->id }}"  <?php if($row->id == $product->cat_id) echo "selected"; ?> >{{ $row->name }}</option>s
            	@endforeach
            </select>
           </div>
         </div>
         <br>
         <div class="control-group">
           <div class="form-group col-xs-12 ">
             <label>New Image</label>
             <input type="file" class="form-control"   name="image"><br>
  				Old Image: <img src="{{ URL::to($product->image) }}" style="height: 40px; width: 80px; " >
  				<input type="hidden" name="old_photo" value="{{ $product->image }}">
           </div>
         </div><br>
         <br>
         <div id="success"></div>
         <div class="form-group">
           <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
         </div>
       </form>
     </div>
   </div>
</div>
</div>
	
</div>
@endsection