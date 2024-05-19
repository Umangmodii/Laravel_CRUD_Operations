<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>

    <table border="1px">
        <thead>

        <tr>
            <th> ID </th>
            <th> FirstName </th>
            <th> LastName </th>
            <th> Gender </th>
            <th> Qualification </th>
            <th> Action </th>
            <th> Action</th>
        </tr>
        </thead>

        <tbody>
            @foreach($cruds as $crud)
                <tr>
                    <td> {{$crud->id}} </td>
                    <td> {{$crud->fname}} </td>
                    <td> {{$crud->lname}} </td>
                    <td> {{$crud->gender}} </td>
                    <td> {{$crud->qualification}} </td>

                    <td>
                        <form action="{{ route('destroy', $crud->id) }}" method="post">
                            @csrf
                            @method ('DELETE')

                                <button type="submit"> Delete </button>
                        </form>
                    </td>

                    <td>
                        <form action="{{ route('edit', $crud->id)}}" method="GET">  
                            @csrf  
                             
                            <button class="btn btn-danger" type="submit">Update</button>  
                          </form>  
                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>
    
</body>
</html>