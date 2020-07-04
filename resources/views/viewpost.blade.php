@extends('contain')
@section('content')

 <div class="container">
   <div class="row">
     <div class="col-lg-10 col-md-12 mx-auto">
       
     
      <div>
        <table class="table table-warning " border>
            <thead>
              <tr>
                <th scope="col">Post Title</th>
                <th scope="col">Post Image</th>
                <th scope="col">Category Name</th>
                <th scope="col">Post Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $post->title }}</th>
                <td><img src="{{ URL::to($post->image) }}" height="70px;"></td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->details }}</td>
              </tr>
            </tbody>
      </table>
         
      </div>
     </div>
   </div>
</div>
@endsection