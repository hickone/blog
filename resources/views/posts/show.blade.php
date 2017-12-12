@extends ('layouts.master')

@section ('content')
    <div class="row">
    <div class="col-sm-8 blog-main">

        <h1>{{ $post->title }}</h1>
        {{ $post->created_at }}<br>
        {{ $post->body }}



        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

        <ul class="list-group">

            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                {{ $comment->body }}
                </li>
            @endforeach

        </ul>

        <hr>
        <h3>Leave a comment</h3>
        {{--comment form--}}
        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea>
                    </div>
                    <div class="group-form">
                        <button type="submit" class="btn btn-primary">Publier</button>

                    </div>
                </form>

                @include('layouts.errors')

            </div>
        </div>

    </div>
    @include('layouts.sidebar')
    </div>





@endsection