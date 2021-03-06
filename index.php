<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="A website for my experience in Japan for a month studying abroad">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="japan, study abroad, kyoto, miracosta college, california, community college, blog">
    <title>Study Abroad</title>
    <link href="https://fonts.googleapis.com/css?family=Cormorant:400,700i|EB+Garamond:400,600,700|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'php-static/nav-bar.php' ?>

    <!-- Header -->
    <header id="index-header">
        <div id="titleBanner">
            <p id="top-text">Jose Chavez</p>
            <h1>study abroad</h1>
            <p id="bottom-text"><time datetime="2019-06-28">June 28th</time> - <time datetime="2019-07-27">July 27th</time></p>
        </div>

        <div id="imageBanner">
            <div class="wrapper">
                <div class="overlay">
                    <span class="line"></span>
                    <h2>Kyoto, Japan</h2>
                    <span class="line"></span>
                </div>
                <div class="image"></div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main>
        <div class="wrapper">
            <h3>Embarking on a Journey</h3>
            <hr>
            <p>Hello, my name is Jose Chavez. I am a sophmore in MiraCosta College pursuing an Associate's degree in Web Development and Design plus a Bachelor's in Computer Science. For a month, I will be studying at Kyoto, Japan with Citrus College. I was honored to not only be a representative of Miracosta but also for Gilman. Out of all the other countries, I choose to go to Japan. To study, get college credits, and experience the country I most look forward to based on its beauty, culture, music, and language. Japan will be the first country that I have traveled to, excluding Mexico because I was too young to remember, which is very exciting! This website is meant for Gilman, myself, and for anyone else who is interested in studying abroad. </p>
        </div>
    </main>

    <!-- Gilman -->
    <section id="gilman">
        <div class="wrapper">
            <article>
                <h3>Gilman Scholarship</h3>
                <hr>
                <p>Alumnus of the Gilman Scholarship which aided half of my 
                    tuition and also opened new opportunities for my future plus a small
                    community of experienced students. Not everyone is eligible for this 
                    scholarship, but perhaps you are! Come on by to see if you are eligible! You probably are.. 😊</p>
                <a href="gilman/gilman.html" class="link-button">Learn More</a>
            </article>
            <div class="slider" id="homepage">
                <div class="images">
                    <img src="" alt="">
                    <div class="arrows">
                        <span class="button left">
                            <i class="fas fa-angle-left"></i>
                        </span>
                        <span class="button right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Posts -->
    <!--<div id="posts">
        <div class="wrapper">
            <h3>Recent Posts</h4>
            <div class="cards">
                <div class="card">
                    <div class="post-image"></div>
                    <h6><time datetime="">June 29th</time></h6>
                    <h4>I won the Gilman Scholarship?</h4>
                </div>

                <div class="card">
                    <div class="post-image"></div>
                    <h6><time datetime="">June 29th</time></h6>
                    <h4>Arriving in Kyoto</h4> <!-- Need Anchors /->
                </div>
            </div>
            <div class="center">
                <a href="blogs/index.html" class="link-button">Read More</a>
            </div>
        </div>
    </div>-->

    <!-- Student Testimonials -->
    <!--<div id="testimonials">
        <div class="overlay"></div>
        <div class="wrapper">
            <h3>Student Testimonials</h3>

            <div class="test-cards">
                <p>Wait, but I am abroad. 🤔</p>
            </div>

            <div class="center">
                <a href="#" class="link-button">Load More</a>
            </div>
        </div>
    </div>-->

    <!-- Small Banner -->
    <section id="thanks">
        <div class="wrapper">
            <h3>Thanks to:</h3>
            <div class="th-img">
                <img src="images/MiraCosta-College-logo.png" alt="Miracosta Community College Logo">
                <img src="images/Gilman-Top-Producer-Badge.png" alt="Gilman Scholarship Logo">
                <img src="images/Citrus-College-logo.jpg" alt="Citrus Community College Logo">
                <div>
                    <img src="images/multiple-users-silhouette.svg" alt="Three individuals standing close together">
                    <p>You</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('php-static/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/3c327ffdf3.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>