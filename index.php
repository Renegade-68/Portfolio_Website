<?php 
include ("./assets/includes/php/functions.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $functions = new Functions();

    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $msg = $_POST['msg'] ?? '';

    $result = $functions->addUserToContact($fname, $lname, $email, $phone, $msg);
}
?>

<!DOCTYPE html>
<html lang="nl">

    <head>
        <!-- This is the homepage -->
        <title>Home</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Geist Mono Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&display=swap" rel="stylesheet">

        <!-- Fontawesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

        <!-- Reset CSS -->
        <link rel="stylesheet" href="./assets/css/reset.css">

        <!-- Styling -->
        <link rel="stylesheet" href="./assets/css/style.css">

        <!-- JavaScript -->
        <script src="./assets/includes/JS/main.js" defer></script>
    </head>

    <body>
        
        <div class="mainContainer">

            <video id="background-video" autoplay loop muted>
                <source src="./assets/vid/background-vid.mp4" type="video/mp4">
                <!-- Your browser does not support the video tag. -->
            </video>

            <!-- This is the header of the mainpage -->
            <div class="index_header">
                <h1 id="typing-animation">
                    <span id="typing-text"></span><span id="typing-caret"></span>
                </h1>
            </div>

            <!-- This is the navigation for all pages -->
            <div class="nav">
                <div class="navBtns">
                    <a class="about" href="#" style="background-color: #3A5C43"><p><i class="fa-solid fa-address-card"></i> Over mij</p><i class="fa-solid fa-caret-down caret"></i></a>
                    <a class="projects" href="#" style="background-color: #9C4035"><p><i class="fa-solid fa-diagram-project"></i> Projecten</p><i class="fa-solid fa-caret-down caret"></i></a>
                    <a class="study" href="#" style="background-color: #C88630"><p><i class="fa-solid fa-graduation-cap"></i> Loopbaan</p><i class="fa-solid fa-caret-down caret"></i></a>
                    <a class="contact" href="#" style="background-color: #385D65"><p><i class="fa-solid fa-comment"></i> Contact</p><i class="fa-solid fa-caret-down caret"></i></a>
                </div>
            </div>

            <!-- The About section of the page! -->
            <section id="aboutmeContainer">

                <div class="aboutmeContainer">

                    <div class="aboutmeTextContainer">
                        <h1>Over mij <i class="fa-solid fa-address-card"></i></h1> <br>
                        <p>
                            Welkom! Ik zal mezelf even voorstellen :) <br>
                            Hallo mijn naam is Reno Zanders, ik ben 22 jaar en woon in Heerlen. <br>
                            Ik zit op dit moment in het laatste jaar van mijn MBO 4 opleiding. <br>
                            Mijn opleiding die ik volg is Software Developer met het oog op Engineering in de toekomst. <br>
                            Ik ga dit jaar afstuderen en daarom bestaat deze website. <br>
                            Zo kunt u in een keer zien wat ik allemaal heb bereikt tijdens mijn studie. <br>
                            Voel je vrij om door mijn Projecten en Loopbaan heen te klikken. <br>
                            En als er vragen zijn kunt u altijd een berichtje achterlaten bij contact.
                        </p>
                    </div>

                    <div class="aboutmePhoto">
                        <img src="./assets/img/me.png" alt="me.png">
                    </div>

                </div>

            </section>

            <!-- The Projects section of the page! -->
            <section id="projectsContainer">

                <div class="projectsContainer">

                    <div class="projectTextContainer">
                        <a href="./pages/projects.php"><h1>Projecten <i class="fa-solid fa-diagram-project"></i></h1></a> <br>
                        <p>
                            Door mijn studie heen heb ik aardig wat projecten gehad en uitgewerkt. <br>
                            Er is hier van alles te vinden: websites, applicaties, cybersecurity en fysieke producten. <br>
                            Elk project heeft documentatie, code en linkjes bijgevoegd zodat u een goed idee ervan krijgt. <br>
                            Daarnaast staat ook bij elk project de <b>Kerntaken</b> die zijn afgevinkt. <br>
                            Rechts heb ik mijn beste projecten voor u bij elkaar gezet! <br>
                            U kunt ook op de titel klikken om alle projecten te zien :)
                        </p>
                    </div>

                    <div class="projectBlockContainer">

                        <div class="projectBlock">
                            <h2>Portfolio Site</h2>
                            <h3>2024-2025</h3>
                            <p>
                                Dit project is mijn portfolio website voor mijn examen.
                                De website waar u zich nu op bevind!
                                Hier staan al mijn projecten bij elkaar.
                            </p>
                            <a href="./pages/projects/portfolio.php">Meer info <i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <div class="projectBlock">
                            <h2>EAFC25 Toernooi</h2>
                            <h3>2024</h3>
                            <p>
                                Dit was een schoolproject voor VistaCollege.
                                Bij de kerstviering werd een toernooi gehouden van EAFC25.
                                Daar heb ik gewerkt aan een website die het toernooi bijhield.
                            </p>
                            <a href="./pages/projects/eafc25.php">Meer info <i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <div class="projectBlock">
                            <h2>I/O Tester</h2>
                            <h3>2024</h3>
                            <p>
                                Dit project heb ik voor mijn 2de stageplaats gedaan.
                                SAC-Nederlands. Ik heb een product gebouwd dat hun zelf gemaakte I/O Controllers kan uitlezen en testen.
                            </p>
                            <a href="./pages/projects/iotester.php">Meer info <i class="fa-solid fa-arrow-right"></i></a>

                        </div>

                    </div>

                </div>

            </section>

            <!-- The Study section of the page! -->
            <section id="studyContainer">

                <div class="studyContainer">

                    <div class="studyTextContainer">
                        <a href="./pages/study.php"><h1>Loopbaan <i class="fa-solid fa-graduation-cap"></i></h1></a> <br>
                        <p>
                            Op deze site is ook mijn loopbaan te bekijken. <br>
                            Hier laat ik zien welke studies ik gedaan heb en welke stages ik heb gelopen. <br>
                            Ook de projecten die ik daar heb gedaan en welke diploma's ik al heb gehaald. <br>
                            Daarnaast zet ik ook nog even mijn werkervaring neer. <br>
                            Ik heb rechts de belangrijkste bij elkaar gezet! <br>
                            U kunt ook op de titel klikken om alle projecten te zien :)
                        </p>
                    </div>

                    <div class="studyBlockContainer">

                        <div class="studyBlock">
                            <h2>SAC-Nederland</h2>
                            <h3>2024</h3>
                            <p>Ik heb bij SAC stagegelopen. Hier heb ik de I/O Tester gemaakt en hoop over Engineering geleerd.</p>
                        </div>

                        <div class="studyBlock">
                            <h2>Have a Byte</h2>
                            <h3>2023-2024</h3>
                            <p>Ik heb bij Have a Byte stagegelopen. Ik heb gewerkt aan een leden systeem project voor hun website en veel geleerd over PHP en Object Oriented Programming.</p>
                        </div>

                        <div class="studyBlock">
                            <h2>Software Development</h2>
                            <h3>2021-2025</h3>
                            <p>De studie op het VistaCollege die ik dit jaar ga afronden. Ik heb tijdens deze opleiding 2 stages gelopen en verschillende project gemaakt.</p>
                        </div>

                    </div>

                </div>

            </section>

            <!-- The Contact section of the page! -->
            <section id="contactContainer">

                <div class="contactContainer">

                    <div class="contactTextContainer">

                        <div class="contactText">
                            <h1>Contact <i class="fa-solid fa-comment"></i></h1><br>
                            <p>
                                Nu heeft u van alles gezien over mij, mijn loopbaan en projecten. <br>
                                Ik ben natuurlijk na mijn studie opzoek naar werk en/of opdrachten. <br>
                                En ben altijd bereid om vragen te beantwoorden. <br>
                                Daarvoor ben ik altijd bereikbaar op +31 06-19268306 of u kunt mij mailen op reno.zanders@outlook.com. <br>
                                Natuurlijk kunt u ook rechts een berichtje achterlaten! <br>
                                Die zie ik dan vlug langskomen.
                            </p>
                        </div>

                    </div>

                    <div class="contactFormContainer">

                        <div class="formText">
                            <h1>Stuur een berichtje hier!</h1><br>
                        </div>

                        <form method="post">

                            <div class="formBox">
                                <div class="formPart">
                                    <label for="fname"><i class="fa-solid fa-user" style="color: #385D65" ></i> Voornaam:</label> <br>
                                        <input type="text" id="fname" name="fname" placeholder="John"> <br> <br>
                                </div>
                                <div class="formPart">
                                    <label for="fname"><i class="fa-solid fa-user" style="color: #385D65" ></i> Achternaam:</label> <br>
                                        <input type="text" id="lname" name="lname" placeholder="Doe"> <br> <br>
                                </div>
                            </div>

                            <div class="formBox">
                                <div class="formPart">
                                    <label for="email"><i class="fa-solid fa-envelope" style="color: #385D65" ></i> Email:</label> <br>
                                        <input type="text" id="email" name="email" placeholder="john-doe@mail.nl"> <br> <br>
                                </div>
                                <div class="formPart">
                                    <label for="phone"><i class="fa-solid fa-phone" style="color: #385D65" ></i> Telefoonnummer:</label> <br>
                                        <input type="text" id="phone" name="phone" placeholder="06-12345678"> <br> <br>
                                </div>
                            </div>

                            <div class="formBox">
                                <div class="formPart">
                                    <label for="msg"><i class="fa-solid fa-comment" style="color: #385D65" ></i> Bericht:</label> <br>
                                        <textarea name="msg" id="msg" placeholder="Bericht..."></textarea> <br> <br>
                                </div>
                            </div>

                            <div class="formBox">
                                <div class="formSend">
                                    <button type="submit">Versturen <i style="background-color: inherit;" class="fa-solid fa-paper-plane"></i></button>
                                </div>
                            </div>
                        
                        </form>

                    </div>

                </div>

            </section>

            <div class="index_footer">

                <div class="footer_parts">
                    <h2>Navigation</h2>
                    <a class="home" href=""><p style="color: white"><i class="fa-solid fa-house"></i> Home</p></a>
                    <a class="about" href=""><p style="color: #3A5C43"><i class="fa-solid fa-address-card"></i> About</p></a>
                    <a class="projects" href=""><p style="color: #9C4035"><i class="fa-solid fa-diagram-project"></i> Projects</p></a>
                    <a class="study" href=""><p style="color: #C88630"><i class="fa-solid fa-graduation-cap"></i> Study</p></a>
                    <a class="contact" href=""><p style="color: #385D65"><i class="fa-solid fa-comment"></i> Contact</p></a>
                </div>

                <div class="footer_parts">
                    <h2>Socials</h2>
                    <a href="https://nl.linkedin.com/in/reno-zanders?original_referer=https%3A%2F%2Fwww.google.com%2F" target="_blank"><p style="color: #3A5C43"><i class="fa-brands fa-linkedin"></i> LinkedIn</p></a>
                    <a href="https://github.com/Renegade-68" target="_blank"><p style="color: #9C4035"><i class="fa-brands fa-github"></i> GitHub</p></a>
                    <a href="https://www.instagram.com/reno_zanders_/" target="_blank"><p style="color: #C88630"><i class="fa-brands fa-instagram"></i> Instagram</p></a>
                    <a href="https://www.reddit.com/user/Rummy03/" target="_blank"><p style="color: #385D65"><i class="fa-brands fa-reddit"></i> Reddit</p></a>
                </div>

                <div class="footer_parts">
                    <h2>Contactinfo</h2>
                    <p style="color: #3A5C43"><i class="fa-brands fa-discord"></i> @rummy03</p>
                    <p style="color: #9C4035"><i class="fa-solid fa-phone"></i> +31 06-19268306</p>
                    <p style="color: #C88630"><i class="fa-solid fa-envelope"></i> reno.zanders@outlook.com</p>
                </div>

            </div>

        </div>

    </body>

</html>