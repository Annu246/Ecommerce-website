@extends('backend.index')
@section('content')
<link	rel="stylesheet"	href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form >
<div class="form-group">
<label for="exampleInputEmail1">Order Id</label>
<input	type="text"	class="form-control"	id="productName"	aria-describedby="productName" placeholder="Enter  Order Id">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Date</label>
<input type="text" class="form-control" id="productid" placeholder="Enter  Date">
</div>


<div class="form-group">
<label for="exampleInputPassword1">Order No</label>
<input type="text" class="form-control" id="productid" placeholder="Enter order no">
</div>

<div class="form-group">
<label for="exampleInputPassword1">Status</label>
<input type="text" class="form-control" id="productPrice" placeholder="Enter Status">
</div>




<button type="submit" class="btn btn-primary">Submit</button>
</form> @endsection
