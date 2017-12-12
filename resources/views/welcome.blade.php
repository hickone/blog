<!doctype html>
<html >
    <head>
        <title>Mon blog</title>
    </head>
    <body>
        <ul>
            @foreach( $tasks as $task)
                <li>{{ $task->body }}</li>
            @endforeach
        </ul>
    </body>
</html>
