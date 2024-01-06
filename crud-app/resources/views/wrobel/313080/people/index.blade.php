<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>People</h1>
   <form action="{{ route('people.showById') }}" method="get">
        @csrf
        <label for="id">ID:</label>
        <input type="number" name="id" placeholder="Enter ID">
        <button type="submit">Find by ID</button>
    </form>

   <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Phone Number</th>
        <th>Street</th>
        <th>Country</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($people as $person)
        <tr>
            <td>{{$person->id}}</td>
            <td>{{$person->name}}</td>
            <td>{{$person->lastname}}</td>
            <td>{{$person->nr_phone}}</td>
            <td>{{$person->street}}</td>
            <td>{{$person->country}}</td>
            <td>
            <a href="{{ route('people.edit', ['people' => $person]) }}">Edit</a>
            </td>
            <td>
            <form method="post" action="{{ route('people.delete', ['people' => $person->id]) }}">
                  @csrf
                  @method('delete')
                 <button type="submit">Delete</button>
             </form>
            </td>

        </tr>
    @endforeach
   </table>
</body>
</html>