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
<form action='/karyawan/{{$karyawan->id}}'method="POST">
    @method('put')
    @csrf
    <input type="text" name="Nama" placeholder="Nama" value="{{$karyawan->Nama}}"><br>
    <input type="text" name="Umur"placeholder="Umur" value="{{$karyawan->Umur}}"><br>
    <input type="text" name="Alamat"placeholder="Alamat" value="{{$karyawan->Alamat}}"><br>
    <input type="text" name="Nomor_telephone"placeholder="No. Telp" value="{{$karyawan->Nomor_telephone}}"><br>
    <input type="submit" name="submit"placeholder="Update"><br>
    
</form>
</body>
</html>