    <div class="blog-post">
        <div class="blog-thumb">
            <a href="{{url('blog/'.$post->slug)}}">
                <img src="/storage/img/post1.jpg" alt="{{$post->title}}">
            </a>
        </div>
        <div class="down-content">
            @if(count($post->categories) > 0)
                @foreach ($post->categories as $categories)
                    <span><a href="{{url('category/'.$categories->slug)}}">{{$categories->name }}</a> |</span>
                @endforeach
            @else
                <span><a href="{{url('category/other')}}">other</a></span>
            @endif 
            <a href="{{url('blog/'.$post->slug)}}"><h4>{{$post->title}}</h4></a>
            <ul class="post-info">
                <li><a href="#">{{$post->user->name}}</a></li>
                <li><a href="#">{{$post->created_at->format('F, d, Y')}}</a></li>
                <li><a href="#">12 Comments</a></li>
            </ul>
            <p>
                {{Str::substr($post->sub_title , 0, 100)}}
            </p>
            <div class="post-options">
                <div class="row">
                    <div class="col-6">
                        <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Beauty</a>,</li>
                            <li><a href="#">Nature</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a>,</li>
                            <li><a href="#"> Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- blog-post Ends Here -->
