@extends('backend.index')
@section('content')
<link	rel="stylesheet"	href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form >
<div class="form-group">
<label for="exampleInputEmail1">Brand Id</label>
<input	type="text"	class="form-control"	id="productName"	aria-describedby="productName" placeholder="Enter Brand Id">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Brand Name</label>
<input type="text" class="form-control" id="productid" placeholder="Enter Brand Name">
</div>


<div class="form-group">
<label for="exampleInputPassword1">Status</label>
<input type="text" class="form-control" id="productid" placeholder="Enter Status">
</div>



<button type="submit" class="btn btn-primary">Submit</button>
</form> @endsection
