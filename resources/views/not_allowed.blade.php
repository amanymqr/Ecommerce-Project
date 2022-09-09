
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Allowed</title>
    <style>

        .content{
            align-content:center;
            text-align:center;
            margin-top:120px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .content img{
            width: 200px;
        }
        .content a{
            background-color:#1e9690;
            padding: 10px 20px;
            text-decoration:none;
            color: #ffffff;
            border-radius:6px;

        }
    </style>
</head>
<body>
    <div class="content">
        <img src="{{ asset('adminassets/img/shield.png') }}" alt="">
        <h2>You dont have premission to acsses this page </h2>
        <a href="{{ url('/') }}">Homepage</a>
    </div>

</body>
</html>

