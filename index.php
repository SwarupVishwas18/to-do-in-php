<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="startScript.js"></script>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars" onclick="menuOpen()"></div>

        <a href="#" class="logo"> TODO <i class="fas fa-hourglass-start"></i> </a>

        <nav id="navbar">
            <a href="index.php">home</a>
            <a href="#feature">feature</a>
            <a href="about us.php">about us</a>
            <a href="contact.php">contact</a>
        </nav>

        <a href="join.php" class="btn">join now</a>

    </header>

    <!-- home start -->
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>Organise Your Day With Us</h3>
                <h4> Organized people know what they must do and how to do that. More important, they know the best way how to do what they must do. In such a case they will succeed to accomplish all critical things for their small business. <br>

                    Because of their knowledge to do the right things in the right way, it will ensure them quickly finishing everything they need to do. They will be more productive persons. Because they are more productive persons, they can do more things better than anyone else.
                </h4>
                <a href="signup.php" class="btn1">SIGN UP</a>
            </div>

            <div class="image">
                <img src="img/home-img-1.png" class="main-home-image" alt="">
            </div>

        </div>

    </section>


    <!-- about section starts  -->

    <section class="feature" id="feature">

        <h1 class="heading"> Features </h1>

        <div class="row">

            <div class="image">
                <img src="img/feature-img-2.jpg" alt="">
            </div>

            <div class="content">
                <h3 class="title">how to use the website!!</h3>
                <p>
                    First create the account then add task and when completed check the task, you can also delete the unnecessary tasks. Adn do not forget to use our Multi-Themed Timer..!!
                </p>
                <a href="#feature" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons" id='timeIcon' onmouseout="iconFade(0);" onmouseover="iconHover(0);">
                        <img src="img/feature-icon-1.png" alt="">
                        <h3>manage time</h3>
                    </div>
                    <div class="icons" id='prodIcon' onmouseout="iconFade(1);" onmouseover="iconHover(1);">
                        <img src="img/feature-icon-2.png" alt="">
                        <h3>be productive</h3>
                    </div>
                    <div class="icons" id='goalIcon' onmouseout="iconFade(2);" onmouseover="iconHover(2);">
                        <img src="img/feature-icon-3.png" alt="">
                        <h3>set goals</h3>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- feature section ends -->



    <!-- footer start -->

    <section class="footer">

        <div class="credit"> &copy; <span>GOVERNMENT POLYTECHNIC AWASARI(KHURD)</span> | TYCO</div>

    </section>














































    <!-- js file add -->
    <script type="text/javascript" src="script.js"></script>
</body>

</html>