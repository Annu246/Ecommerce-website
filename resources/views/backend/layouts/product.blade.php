@extends('backend.index')
@section('content')
<link	rel="stylesheet"	href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form method="POST" action="{{ route('productsaveform') }}" enctype="multipart/form-data">
    @csrf
<div class="form-group">
   <label for="exampleInputPassword1">Product Name</label>
     <input type="text" class="form-control" id="productid" placeholder="Enter Product Name" name="name">
  </div>


   <div class="form-group">
       <label for="exampleInputPassword1">Price</label>
      <input type="text" class="form-control" id="productid" placeholder="Enter Price of the product" name="price">
    </div>

   <div class="form-group">
     <label for="exampleInputPassword1">Description</label>
     <input type="text" class="form-control" id="productPrice" placeholder="Enter Description" name='description'>
   </div>


    <div class="form-group">
       <label for="exampleInputPassword1">Image</label>
       <input type="file" class="form-control" id="productid" placeholder="" name='image'>
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
     @endsection
