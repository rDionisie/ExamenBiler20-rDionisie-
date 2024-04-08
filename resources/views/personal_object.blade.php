<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilet nr20 Raileanu Dionisie</title>
</head>
<body>
    <h1>Obiective Personale</h1>

    <h2>Crearea obiectivelor personale:</h2>
    <form method="POST" action="{{ route('goals.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Introduceți numele">
        <button type="submit">Creează</button>
    </form>

    <h2>Lista personală de obiecte</h2>
    <ul>
        @foreach ($personalObjects as $personalObject)
            <li>{{ $personalObject->name }}</li>
        @endforeach
    </ul>
</body>
</html>
