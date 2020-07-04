@extends('contain')
@section('content')
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

       <form action="{{ url('update/category/'.$category->id) }}" method="post" enctype="multipart/form-data">
        @csrf
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Category Name</label>
             <input type="text" class="form-control" value="{{ $category->name }}" name="title" required >
           </div>
         </div>
         <br>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label>Slug</label>
             <input type="text" class="form-control" value="{{ $category->slug }}" name="title" required >
           </div>
         </div>
         <br>
         <div id="success"></div>
         <div class="form-group">
           <button type="submit" class="btn btn-primary" id="sendMessageButton">Update</button>
         </div>
       </form>
     </div>
   </div>
</div>
@endsection