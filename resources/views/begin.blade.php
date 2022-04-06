<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Begin</title>
</head>
<body>
    <div class="container-sm">
        <h1>Enter the Complete Name of the Student</h1>
        <form action="/enter-grade" method="POST">
        @csrf
        @for ($i = 1; $i <= 5; $i++)
        <div class="row">
            <label>Student {{ $i }} Name:</label>
            <input type="text" name="name_{{ $i }}" class="form-control">
</div>
@enfor
<hr/>
<div class="row">
    <button class="btn btn-primary btn-lg">Save Students</button>
</div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>