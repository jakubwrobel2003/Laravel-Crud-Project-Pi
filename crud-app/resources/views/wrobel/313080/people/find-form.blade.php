<!DOCTYPE html>
<html>
<head>
    <title>Find Person by ID</title>
</head>
<body>
    <h1>Find Person by ID</h1>
    <form action="{{ route('people.findById') }}" method="get">
        @csrf
        <label for="id">ID:</label>
        <input type="number" name="id" placeholder="Enter ID">
        <button type="submit">Find by ID</button>
    </form>
</body>
</html>