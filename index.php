<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Strona na której dzieje się cos"/>
    <meta name="author" content="Firma/ Imię nazwisko"/>
    <meta name="keywords" content="słowo, kluczowe, jakieś"/>

    <meta name="referrer" content="origin"/>
    <meta name="robots" content="index, follow"/>

    <meta property="og:title" content="Tytuł strony"/>
    <meta property="og:locale" content="pl_PL"/>
    <meta property="og:url" content="https://www.domena.pl"/>
    <meta property="og:image" content="https://www.domena.pl/img/logo.svg"/>
    <meta property="og:description" content="Strona na której dzieje się cos"/>

    <link rel="icon" sizes="any" type="image/svg+xml" href="https://www.domena.pl/img/logo.svg">
    <link rel="icon" sizes="any" type="any" href="https://www.domena.pl/img/logo.png">
    <link rel="shortcut icon" type="image/svg+xml" href="https://www.domena.pl/img/logo.svg">

    <link rel="stylesheet" href="css/main.css">

    <script src="https://kit.fontawesome.com/36f5c70ddf.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Tytuł strony</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/scroll.js"></script>
</head>
<body>

  <?php include "navbar.html" ?>

    <div class="header" id="header">
        <div class="welcome-text">
            <h1>Hello!</h1>
            <h1>Nice to see you!</h1>
        </div>
        <img src="img/header.png" alt="main image"/>
    </div>

    <div class="description" id="description">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </p>
    </div>

    <div class="side-by-side-section" id="side-by-side-section">
        <div class="left-box">
            <img src="img/myimage.jpg" alt="zdjecie przedstawiające coś tam"/>
        </div>
        <div class="right-box">
            <h2>Heading</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </p>
        </div>
    </div>

    <div class="images">
        <h2>Heading 2</h2>

        <div class="item"><img src="img/img1.png" alt="image 1"/></div>
        <div class="item"><img src="img/img2.png" alt="image 2"/></div>
        <div class="item"><img src="img/img3.png" alt="image 3"/></div>
        <div class="item"><img src="img/img4.png" alt="image 4"/></div>
        <div class="item"><img src="img/img5.png" alt="image 5"/></div>
        <span class="stretch"></span>
    </div>

    <div class="my-form">
        <h2>Heading 3</h2>

        <form action="upload.php" method="post">
            <input type="text" id="name" name="name" placeholder="Imię" >

            <input type="email" id="email" name="email" placeholder="Mail" required>

            <input type="text" id="phone" name="phone" placeholder="Telefon" required>

            <select id="country" name="country" >
                <option disabled selected value>Select Value</option>
                <option value="country1">Country 1</option>
                <option value="country2">Country 1</option>
                <option value="country3">Country 1</option>
                <option value="country4">Country 1</option>
            </select>
            <br>
            <input type="checkbox" id="regulations" name="regulations" required>
            <label for="regulations">I accept the privacy policy</label>

            <input type="submit" value="Send">
        </form>
    </div>

    <div class="footer">
        <span>© 2023 Copyright David J</span>
    </div>

</body>
</html>
