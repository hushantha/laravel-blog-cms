@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">Latest Categories</div>

                <div class="card-body">
                    <table class="table table-striped table-borderd mb-0">
                        <thead class="thead-inverse">
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Name</th>
                                <th scope="col"width="200">Created By</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)    
                                    <tr>
                                        <td scope="row">{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->user->name}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">Latest Posts</div>

                <div class="card-body">
                    <table class="table table-striped table-borderd mb-0">
                        <thead class="thead-inverse">
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col"width="200">Created By</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)    
                                    <tr>
                                        <td scope="row">{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->user->name}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-3 mb-3">
            <div class="card">
                <div class="card-header">Latest Pages</div>

                <div class="card-body">
                    <table class="table table-striped table-borderd mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">Title</th>
                                <th scope="col"width="200">Created By</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)    
                                    <tr>
                                        <td scope="row">{{$page->id}}</td>
                                        <td>{{$page->name}}</td>
                                        <td>{{$page->user->name}}</td>
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
