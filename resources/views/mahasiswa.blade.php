<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol class="list-group">
    @forelse ($mahasiswa as $val)
    <li class="list-group-item">{{$val}}</li>
    @empty
    <div class="alert alert-dark d-inline-block">No data...</div>
    @endforelse
    </ol>

</body>
</html>