<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
</head>

<style>
    html, body {
        width: 100%;
        height: 100%;
        font-family: 'Ubuntu Mono', monospace;
    }

    .costum-center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        flex-direction: column;
    }
</style>

<body>
    <div class="costum-center">
        <h3>Email berhasil dikirim ke </h3>
        <h2>{{ $data['email'] }}</h2>
        <h3>Silahkan periksa email untuk mengetahui password baru anda</h3>
    </div>
</body>
</html>