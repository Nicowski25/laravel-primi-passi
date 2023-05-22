<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>Laravel First Steps</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <h1 class="text-center py-4">Welcome to {{$name}}'s first webpage on Laravel.</h1>
        <h4>Infos about me:</h4>
        <ul>
            <li>Name: {{ $name }}</li>
            <li>Last name: {{ $lastname }}</li>
            <li>Age: {{ $age }}</li>
        </ul>
    </div>
</body>

</html>