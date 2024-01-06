<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit people</title>
</head>
<body>
    <h1>Edit people</h1>
    <form method="post" action="{{ route('people.u', ['people' => $people]) }}">
       @csrf
       @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ $people->name }}" />
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Last Name" value="{{ $people->lastname }}" />
        </div>
        <div>
            <label>Phone number</label>
            <input type="number" name="nr_phone" placeholder="Phone Number" value="{{ $people->nr_phone }}" />
        </div>
        <div>
            <label>Street</label>
            <input type="text" name="street" placeholder="Street" value="{{ $people->street }}" />
        </div>
        <div>
            <label>Country</label>
            <input type="text" name="country" placeholder="Country" value="{{ $people->country }}" />
        </div>
        <div>
            <input type="submit" value="Edit new person" />
        </div>
    </form>
</body>
</html>
