<!DOCTYPE html>
<html lang="en">
<?php
include_once('data/data.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio BUCHON Paul</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="./favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="menu">
        <div class="logo goAcc"></div>
        <div class="action">
            <div class="lang">FR</div>
            <div class="theme"> </div>
            <!-- <div class="detail">☰</div> -->
        </div>
    </div>
    <div class="grainy"></div>
    <div class="landingPage">
        <div class="card">
            <div class="cardBackgroundGlow"></div>
            <div class="cardBackground"></div>
            <div class="cardFront" id="foiled">
                <div class="front">
                    <h1 class="name">Paul Buchon</h1>
                    <h1 class="title">Portfolio</h1>
                    <h2 class="subtitle">Bienvenue.
                        Je suis étudiant et alternant breton en dernière année de BUT MMI &
                        un développeur FullStack Junior</h2>
                    <div class="links">
                        <a class="link-item showProj">→ mes projets</a>
                        <a class="link-item showAbout">→ à propos</a>
                    </div>
                    <div class="texture">
                        <img src="./assets/landing/texture.png">
                    </div>
                </div>
                <div class="about">
                    <div class="photo"></div>
                    <div class="aboutContent">
                        <div class="aboutTitle">Paul BUCHON</div>
                        <div class="aboutDesc subtitle">Je suis étudiant développeur Web/Mobile et Développeur Junior PL/SQL, c’est avec ces casquettes que je réalise ce portfolio. Ayant pour objectif de travailler dans de développement Web, ce portfolio est le témoin de mes compétences!</div>
                        <div class="aboutList">
                            <div class="aboutItem">
                                <div class="aboutBadge"></div>
                                <p class="subtitle">France, Bretagne, Saint-Brieuc</p>
                            </div>
                            <div class="aboutItem">
                                <div class="aboutBadge"></div>
                                <p class="subtitle">buchon.paul@gmail.com</p>
                            </div>
                            <div class="aboutItem">
                                <div class="aboutBadge"></div>
                                <a class="subtitle" href="https://github.com/BuchonPaul">https://github.com/BuchonPaul</a>
                            </div>
                            <div class="aboutItem">
                                <div class="aboutBadge"></div>
                                <div class="link"></div>
                                <p class="subtitle">Mon <a href="https://www.linkedin.com/in/paul-buchon-67b520235/">LinkedIn</a> - Mon <a>CV</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="close showAbout">X</div>
                </div>
                <div class="holo"></div>
                <div class="cardReflection"></div>
            </div>
        </div>
    </div>
    <div class="projectPage">
        <div class="projectContainer">
            <div class="projectList">
                <h1>PROJETS</h1>
                <ul>
                    <?php
                    foreach ($projects as $key => $value) {
                        echo ('
                        <li class="projectItem" data-url="' . $value["src"] . '" id="' . $value["id"] . '">
                            <h3 class="link-item">' . $value["title"] . '</h3>
                            <p class="techno">' . $value["year"] . '</p>
                        </li>
                      ');
                    }
                    ?>
                </ul>
            </div>
            <div class="projetctPrev"></div>
        </div>
        <div class="projectDecoration">
            <div>PORTFOLIO</div>
            <div>BUCHON PAUL</div>
        </div>
        <div class="projectYear">2<br>0<br>2<br>4</div>
    </div>
    <div class="ball"></div>
</body>
<script src="./scripts/common.js"></script>
<script src="./scripts/cardManager.js"></script>
<script src="./scripts/pageManager.js"></script>

</html>