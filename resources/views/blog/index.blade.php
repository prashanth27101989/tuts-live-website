@extends('layouts.frontend')

@section('content')
    <div class="banner">
        <h2>This is my new Blog Please follow and help</h2>
    </div>
    <div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1 class="page-header">
                    List of Blogs
                    <small>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</small>
                </h1>
                @foreach ($posts as $post)
                    <!-- First Blog Post -->
                    <h2 class="blog-title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <p class="lead dLinks"><a style="font-size: 15px" href="index.php">Prashanth Kumar B</a></p>
                    <p><span class="glyphicon glyphicon-time"></span> <em>({{ $post->published_at->format('M jS Y g:ia') }})</em></p>
                    <hr>
                    <img class="img-responsive" src="images/blog/{{ $post->images['name'] }}" alt="">
                    <hr>
                    <p>{{ str_limit($post->content, 500) }}</p>
                    <a class="btn btn-primary" href="/blog/{{ $post->slug }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <hr>
                @endforeach
                {!! $posts->render() !!}

                <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <br/><br/><br/><br/>
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
    </div>
@endsection