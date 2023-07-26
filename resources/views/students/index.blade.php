<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div class="w-75 m-auto">
        <h1 class="text-center mt-5">STUDENT LIST</h1> 
        <div class="p-3 w-100">
                @if(session()->has('success'))
                <div class="text-center">
                    {{session('success')}}
                </div>
                @endif
            </div>
            <div>
                <div class="w-100">
                    <a href="{{route('students.register')}}" class="btn-success rounded p-2">Register Student</a>
                </div>
                <table class="table table-hover mt-3">
                    <tr>
                        <th>Student Number</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </tr>

                    @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->firstname}}</td>
                        <td>{{$student->lastname}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <a href="{{route('students.edit', ['student' => $student])}}">Edit</a>
                        </td> 
                        <td>
                            <form method="post" action="{{route('students.delete', ['student' => $student])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn-danger rounded border-0 p-1">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
    </div>
</body>
</html>