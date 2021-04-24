<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>second page Laravel</title>
</head>
<body>
<tr>
<td>{{ $users->ID }}</td>
<td>{{ $users->NAME}}</td>
<td>{{ $users->USER_NAME }}</td>
<td>{{ $users->PASSWORD}}</td>
<td>{{ $users->EMAIL}}</td>
</tr>

</body>



</html>