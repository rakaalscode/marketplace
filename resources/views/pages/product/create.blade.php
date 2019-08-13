@extends('layouts.temp')
@section('title', 'Product')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <a href="{{ route('product.index') }}" class="btn btn-warning">Back to Index</a>
    <br><br>
    <div class="panel panel-default">
        <div class="panel-heading">Add Product</div>
        <div class="panel-body">
            <form action="{{ route('product.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}" required>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" name="stock" id="" class="form-control" value="{{ old('stock') }}" required>
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" name="price" id="" class="form-control" value="{{ old('price') }}" required>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control" required>
                        <option value="" disabled selected>Choose Category</option>
                        @foreach($categorys as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"
                        required>{{ old('description') }}</textarea>
                </div>

                <button class="btn btn-success pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@stop