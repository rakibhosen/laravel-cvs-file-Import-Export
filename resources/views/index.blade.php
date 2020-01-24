<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
            </form>
        </div>
        <div class="card-body">
          
                <table>
                    <caption>Cvs file show</caption>
                    <thead>
                        <tr>
                            <th width="20%">Name</th>
                            <th width="20%">Email</th>
                            <th width="20%">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach($student as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
        </div>
    </div>
</div>
   
</body>
</html>