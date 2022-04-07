@extends('backend')
@section('content')

<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Edit</h1>
</div>

<form class="form-inline d-flex justify-content-center mt-5" method="POST" action="http://127.0.0.1:8000/category/update/{{ $category->id }}">
@csrf
@method('PUT')
  <div class="form-group mx-sm-3  ">
    <input type="text" class="form-control" name="name_cat" value="{{ $category->name_cat }}"  required>
  </div>
  <div class="form-group mx-sm-3  ">
    <input type="text" class="form-control" name="description_cat" value="{{ $category->description_cat }}"  required>
  </div>
  <button type="submit" class="btn btn " id="btoo">Edit</button>
</form>
@endsection

