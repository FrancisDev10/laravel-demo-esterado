<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <h1> THIS IS GALLERY</h1>
    <br>
    <a href="{{ route('gallery')}}">
        <button class="border text-red-500
        hover:text-orange-500">Gallery</button>
    </a>
    <br>
    <a href="{{ route('index')}}">
        <button>Index/Home</button>
    </a>
    <br>
    <a href="{{ route('services')}}">
        <button>Services</button>
    </a>
</html>