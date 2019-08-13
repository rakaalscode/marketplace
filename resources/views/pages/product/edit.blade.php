@extends('layouts.temp')
@section('title', 'Product')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <a href="{{ route('product.index') }}" class="btn btn-warning">Back to Index</a>
    <br><br>
    <div class="panel panel-default">
        <div class="panel-heading">Edit Data Product</div>
        <div class="panel-body">
            <form action="{{ route('product.update',$data) }}" method="POST">
                @csrf @method('patch')
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name',$data->name) }}" required>
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <label for="">Stock</label>
                    <input type="number" name="stock" id="" class="form-control" value="{{ old('stock',$data->stock) }}" required>
                </div>

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" name="price" id="" class="form-control" value="{{ old('price',$data->price) }}" required>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="" class="form-control" required>
                        @foreach($categorys as $category)
                        @if ($category->id == $category->category_id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control"
                        required>{{ old('description',$data->description) }}</textarea>
                </div>

                <button class="btn btn-success pull-right">Update</button>
            </form>
        </div>
    </div>
</div>
@stop