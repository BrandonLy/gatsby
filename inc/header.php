<html>

<head>
    <meta charset="utf-8"/>
    <script src="http://use.typekit.net/jdc4qcu.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <title>
        <?php echo $pageTitle; ?>
    </title>
</head>

<body>
    <header>

<!--   Large Navigation Menu    -->

        <div id="wrapper">
            <div id="nav">
                <li><a href="<?php if($pageTitle == 'The Great Gatsby') {echo '#';} else {echo 'index.php';} ?>">Home</a>
                </li>
                <li><a href="<?php if($pageTitle == 'Jeopardy Video') {echo '#';} else {echo 'jeopardy.php';} ?>">Jeopardy</a>
                </li>
                <li><a href="<?php if($pageTitle == 'Chapter 1') {echo '#';} else {echo 'chapter1.php';} ?>">Chapters</a>
                </li>
            </div>
        </div>
    </header>
