@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
<h1 class="p-2">Edit</h1>
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
    <div class="jumbotron d-flex justify-content-center bg-dark text-black">
        <form class="form" method="POST" action="{{ route('product.update' , $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group row form-inline">
        <label >Code</label>
        <input type="text" name="code_pr" class="form-control offset-2 col-lg" value="{{ $product->code_pr }}"  required></br>
        </div>

        <div class="form-group row form-inline">
                <label class="mr-3">Category</label>
                <select class="form-control offset-2 col-lg" name="name_cat" >
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : ''}} >{{ $category->name_cat }}</option>
                @endforeach
                </select>
                @error('category')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
        </div>

        <div class="form-group row form-inline  ">
        <label>Name</label>
        <input type="text" name="name_pr" class="form-control offset-2 col-lg" value="{{ $product->name_pr }}" required>
        </div>

        <div class="form-group row form-inline">
        <label class="mr-3">Price</label>
        <input type="text" name="price" class="form-control offset-3 col-lg" value="{{ $product->price }}" required>
        </div>

        <div class="form-group row form-inline">
        <label>Description</label>
        <textarea class="form-control offset-2 col-lg"  name="description" rows="5" >{{ $product->description }}</textarea>
        </div>

        <div class="form-group row form-inline">
            <label class="mr-4">Choose an image...</label>
            <input type="file" class="form-control col-lg" value="asset('uploads/products/' .{{ $product->image }})" name="image">
            </br>
        </div>
        <img src="{{ asset('/uploads/products/' . $product->image) }}" width="100px;" height="100px" alt="Image">

        <button type="submit" class="btn btn-primar mb-2 offset-6">Save</button>
        </form>

    </div>
 </div>

</div>

@endsection
