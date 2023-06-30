<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
<title>Usuários</title>


</head>
<body>
<div class="container">
    
    <style>
        .text-center{
            justify-content: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
    
    <table class="table table-striped table-hover table-bordered table-sm caption-top">

        <thead class="table-dark">
    
        <tr>
    
            <td>Id</td>
    
            <td>Name</td>
    
            <td>Age</td>
    
            <td>Email</td>
    
    </tr>
    
    </thead>
    
    @foreach ($pagination as $item)
    
        <tr>
    
            <td>{{$item['id']}}</td>
    
            <td>{{$item['name']}}</td>
    
            <td>{{$item['age']}}</td>
    
            <<td>{{$item['email']}}</td>
    
    </tr>
    
        @endforeach
    
        <caption class="text-center">Lista de Usuários</caption>
    
        </table>

        <div class="pagination justify-content-center">
            {{ $pagination->links('pagination::bootstrap-4') }}
        </div>

</body>
</html>











