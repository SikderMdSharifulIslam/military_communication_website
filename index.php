<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container text-center" style="height:100vh; width:1000px;  position: relative;">
        <form action="enter.php" method="POST" style="position: absolute;top: 35%; left:39%;">
            <p class="text-danger text-center text-uppercase">Military Base</p>
            <input type="text" class="bg-dark text-danger border-danger rounded text-center mb-3" placeholder="****" name="code" required>
            <br>
            <input type="password" class="bg-dark text-danger border-danger rounded text-center mb-3" placeholder="********" name="passcode" required>
            <br>
            <button type="submit" class="bg-dark text-danger border-danger rounded text-center me-2">Enter</button>
            <button type="reset" class="bg-dark text-danger border-danger rounded text-center">Reset</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
