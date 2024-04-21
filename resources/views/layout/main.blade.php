<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield("css")
    <link rel="stylesheet" href="css/mainStyle.css">
    <title>Lopa Farm</title>
</head>
<body>
    <div class="content">
        <div class="title">
            @yield("title")
        </div>
        @yield("content")
    </div>
</body>
</html>