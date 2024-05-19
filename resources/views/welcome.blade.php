<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD OPERATION</title>
</head>
<body>

    <form name = "myform" method="POST" action="{{ route('store') }}">

        <h2> Student Details </h2>

        @csrf

        <table>
          <tr>
            <th> <label for = "first_name"> FirstName : </label> </th>
            <td> <input type= "text" name = "fname"> </td>
          </tr>

         <tr>
            <th> <label for = "last_name"> LastName : </label> </th>
            <td> <input type= "text" name = "lname"> </td>
         </tr>

        <tr>
            <th> <label for = "Gender"> Gender : </label>  </th>
            <td> <input type= "text" name = "gender"> </td>
        </tr>

        <tr>
                <th> <label for = "Qualification"> Qualification : </label>  </th>
                <td> <input type= "text" name = "qualification"> </td>
        </tr>

        </table>

        <br/>

        <input type = "submit" name = "Insert" value="Insert">

    </form>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    
</body>
</html>