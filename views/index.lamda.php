<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamda</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="navbar bg-base-100">
        <a class="btn btn-ghost text-xl">Lamda-php</a>
    </div>

    <div class="px-5">
        <?php for ($i = 0; $i < count($data); $i++) {
            echo $data[$i];
        } ?>
    </div>


</body>

</html>