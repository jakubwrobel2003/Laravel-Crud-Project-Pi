<!DOCTYPE html>
<html>
<head>
    <title>Person Details</title>
</head>
<body>
    <h1>Person Details</h1>
    @if ($person)
        <p>Id: {{ $person->id }}</p>
        <p>Name: {{ $person->name }}</p>
        <p>Lastname: {{ $person->lastname }}</p>
        <p>Street: {{ $person->street }}</p>
        <p>Country: {{ $person->country }}</p>
    @else
        <p>Person not found</p>
    @endif
</body>
</html>