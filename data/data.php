<?php
$projects = [
    [
        "id" => "0",
        "title" => "WindowsXP React/AntVG6",
        "year" => "2023",
        "type" => "Développement FullStack / Design UX-UI",
        "tech" => "React / AntvJS / TipTap / Websocket",
        "src" => "./assets/project/winxp/shot.jpg",
        "link" => "https://winxpreact.vercel.app/",
        "desc" => "Dans le cadre de la réalisation de mon premier gros projet React, j’ai développé une interface reprenant celle de Windows XP. Le projet propose les “applications” : Bloc Note, Word, Internet Explorer et la Corbeille. <br>L’idée de ce projet est de proposer une interface de travail sur navigateur, couplée à une IA générative. Le projet permet un système de “multi-task” et de gestion de bureau. <br>L’architecture de cette interface est développée avec React. Le système de bureau est géré avec la bibliothèque de gestion de graph AntVG6. L’éditeur de texte riche, quant à lui, est développé grâce à TipTap.<br> En ce qui concerne Internet Explorer, les recherches sont envoyées à un serveur Express JS avec WebSockets. Ce serveur traite les requêtes et renvoie en direct les réponses d’un modèle de langage hébergé sur le serveur.",
        "darktitlecol" => "#ded3c7",
        "darkshapecol" => "#3ddd70",
        "lighttitlecol" => "#3ddd70",
        "lightshapecol" => "#ded3c7"
    ],
    [
        "id" => "1",
        "title" => "Koust",
        "year" => "2022 - 2024",
        "type" => "Développement FullStack / Design UX-UI",
        "tech" => "Oracle APEX / Angular/ Ionic / PLSQL",
        "src" => "./assets/project/koust/shot.jpg",
        "link" => "https://koust.net/",
        "desc" => "Entre Septembre 2022 et Août 2024, j’ai été développeur en alternance chez Koust, une entreprise qui édite une application Web et Mobile d’aide à la gestion de restaurant. Pendant mon alternance, j’ai participé au développement de l’application Web sur Oracle Apex, un environnement de développement orienté autour d’une base de données Oracle. Apex permet de développer rapidement des interfaces de consultation et d'altération des données à partir de requêtes SQL.<br>En parallèle du développement de l’interface web, j’ai participé au développement de l’application Mobile. Cette application Angular avec une interface Ionic est connectée à la Base de Données via l’API REST d’APEX. Cette application permet de faciliter l’utilisation de Koust dans les tâches manuelles d’un restaurateur (Inventaires, recettes …).",
        "darktitlecol" => "#6e6ff0",
        "lighttitlecol" => "#0002d5",
        "darkshapecol" => "#3e2efe9e",
        "lightshapecol" => "#0074de5e"
    ],
    [
        "id" => "2",
        "darktitlecol" => "#f9bd0a",
        "lighttitlecol" => "#0264bc ",
        "darkshapecol" => "#004b8e",
        "lightshapecol" => "#ffb40340",
        "title" => "Jeu de Dé Three JS",
        "year" => "2023",
        "type" => "Développement BackEnd",
        "tech" => "Three Js / Cannon ES / Blender",
        "link" => "https://3dice-paul-poloches-projects.vercel.app/",
        "desc" => "En Mars 2023, afin de me familiariser avec des modules JavaScript et à l’utilisation d’un moteur 3D sur navigateur, j’ai réalisé un jeu de dé en 3D. Le projet fonctionne avec Three Js pour le moteur de rendu et avec Cannon Es en tant que moteur physique. J’ai modélisé le cube, la porte et le panneau sur Blender.<br>L’ambiance de ce projet est inspirée du jeu Portal, c’est pourquoi j’ai ajouté deux portails orange et bleu dans la scène, où chacun des portails montre ce qu’il se passe devant l’autre. Pour cela, j’ai ajouté une caméra devant chaque portail qui s’oriente en fonction de la direction de la caméra utilisateur sur l’autre portail.",
        "src" => "./assets/project/portal/portalshot2.jpg",
    ],
    [
        "id" => "3",
        "darktitlecol" => "#6541ea",
        "lighttitlecol" => "#6d6d6d ",
        "darkshapecol" => "#4e4e4e",
        "lightshapecol" => "#6743ea5c",
        "title" => "Design Expérience Google",
        "year" => "2023",
        "type" => "Design d’expérience / Montage Vidéo / Prototypage",
        "tech" => "DaVinci Resolve / Figma / Notion",
        "desc" => "En Décembre 2023, avec une équipe de 4 personnes, j’ai réalisé un exercice de design d’expérience en collaboration avec 2 salariés de Google. Ce projet mené sur 4 jours en méthode Agile, nous missionnait de réaliser un tour d’horizon du mail, des messageries et de leurs usages afin d’imaginer l’e-mail de demain.<br>Nous avons effectué une étude documentaire et une enquête quantitative auprès des étudiants.<br>À partir des résultats, nous avons déterminé un concept de mail s’apparentant plus aux systèmes de messageries instantanées. Pour accompagner ce concept, j’ai réalisé une courte vidéo destinée aux réseaux sociaux.",
        "src" => "./assets/project/google/shot.jpg",
        "link" => "https://www.canva.com/design/DAF28sJmeXo/qgDIepSTMwyMB3wcElfgNA/edit?utm_content=DAF28sJmeXo&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
    ],
    [
        "id" => "4",
        "darktitlecol" => "#fff",
        "lighttitlecol" => "#7c00c1 ",
        "darkshapecol" => "#712195",
        "lightshapecol" => "#ff01c05c",
        "title" => "Portfolio 2024",
        "year" => "2024",
        "type" => "Développement FullStack / Design UX-UI",
        "tech" => "HTML / CSS / JS",
        "desc" => "Projet sur lequel vous vous trouvez actuellement, mon portfolio est celui que je réalise à l’issue de mes 3 ans d’études en BUT MMI. Il synthétise mes meilleurs projets réalisés en cours et en dehors.<br>Réalisé uniquement avec des technologies Web de base, ce projet est un témoin de mes compétences en développement à l’instant où je l’ai réalisé.<br>Ce portfolio est mon deuxième, le premier avait été réalisé en 2021 mais ne correspondait plus à ce que je voulais montrer.",
        "src" => "./assets/project/portfolio/shot.png"
    ],
    // [
    //     "id" => "5",
    //     "darktitlecol" => "#fff",
    //     "lighttitlecol" => "#7c00c1 ",
    //     "darkshapecol" => "#712195",
    //     "lightshapecol" => "#ff01c05c",
    //     "title" => "Créations graphiques",
    //     "year" => "2021 - 2024",
    //     "type" => "Création Graphique",
    //     "tech" => "Affinity / Blender / Da Vinci Resolve",
    //     "desc" => "Durant ma formation BUT MMI (Métiers du Multimédia et de l’Internet) entre 2021 et 2024, j’ai réalisé un certain nombre de productions assistées par ordinateur. De la création graphique, au montage vidéo en passant par la 3D, voici une sélection de mes travaux.",
    //     "src" => "./assets/project/winxp/index.png",
    //     "detail" => [
    //         [
    //             "title" => "Projet",
    //             "src" => "./assets/project/portal/index.png",
    //             "leg" => "Petite description de l'image sans plus de détail"
    //         ]
    //     ]
    // ]
];
