<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu 2</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="home.css" rel="stylesheet" />
</head>

<body>
    <button class="burger" onclick="toggleMenu()"></button>
    <div class="background"></div>
    <div class="menu">
        <nav>
            <a style="animation-delay: 0.2s">Home</a>
            <a style="animation-delay: 0.3s">Portfolio</a>
            <a style="animation-delay: 0.4s">Services</a>
            <a style="animation-delay: 0.5s">Help</a>
        </nav>
    </div>
    <script type="text/javascript">
        const toggleMenu = () => document.body.classList.toggle("open");
    </script>

    <div class="notification">
        <p> Welcome </p>
        <span class="notification__progress"></span>
    </div>
</body>

</html>