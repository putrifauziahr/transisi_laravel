<html>

<head>
    <title>Data Company</title>
</head>

<body>
    <a href="/createCompany">Add Company</a>

    <table border="1">
        <thead>
            <th>Nama</th>
            <th>Email</th>
            <th>Website</th>
            <th>Logo</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach($company as $c)
            <td>{{$c->nama}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->website}}</td>
            <td>{{$c->logo}}</td>
            <td><a href="">Edit</a></td>
            @endforeach
        </tbody>
    </table>

</body>

</html>