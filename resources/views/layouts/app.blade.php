<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../../../../../../bootstrap/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Student App</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="/students"> Student App </a>
        <div>
            <a class="btn btn-primary btn-sm" href="/students">student</a>
            <a class="btn btn-success btn-sm" href="/students/create">Add Student</a>
        </div>
        </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>