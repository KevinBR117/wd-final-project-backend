<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados de vark test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Resultados de vark test</h2>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">visual score</th>
                    <th scope="col">aural score</th>
                    <th scope="col">read score</th>
                    <th scope="col">kinesthetic score</th>
                    <th scope="col">tipo obtenido</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td>{{ $user->user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->visualPunctuation }}</td>
                        <td>{{ $user->auralPunctuation }}</td>
                        <td>{{ $user->readPunctuation }}</td>
                        <td>{{ $user->kinestheticPunctuation }}</td>
                        <td>{{ $user->varkTypeObtained }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
