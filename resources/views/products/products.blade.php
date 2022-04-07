@extends('backend')
@section('content')

<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Products</h1>
</div>

</br>
<div class="table-responsive text-nowrap container-fluid ">
    <table class="table text-center table-striped ">
        <thead>
        <tr style="background: #301b3f; color: #e7d9ea">
            <th>ID</th>
            <th>Code</th>
            <th>Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>User</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="bg-white">
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code_pr }}</td>
                    <td>{{ $product->category->name_cat }}</td>
                    <td>{{ $product->name_pr }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->user_id }}</td>

                    <td><img src="{{ asset('/uploads/products/' . $product->image) }}" width="100px;" height="100px" alt="Image"> </td>

                    <td>
                        <a href="{{ route('product.edit', $product->id ) }}" class="btn btn" style="background: #1e6f5c"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('product.delete', $product->id ) }}" class="btn btn" style="background: #046582"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    </br>

    <div class="d-flex justify-content-center">

        <button type="submit" class="btn btn " style="margin-right: 1%" id="btio">
            <a href="http://127.0.0.1:8000/products/create "class="btn btn-sm">Add A Product</a>
        </button>  
        <button class="btn btn" id="btio">
            <a href="http://127.0.0.1:8000/home" class="btn btn-sm ">Go back</a>
        </button>
    </div>




    
</div>
@endsection
