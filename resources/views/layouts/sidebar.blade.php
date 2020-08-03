<div class="row">
    <div class="col-lg-12">
        <div class="sidebar-item search">
            <form id="search_form" name="gs" method="GET" action="#">
                <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
            </form>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="sidebar-item recent-posts">
            <div class="sidebar-heading">
                <h2>Recent Posts</h2>
            </div>
            <div class="content">
                <ul>
                    @foreach ($recentPosts as $recentPost)
                        <li>
                            <a href="{{url('blog/'.$recentPost->slug)}}">
                                <h5>{{$recentPost->title}}</h5>
                                <span>{{$recentPost->created_at->format('F, d, Y')}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="sidebar-item categories">
            <div class="sidebar-heading">
                <h2>Categories</h2>
            </div>
            <div class="content">
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="{{url('category/'.$category->slug)}}">- {{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-lg-12">
        <div class="sidebar-item tags">
            <div class="sidebar-heading">
                <h2>Tag Clouds</h2>
            </div>
            <div class="content">
                <ul>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">HTML5</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Motivation</a></li>
                    <li><a href="#">PSD</a></li>
                    <li><a href="#">Responsive</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- Row Ends Here -->