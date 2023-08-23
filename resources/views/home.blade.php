<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <ul>
        @foreach ($trains as $train)
            <li class="fs-4">{{ $train->getDetails() }}</li>
        @endforeach
    </ul>
</body>

</html>
