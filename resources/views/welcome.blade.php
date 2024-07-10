<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="m-3">Treni in partenza oggi: </h1>

    <ul>
        @foreach($trains as $train)
        <li>@include('shared.train')</li>
        @endforeach
    </ul>
</body>

</html>