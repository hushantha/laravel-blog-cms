@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    Category - list
                    <a href="{{route('categories.create')}}" class="btn btn-primary btn-sm float-right">Add New</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-borderd mb-0">
                        <thead class="thead-inverse">
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Name</th>
                                <th scope="col"width="200">Created By</th>
                                <th scope="col"width="130">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)    
                                <tr>
                                    <td scope="row">{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->user->name}}</td>
                                    <td>
                                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                        {!! Form::open(['route'=>['categories.destroy', $category->id], 'method'=>'delete', 'style'=>'display:inline;']) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
