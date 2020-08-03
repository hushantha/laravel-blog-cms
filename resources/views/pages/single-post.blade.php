<?php
    $siteTitle = 'My Blog';
    $pageTitle = $post->title;
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
                            <div class="col-lg-12">
                                @include('layouts.post-block')
                            </div>
                           
                            <div class="col-lg-12">
                                <div class="sidebar-item comments">
                                    <div class="sidebar-heading">
                                        <h2>4 comments</h2>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <div class="author-thumb">
                                                    <img src="/storage/{{$post->user->avatar}}" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Charles Kate<span>May 16, 2020</span></h4>
                                                    <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                                                </div>
                                                <ul>
                                                    <li class="replied">
                                                        <div class="author-thumb">
                                                            <img src="/storage/{{$post->user->avatar}}" alt="">
                                                        </div>
                                                        <div class="right-content">
                                                            <h4>Thirteen Man<span>May 20, 2020</span></h4>
                                                            <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="author-thumb">
                                                    <img src="/storage/{{$post->user->avatar}}" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                                                    <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                                                </div>
                                                <ul>
                                                    <li class="replied">
                                                        <div class="author-thumb">
                                                            <img src="/storage/{{$post->user->avatar}}" alt="">
                                                        </div>
                                                        <div class="right-content">
                                                            <h4>Thirteen Man<span>May 22, 2020</span></h4>
                                                            <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- col-lg-12 Ends Here -->

                            <div class="col-lg-12">
                                <div class="sidebar-item submit-comment">
                                    <div class="sidebar-heading">
                                        <h2>Your comment</h2>
                                    </div>
                                    <div class="content">
                                        <form id="comment" action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="name" type="text" id="name" placeholder="Your name" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="email" type="text" id="email" placeholder="Your email" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit" class="main-button">Submit</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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