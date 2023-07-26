<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student's Data</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="w-50 m-auto">
        <h1 class="mt-5 mb-3 text-center">Edit Student's Data</h1>
        <div>
            @if($errors->any())
             <p>Update Failed!</p>
            @endif
        </div>
        <div class="w-50 m-auto">
            <form action="{{route('students.update', ['student' => $student])}}" method="post">
                @csrf
                @method('put')
                <div>
                    <label for="">Firstname</label>
                    <input type="text" name="firstname" placeholder="firstname" class="form-control" value="{{$student->firstname}}">
                </div>
                <div>
                    <label for="">Lastname</label>
                    <input type="text" name="lastname" placeholder="lastname" class="form-control"  value="{{$student->lastname}}">
                </div>
                <div>
                    <label for="">Address</label>
                    <input type="text" name="address" placeholder="address" class="form-control"  value="{{$student->address}}">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="email" class="form-control"  value="{{$student->email}}">
                </div>
                <div>
                    <input type="submit" value="Update" class="mt-3 btn-success rounded border-0 p-2">
                </div>
            </form>
        </div>
    </div>
</body>
</html>