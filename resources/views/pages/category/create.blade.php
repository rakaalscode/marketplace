@extends('layouts.temp')
@section('title', 'Category')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <a href="{{ route('category.index') }}" class="btn btn-warning">Back to Index</a>
    <br><br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
                </div>

                <button class="btn btn-success pull-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@stop