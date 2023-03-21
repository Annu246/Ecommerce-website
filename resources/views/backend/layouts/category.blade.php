@extends('backend.index')
@section('content')
<link	rel="stylesheet"	href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form method="POST" action="{{ route('categorysaveform') }}" enctype="multipart/form-data">
    @csrf
     <div class="form-group">
        <label for="exampleInputPassword1">Category_Image</label>
        <input type="file" class="form-control" name="image">
    </div>
<div class="form-group">
    <label for="exampleInputEmail1">Category_Name</label>
   <input	type="text"	class="form-control"	id="productname"  placeholder="Enter name of product" 	aria-describedby="productname"  name='name'>
</div>


  <div class="form-group">
   <label for="exampleInputPassword1">No_of_Products</label>
    <input type="text" class="form-control" id="No_of_Products" placeholder="Enter no. of product"  name="product">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
 @endsection
