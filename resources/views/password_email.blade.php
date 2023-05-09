<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    Halo {{ $detail['email'] }}!.. 
    <br/>
    Kode verifikasi anda adalah {{ $detail['password'] }}. Silahkan gunakan kode tersebut sebelum {{ $detail['expired'] }}
</body>
</html>