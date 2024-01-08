<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create people</h1>
    <form method="post" action="{{route('people.add')}}">
       @csrf
       @method('post')
    <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"/>
        </div>
        <div>
            <label>Last Name</label>
            <input type="text"name="lastname" placeholder="Last Name"/>
        </div><div>
            <label>Phone number</label>
            <input type="number" name="nr_phone" placeholder="Phone Number"/>
        </div><div>
            <label>Street</label>
            <input type="text"name="street" placeholder="Street"/>
        </div><div>
            <label>Country</label>
            <input type="text"name="country" placeholder="Country"/>
        </div>
        <div>
            <input type="submit" value="Add new person"/>
        </div>
</form>
</body>
</html>