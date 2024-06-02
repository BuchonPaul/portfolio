<!DOCTYPE html>
<html lang="<?php echo $_SESSION["lang"] == 'FR' ? 'fr' : 'en'; ?>">
<?php
include_once('data/data.php');
session_start();
if (!isset($_SESSION["lang"])) {
    $_SESSION["lang"] = 'FR';
}
$det = [];

if (isset($_POST['change_lang'])) {
    if ($_SESSION["lang"] == 'FR') {
        $_SESSION["lang"] = 'EN';
    } else {
        $_SESSION["lang"] = 'FR';
    }
}

if (isset($_GET['id'])) {
    foreach ($projects[$_SESSION["lang"]] as $key => $value) {
        if ($value['id'] == $_GET['id']) {
            $det = $value;
        }
    }
}
$translations = [
    'FR' => [
        'year' => 'année',
        'type' => 'type',
        'technologies' => 'Technologies',
        'links' => 'Liens',
        'view_project' => 'Voir le Projet',
        'prev_project' => 'Projet Précédent',
        'next_project' => 'Projet Suivant'
    ],
    'EN' => [
        'year' => 'year',
        'type' => 'type',
        'technologies' => 'Technologies',
        'links' => 'Links',
        'view_project' => 'View Project',
        'prev_project' => 'Previous Project',
        'next_project' => 'Next Project'
    ]
];

$lang = $_SESSION["lang"];
$trans = $translations[$lang];
?>

<head>
    <meta name="description" content="Bienvenue sur mon portfolio, je suis Paul BUCHON, un étudiant MMI de troisième année. Ce portfolio regroupe mes créations">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="author" content="BUCHON Paul">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION["lang"] == 'FR' ? 'Portfolio BUCHON Paul' : "BUCHON Paul's Portfolio"; ?></title>
    <link rel="icon" href="./favicon.ico" />
    <link rel="stylesheet" href="style/project.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div id="projectLenght" style="display:none"><?= count($projects) ?></div>
    <?php
    echo ('<style>
    :root{
       --darktitlecol:  ' . $det["darktitlecol"] . ';
       --lighttitlecol: ' . $det["lighttitlecol"] . ';
       --darkshapecol:  ' . $det["darkshapecol"] . ';
       --lightshapecol: ' . $det["lightshapecol"] . ';
    }
    </style>')
    ?>
    <div class="menu appear">
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
            <div class="theme callToAction"></div>
            <!-- <div class="detail">☰</div> -->
        </div>
    </div>
    <div class="projectContainer appear">
        <!-- <div class="grainy appear"></div> -->
        <div class="projectBackground">
            <svg x mlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                <linearGradient id="PSgrad_0" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                    <stop offset="0%" stop-color="var(--darkshapecol)" stop-opacity="1" />
                    <stop offset="100%" stop-color="var(--darkshapecol)" stop-opacity="1" />
                </linearGradient>
                <path fill="url(#PSgrad_0)">
                    <animate repeatCount="indefinite" attributeName="d" dur="15s" values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z	" />
                </path>
            </svg>
        </div>
        <div class="projectContent">
            <?php
            echo (
                "<div class='topImage' style='background:url(" . $det['src'] . ") center/cover no-repeat'></div>"
            )
            ?>
            <div class="projectInfo">
                <div class="title">
                    <h1 id="titl"><?= $det['title'] ?></h1>
                    <img alt="Croix de retour en arrière" class="goAcc callToAction" src="./assets/cross.svg">
                </div>
                <div class="detailInfo">
                    <div class="detailGrid">
                        <h3 class="row1"><?= $trans['year'] ?></h3>
                        <div id="year" class="content row1">
                            <?= $det['year'] ?>
                        </div>
                        <h3 class="row2"><?= $trans['type'] ?></h3>
                        <div id="type" class="content row2">
                            <?= $det['type'] ?>
                        </div>
                        <h3 class="row3"><?= $trans['technologies'] ?></h3>
                        <div id="tech" class="content row3">
                            <?= $det['tech'] ?>
                        </div>
                        <?php
                        if (isset($det['link'])) {
                            echo ('
                <h3 class="row4">' . $trans['links'] . '</h3>
                
                <div class="content row4">
                    <a id="link" class="callToAction" href="' . $det['link'] . '">' . $trans['view_project'] . '</a>
                </div>');
                        } ?>
                    </div>
                    <div class="description" id="desc">
                        <?= $det['desc'] ?>
                    </div>
                </div>
                <div class="detailContainer">
                    <?php
                    if (isset($det['detail'])) {
                        foreach ($det['detail'] as $key => $value) {
                            if (isset($value["title"])) {
                                echo ('<div class="paraph"><h3 class="detTitle">' . $value['title'] . '</h3>');
                            }
                            if (isset($value["src"])) {
                                echo ('<div id="image' . $key . '" class="detImage" style="background: url(' . $value['src'] . ') center/cover no-repeat"></div>');
                            }
                            if (isset($value["title"])) {
                                echo ('<div class="detLegende">' . $value['leg'] . '</div></div>');
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="projectFooter">
                <div class="callToAction" id="prec"><?= $trans['prev_project'] ?></div>
                <div class="callToAction" id="next"><?= $trans['next_project'] ?></div>
            </div>
        </div>
        <div class="ball"></div>

    </div>
</body>
<script src="./scripts/common.js"></script>
<script src="./scripts/projectManager.js"></script>

</html>