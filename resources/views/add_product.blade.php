@extends('contain')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-lg-8 col-md-10 mx-auto">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
       @endif

       <form action="{{ Route('store.product') }}" method="post" enctype="multipart/form-data">
        @csrf
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product Name</label>
             <input type="text" class="form-control" placeholder="Product Name" name="product_name" required >
           </div>
         </div>
         <br>
          <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Category</label>
            <select class="form-control" name="cat_id">
              @foreach($product as $row)
            	<option value="{{ $row->id }}">{{ $row->name }}</option>
            	@endforeach
            </select>
           </div>
         </div>
         <br>
          <div class="form-group">
               <label for="address">Product Godaun</label>
                 <input type="text" class="form-control" id="address" placeholder="Product Godaun" name="product_garege" required>
             </div>
			<div class="form-group">
               <label for="email">Product Id</label>
                 <input type="text" class="form-control" id="email" name="product_id" placeholder="Product Id" required>
             </div>
             <div class="form-group">
               <label for="exparience">Product Route</label>
                 <input type="text" class="form-control" id="exparience" placeholder="Product Route" name="product_route" required>
             </div>
             <div class="form-group">
               <label for="email">Product Code</label>
                 <input type="text" class="form-control" id="email" name="product_code" placeholder="Product Code" required>
             </div>
             <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Publish Status</label>
            <select class="form-control" name="publication_status">
          
              <option value="0">0</option>
              <option value="1">1</option>
            
            </select>
           </div>
         </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Buying Date</label>
                 <input type="Date" class="form-control" id="exampleInputPassword1" placeholder="Buying Date" name="bye_date" required>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Expire Date</label>
                 <input type="Date" class="form-control" id="exampleInputPassword1" placeholder="Expire Date" name="expier_date" required>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Buying Price</label>
                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Buying Price" name="buying_price" required>
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Sellin Price</label>
                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sellin Price" name="selling_price" required>
             </div> 

             
         <div class="control-group">
           <div class="form-group col-xs-12 floating-label-form-group controls">
             <label>Post Image</label>
             <input type="file" class="form-control"  required name="image">
             
           </div>
         </div>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Product Details</label>
             <textarea rows="5" id="summary-ckeditor" class="form-control" placeholder="Details"  required name="details"></textarea>
            
           </div>
         </div>
         <br>
         <div id="success"></div>
         <div class="form-group">
           <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
         </div>
       </form>
     </div>
   </div>
</div>
@endsection