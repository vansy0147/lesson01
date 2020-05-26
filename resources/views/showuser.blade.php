<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CREATED_DATE</th>
        </tr>
        @foreach($hoa as $key => $data)
        <tr>
            <th>{{$data->id}}</th>
            <th>{{$data->username}}</th>
            <th>{{$data->email}}</th>
            <th>{{$data->created_at}}</th>
        </tr>
        @endforeach
    </table>
</body>
</html>