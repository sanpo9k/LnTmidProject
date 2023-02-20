<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <a class = "btn btn-primary" href="/karyawan/create"> Input karyawan baru</a>
    <table class="table table-striped">`
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>No. Telp</th>
        <th>Update</th>
    </tr>
    @foreach ($karyawan as $w )
    <tr>
        <td>{{$w->id}}</td>
        <td>{{$w->Nama}}</td>
        <td>{{$w->Umur}}</td>
        <td>{{$w->Alamat}}</td>
        <td>{{$w->Nomor_telephone}}</td>
        <td>
            <a class="btn btn-success" href="/karyawan/{{$w->id}}/edit">Edit</a>
            <form action="/karyawan/{{$w->id}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
    </div>

</table> 
</body>
</html>
