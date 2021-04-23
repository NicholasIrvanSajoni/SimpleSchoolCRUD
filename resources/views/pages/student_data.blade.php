<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>INI STUDENT DATA</h1>
    {{-- @foreach ($students as $student) --}}
        <div>
            <p>{{ $student['id'] }}</p>
            <p>{{ $student['name'] }}</p>
            <p>{{ $student['age'] }}</p>
        </div>
    {{-- @endforeach --}}
</body>
</html>
