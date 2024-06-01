<!DOCTYPE html>
<html lang="en">
<?php
include_once('data/data.php');
session_start();
if (!isset($_SESSION["lang"])) {
    $_SESSION["lang"] = 'FR';
}

if (isset($_POST['change_lang'])) {
    if ($_SESSION["lang"] == 'FR') {
        $_SESSION["lang"] = 'EN';
    } else {
        $_SESSION["lang"] = 'FR';
    }
}

$lang = $_SESSION["lang"];
$trans = $translations[$lang];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["lang"] == 'FR' ? 'Portfolio BUCHON Paul' : "BUCHON Paul's Portfolio"; ?></title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="./assets/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="menu">
        <div class="logo goAcc callToAction">
            <svg width="100%" height="100%" viewBox="0 0 181 181" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <path d="M0,180.81l0,-180.81l89.355,0c15.727,0 27.738,0.69 36.032,2.07c11.634,1.775 21.383,5.151 29.246,10.129c7.864,4.978 14.193,11.953 18.986,20.924c4.794,8.97 7.191,18.828 7.191,29.574c-0,18.434 -6.41,34.034 -19.229,46.8c-12.818,12.766 -35.978,19.149 -69.48,19.149l-60.754,0l-0,52.164l-31.347,-0Zm53.619,-155.229l0,-25.581l-53.619,0l0,103.125l53.619,0l0,-0.06l38.967,-0c20.252,-0 34.632,-3.45 43.142,-10.351c8.51,-6.901 12.765,-16.611 12.765,-29.13c0,-9.07 -2.504,-16.833 -7.513,-23.29c-5.009,-6.457 -11.607,-10.72 -19.794,-12.79c-5.278,-1.282 -15.027,-1.923 -29.246,-1.923l-38.321,0Z" style="fill:var(--textcol);fill-rule:nonzero;" />
                <path d="M0,0l0,180.81l89.355,-0c15.727,-0 27.738,-0.69 36.032,-2.071c11.634,-1.774 21.383,-5.15 29.246,-10.129c7.864,-4.978 14.193,-11.952 18.986,-20.923c4.794,-8.971 7.191,-18.829 7.191,-29.574c-0,-18.434 -6.41,-34.034 -19.229,-46.8c-12.818,-12.766 -35.978,-19.149 -69.48,-19.149l-60.754,-0l-0,-52.164l-31.347,-0Zm53.619,155.228l0,25.582l-53.619,-0l0,-103.126l53.619,0l0,0.061l38.967,-0c20.252,-0 34.632,3.45 43.142,10.351c8.51,6.9 12.765,16.61 12.765,29.13c0,9.069 -2.504,16.832 -7.513,23.289c-5.009,6.457 -11.607,10.721 -19.794,12.791c-5.278,1.282 -15.027,1.922 -29.246,1.922l-38.321,0Z" style="fill:var(--textcol);fill-rule:nonzero;" />
            </svg>
        </div>
        <div class="action">
            <div class="lang">
                <form method="post">
                    <button type="submit" name="change_lang" style="background:none;border:none;color:inherit;font:inherit;cursor:pointer;">
                        <?= $_SESSION["lang"] ?>
                    </button>
                </form>
            </div>
            <div class="theme callToAction"> </div>
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
                    <h1 class="name"><?php echo $trans['name']; ?></h1>
                    <h1 class="title"><?php echo $trans['title']; ?></h1>
                    <h2 class="subtitle"><?php echo $trans['subtitle']; ?></h2>
                    <div class="links">
                        <a class="link-item showProj callToAction"><?php echo $trans['projects']; ?></a>
                        <a class="link-item showAbout callToAction"><?php echo $trans['about']; ?></a>
                    </div>
                    <div class="texture">
                        <img src="./assets/landing/texture.png">
                    </div>
                </div>
                <div class="about">
                    <div class="photo">
                        <img src="./assets/landing/about/self.png">
                    </div>
                    <div class="aboutContent">
                        <div class="aboutTitle"><?php echo $trans['aboutTitle']; ?></div>
                        <div class="aboutDesc subtitle"><?php echo $trans['aboutDesc']; ?></div>
                        <div class="aboutList">
                            <div class="aboutItem">
                                <div class="aboutBadge">
                                    <img src="./assets/landing/about/pos.png">
                                </div>
                                <p class="subtitle"><?php echo $trans['location']; ?></p>
                            </div>
                            <div class="aboutItem">
                                <div class="aboutBadge">
                                    <img src="./assets/landing/about/mail.png">
                                </div>
                                <p class="subtitle"><?php echo $trans['email']; ?></p>
                            </div>
                            <div class="aboutItem">
                                <div class="aboutBadge">
                                    <img src="./assets/landing/about/gh.png">
                                </div>
                                <a class="subtitle callToAction" href="<?php echo $trans['github']; ?>"><?php echo $trans['github']; ?></a>
                            </div>
                            <div class="aboutItem">
                                <div class="aboutBadge">
                                    <img src="./assets/landing/about/info.png">
                                </div>
                                <div class="link"></div>
                                <p class="subtitle"><?php echo $trans['linkedin']; ?></p>
                            </div>
                        </div>
                        <div class="close showAbout callToAction"><img src="./assets/cross.svg"></div>
                    </div>
                </div>
                <div class="holo"></div>
                <div class="cardReflection"></div>
            </div>
        </div>
    </div>
    <div class="projectPage">
        <div class="projectContainer">
            <div class="goAcc callToAction"><img src="./assets/cross.svg"></div>
            <div class="projectList">
                <h1><?php echo $trans['project']; ?></h1>
                <ul>
                    <?php
                    foreach ($projects[$_SESSION["lang"]] as $key => $value) {
                        echo ('
                        <li class="projectItem callToAction" data-url="' . $value["src"] . '" id="' . $value["id"] . '">
                            <h3>' . $value["title"] . '</h3>
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