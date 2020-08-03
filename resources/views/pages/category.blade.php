<?php
    $siteTitle = 'My Blog';
    $pageTitle = 'Categories / '.$category->name;
?>

@extends('layouts.app')

@section('content')

    @include('layouts.top-banner')

    <!-- main Section Start Here -->
    <section class="blog-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @forelse ($posts as $post)
                            <div class="col-lg-6">
                                @include('layouts.post-block')
                            </div> <!-- col-lg-12 Ends Here --> 
                            @empty
                                <h4>There is no post</h4>
                            @endforelse 
                        </div> <!-- Row Ends Here -->
                        <div class="pagination">
                            {{$posts->links()}}
                        </div>
                    </div> <!-- all-blog-posts Ends Here -->
                </div> <!-- col-lg-8 Ends Here -->

                <div class="col-lg-4">
                    <div class="sidebar">
                        @include('layouts.sidebar')
                    </div> <!-- sidebar Ends Here -->
                </div> <!-- col-lg-4 Ends Here -->
            </div> <!-- Row Ends Here -->
        </div> <!-- Container Ends Here -->
    </section>
    <!-- main Section Start Here -->
 @endsection