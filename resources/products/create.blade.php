@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Add a product</h1>
</div>

@if($errors->any())
<div class="alert alert-danger col-8 offset-2">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="d-flex justify-content-center">
 <div class="container col-6  ">
    <div class="jumbotron d-flex justify-content-center text-black" style="background: #301b3f; color: #e7d9ea">
        <form class="form" method="POST" action="{{ route('product.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row form-inline">
        <label >Code</label>
        <input type="text" name="code_pr" class="form-control offset-2 col-lg" required></br>
        </div>

        <div class="form-group row form-inline">
                <label class="mr-3">Category</label>
                <select class="form-control offset-2 col-lg" name="name_cat" >
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name_cat }}</option>
                @endforeach
                </select>
                @error('category')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
        </div>

        <div class="form-group row form-inline  ">
        <label>Name</label>
        <input type="text" name="name_pr" class="form-control offset-2 col-lg" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Price</label>
        <input type="text" name="price" class="form-control offset-3 col-lg" required>
        </div>

        <div class="form-group row form-inline">
        <label>Description</label>
        <textarea class="form-control offset-2 col-lg" name="description_pr" style="margin-left: 15%" rows="5" required></textarea>
        </div>

        <div class="form-group row form-inline">
            <label class="mr-3">Choose an image</label>
            <input type="file" class="form-control offset col-lg" style="margin-left: 2%" name="image" >
        </div>
        </br>
        
        <div class="d-flex justify-content-center mb-2 offset-5">
            <button type="submit" class="btn btn  " id="bto" style="margin-right: 1%">Add</button>
            <button class="btn btn  " id="bto">
                <a href="http://127.0.0.1:8000/products">Go back</a>
            </button>
        </div>

        </form>

    </div>
 </div>

</div>

@endsection
