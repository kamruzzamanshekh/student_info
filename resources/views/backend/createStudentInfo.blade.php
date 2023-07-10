<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student Info</title>

</head>
<body>
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone">
        <button type="submit">Submit</button>
    </form>
    <button><a href="{{route('student.index') }}">Student List View</a></button>

</body>
</html>