@extends('layouts.temp')
@section('title', 'Category')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('category.create') }}" class="btn btn-success">Add Data Category</a>
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">Data Category</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-nowrap">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Slug</th>
                                <th class="text-center">Action</th>
                            </thead>
                            @foreach($data as $field)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $field->name }}</td>
                                    <td>{{ $field->description }}</td>
                                    <td>{{ $field->slug }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('category.edit',$field) }}" class="btn btn-warning"><i
                                                style="color: black" class="glyphicon glyphicon-pencil"></i></a>
                                        <form action="{{ route('category.destroy',$field) }}" method="POST">
                                            @csrf @method('delete')
                                            <button class="btn btn-danger"><i style="color: black"
                                                    class="glyphicon glyphicon-trash"></i></button>
                                        </form>
                                    </td>
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