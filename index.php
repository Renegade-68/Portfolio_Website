<?php 
echo "";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- This is the frontpage -->
        <title>Home</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
        <!-- Styling -->
        <link rel="stylesheet" href="./assets/css/style.css">

        <!-- JavaScript -->
        <script src="./assets/includes/JS/main.js" defer></script>
    </head>

    <body>
        
        <div class="mainContainer">

            <!-- This is the header of the mainpage -->
            <div class="index_header">
                <h1>[placeholder]</h1>
            </div>

            <!-- This is the navigation for all pages -->
            <div class="nav">
                <div class="navBtns">
                    <a href="#" class="navBtn green">About Me<i class="fa-solid fa-caret-down caret"></i></a>
                    <a href="#" class="navBtn red">Projects<i class="fa-solid fa-caret-down caret"></i></a>
                    <a href="#" class="navBtn yellow">Study<i class="fa-solid fa-caret-down caret"></i></a>
                    <a href="#" class="navBtn blue">Contact Me<i class="fa-solid fa-caret-down caret"></i></a>
                </div>
            </div>

            <!-- The About Me section of the page! -->
            <div class="aboutmeContainer">

                <div class="aboutmeTextContainer">
                    <h1>About Me</h1> <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil assumenda quidem sint dolore nobis. Laborum obcaecati, repudiandae exercitationem dolorum qui ut quo quas temporibus suscipit quos cum repellendus inventore modi, unde voluptates maxime perspiciatis corporis mollitia ab ipsum iste rerum impedit! Impedit, labore. Blanditiis, ab quidem mollitia esse officiis corrupti molestiae, quam dolorem cumque doloribus ducimus eveniet quia debitis magni harum iusto! Harum vel, ab sequi reiciendis natus et voluptas dolorum temporibus est praesentium debitis ad quos mollitia odit voluptatem aliquam? Consectetur sunt quam illum quis rerum repellat, eum saepe aperiam. Similique laudantium, recusandae voluptas necessitatibus dolorum rem ut reprehenderit.</p>
                </div>
                
                <div class="aboutmePhoto">
                    <img src="./assets/img/me.png" alt="me.png">
                </div>

            </div>

            <!-- The Projects section of the page! -->
            <div class="projectsContainer">

                <div class="projectTextContainer">
                    <h1>Projects</h1> <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod fugit ab vel voluptatem voluptates, reiciendis ullam ea, obcaecati optio dicta illum deleniti sint assumenda atque fuga. Minus atque sunt vel aliquam nostrum quisquam veniam placeat consequuntur ea voluptates? Quaerat suscipit odit eveniet repellendus provident nobis optio eius est iure porro.</p>
                </div>

                <div class="projectBlockContainer">

                    <div class="projectBlock">
                        <h2>Project Title</h2>
                        <h3>Year</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis deleniti nam, consequatur omnis perspiciatis!</p>
                        <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="projectBlock">
                        <h2>Project Title</h2>
                        <h3>Year</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis deleniti nam, consequatur omnis perspiciatis!</p>
                        <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="projectBlock">
                        <h2>Project Title</h2>
                        <h3>Year</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis deleniti nam, consequatur omnis perspiciatis!</p>
                        <a href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>

                    </div>

                </div>

            </div>

        </div>

    </body>

</html>