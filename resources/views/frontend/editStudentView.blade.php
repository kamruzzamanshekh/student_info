<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>

        @endforeach

        @endif
    </div>
    <form action="{{route('student.update', $student->id)}}" method="POST">
        @csrf
        @method('patch')
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" value="{{old('fname',$student->first_name)}}">
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" value="{{old('lname', $student->last_name)}}">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{old('email', $student->email)}}">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone" value="{{old('phone', $student->phone)}}">
        <button type="submit">Update</button>
    </form>

</body>
</html>
