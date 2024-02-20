<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>View, world!</h1>
        @foreach ($images as $image)
            <p>{{ $image->name }}</p>
            @php
                // $imagName = $image->images;
                // $imagess = json_decode($imagName, true);
                $img = explode(',', $image->images);
            @endphp
            @foreach ($img as $key => $val)
                <img src="{{ asset('images/' . $val) }}" alt="Image" />
            @endforeach
            @php
                // $skil
                // $skillsArray = json_decode($skill, true);

                // $imagePaths = explode(',', $image->images); // Split the comma-separated image paths into an array
                // dd($image);
            @endphp
            {{-- @foreach ($imagePaths as $path)
                <img src="{{ asset($path) }}" alt="Image">
            @endforeach --}}
        @endforeach

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
