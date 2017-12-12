@extends ('layouts.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <h1>Créer un post</h1>
        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea name="body" id="body" cols="30" class="form-control"></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Publier</button>
        </form>

        @include ('layouts.errors')


    </div>
@endsection


