<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados de personality test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Resultados de personality test</h2>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">extorvert score</th>
                    <th scope="col">introvert score</th>
                    <th scope="col">sensory score</th>
                    <th scope="col">intuitive score</th>
                    <th scope="col">rational score</th>
                    <th scope="col">emotional score</th>
                    <th scope="col">qualifier score</th>
                    <th scope="col">perceptual score</th>
                    <th scope="col">tipo personalidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr>
                        <td>{{ $user->user->name }}</td>
                        <td>{{ $user->user->lastName }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->extrovertScore }}</td>
                        <td>{{ $user->introvertScore }}</td>
                        <td>{{ $user->sensoryScore }}</td>
                        <td>{{ $user->intuitiveScore }}</td>
                        <td>{{ $user->rationalScore }}</td>
                        <td>{{ $user->emotionalScore }}</td>
                        <td>{{ $user->qualifierScore }}</td>
                        <td>{{ $user->perceptualScore }}</td>
                        <td>{{ $user->personalityTypeObtained }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
