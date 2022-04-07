@extends('backend')
@section('content')


<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Categories</h1>
</div>
<div class="d-flex justify-content-center">
<form class="form-inline" method="POST" action="http://127.0.0.1:8000/category/save">
@csrf
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="name_cat"  placeholder="Category Name..." required>
 </div>
 <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="description_cat"  placeholder="Category Description..." required>
</div>  
    <!-- @error('nomCat')
    <p class="help is-danger">{{ $message }}</p>
    @enderror -->
 
  <button type="submit" class="btn btn mb-2" id="btoo">Add</button>
</form>

</div>
</br>
<div class="table-responsive text-nowrap container-fluid col-8">
    <table class="table text-center table-striped ">
        <thead >
        <tr style="background: #301b3f; color: #e7d9ea">
            <th>Category Name</th>
            <th>Category Description</th>
            <th style="width: 40%">Action</th>

        </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name_cat }}</td>
                    <td>{{ $category->description_cat }}</td>
                    <td>
                        <button type="submit" class="btn btn " style="background: #1e6f5c"><a href="http://127.0.0.1:8000/category/edit/{{ $category->id  }}" class="btn btn-sm"><i class="fas fa-edit"></i></a> </button>
                        <button type="submit" class="btn btn " style="background: #046582"><a href="http://127.0.0.1:8000/category/delete/{{ $category->id }}" class="btn btn-sm"><i class="far fa-trash-alt"></i></a></button>
                        <button type="submit" class="btn btn " style="background: #800080"><a href="http://127.0.0.1:8000/products/category/{{ $category->id }}" class="btn btn-sm">More</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </br>
    <button type="submit" class="btn bt-btn offset mt-6 " id="btoo">
        <a href="http://127.0.0.1:8000" class="btn btn-sm" >Go back</a></button>

</div>
@endsection
