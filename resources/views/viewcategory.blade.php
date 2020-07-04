@extends('contain')
@section('content')

 <div class="container">
   <div class="row">
     <div class="col-lg-10 col-md-12 mx-auto">
       
     
      <div>
        <table class="table " border>
            <thead>
              <tr>
                <th >Category Name</th>
                <th scope="col">Slug</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $category->name }}</th>
                <td>{{ $category->slug }}</td>
              </tr>
            </tbody>
      </table>
         
      </div>
     </div>
   </div>
</div>
@endsection