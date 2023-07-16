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
   <table class="table table-dark">
    <thead>
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
        @foreach ($students as $student )
            <tr>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <a href="{{route('student.show',$student->id)}}">Show</a>
                    <a href="{{route('student.edit', $student->id)}}">Edit</a>
                    <form action="{{route('student.delete', $student->id)}}" method="POST">
                        @method('DELETE');
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
    </thead>
   </table>
</body>
</html>
