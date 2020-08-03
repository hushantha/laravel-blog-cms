<?php
$siteTitle = 'My Blog';
$pageTitle = 'Lets See My Blog';
?>

@extends('layouts.app')

@section('content')

@include('layouts.top-banner')

<!-- category Starts Here -->
<div class="container">
    <div class="main-banner header-text">
        <div class="container-fluid">
            <div class="owl-banner owl-carousel">
                @forelse ($categories as $category)
                    <div class="item">
                        <a href="{{url('category/'.$category->slug)}}"><img src="/storage/img/post4.jpg" alt=""></a>
                        
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span>{{$category->name}}</span>
                                </div>
                                {{-- <ul class="post-info">
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">May 12, 2020</a></li>
                                    <li><a href="#">12 Comments</a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <p></p>
                @endforelse
            </div>
        </div>
    </div>
</div>
<!-- category Ends Here -->

<!-- main Section Start Here -->
<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        @forelse ($posts as $post)
                            <div class="col-lg-12">
                                @include('layouts.post-block')
                            </div> <!-- col-lg-12 Ends Here -->
                        @empty
                            <h4>There is no post</h4>
                        @endforelse

                        <div class="col-lg-12">
                            <div class="main-button">
                            <a href="/blog">View All Posts</a>
                            </div>
                        </div> <!-- col-lg-12 Ends Here -->
                    </div> <!-- Row Ends Here -->
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