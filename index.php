<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Nurlybek Bekmukhanbet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/c5cb438522.js" crossorigin="anonymous"></script>
</head>
<body class="bg-off-white" data-bs-spy="scroll" data-bs-target="#my-navbar">
    <div class="container-fluid app-container">
        <nav id="my-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Nurlybek Bekmukhanbet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active about-me" aria-current="page" href="#about-me">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link skills" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link experience" href="#experience">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link education" href="#education">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link education" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link social" href="#social">Social</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
            include_once("nur-bek-resume.php");
        ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>