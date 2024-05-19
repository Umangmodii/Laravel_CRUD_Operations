<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Details</title>
</head>
<body>

    <h2> Student Details </h2>

    <form action="{{ route('edit', $crud->id) }}" method="POST">

        @method('PATCH') 
        @csrf

        <table>
          <tr>
            <th> <label for = "first_name"> FirstName : </label> </th>
            <td> <input type= "text" name = "fname" value = "{{$crud->fname}}"> </td>
          </tr>

         <tr>
            <th> <label for = "last_name"> LastName : </label> </th>
            <td> <input type= "text" name = "lname" value = "{{$crud->lname}}"> </td>
         </tr>

        <tr>
            <th> <label for = "Gender"> Gender : </label>  </th>
            <td> <input type= "text" name = "gender"  value = "{{$crud->gender}}"> </td>
        </tr>

        <tr>
                <th> <label for = "Qualification"> Qualification : </label>  </th>
                <td> <input type= "text" name = "qualification"  value = "{{$crud->qualification}}"> </td>
        </tr>

        </table>

        <br/>

        <input type = "submit" name = "Update" value="Update">

    </form>

    
</body>
</html>