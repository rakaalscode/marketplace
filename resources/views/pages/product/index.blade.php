@extends('layouts.temp')
@section('title', 'Product')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('product.create') }}" class="btn btn-success">Add Data Product</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Data Product</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-nowrap">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>User</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Desc</th>
                                <th class="text-center">Action</th>
                            </thead>
                            @foreach($data as $field)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $field->name }}</td>
                                    <td>{{ $field->user->name }}</td>
                                    <td>{{ $field->stock }}</td>
                                    <td>{{ $field->price }}</td>
                                    <td>{{ $field->category->name }}</td>
                                    <td>{{ $field->status }}</td>
                                    <td>{{ $field->description }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('product.edit',$field) }}" class="btn btn-warning"><i
                                                style="color: black" class="glyphicon glyphicon-pencil"></i></a>

                                        <form action="{{ route('product.destroy',$field) }}" method="POST">
                                            @csrf @method('delete')
                                            <button class="btn btn-danger"><i style="color: black"
                                                    class="glyphicon glyphicon-trash"></i></button>
                                        </form>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop