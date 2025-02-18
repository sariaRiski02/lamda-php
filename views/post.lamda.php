<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Post</title>
</head>

<body>

    <form action="/test" method="post">
        <input type="text" name="test">
        <button type="submit">Test Submit</button>
    </form>

    <form action="/file" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <button type="submit">upload test</button>
    </form>

</body>

</html>