<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student View</title>
</head>
<body>
    <p>Welcome</p>
   <button><a href="{{route('student.create')}}">Create Student Account</a></button>
   <ol>
    @foreach ($students as $student)
        <li>{{$student->first_name." ".$student->last_name." ".$student->email." ".$student->phone}}
            <a href="{{route('student.show',$student->id)}}">Show</a>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </li>

    @endforeach
   </ol>
</body>
</html>
