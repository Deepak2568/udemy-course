<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        <img src="images/{{session('image')}}" alt="No Image" width="100" height="100">
    @endif

    @if($errors->any())
    {{-- <div class="alert alert-danger"> --}}
        @foreach ($errors->all() as $error)
            <script>alert('{{$error}}');</script>     
        @endforeach

    {{-- </div> --}}
    @endif
    <form action="/" enctype="multipart/form-data" method="post">
        @csrf
        <div class="container">
            <input type="file" name="image" id="image">
        </div>
        <button type="submit">Upload</button>
    </form>
</body>
</html>