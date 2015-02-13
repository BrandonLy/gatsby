<html>

<head>
    <link href='http://fonts.googleapis.com/css?family=Cutive+Mono|Abril+Fatface' rel='stylesheet' type='text/css'>
    <link rel="icon" href="favicon.ico">
    <?php if($pageTitle=='The Great Gatsby' ) {echo '<link type="text/css" rel="stylesheet" href="assets/css/home.css" />';} else {echo '<link type="text/css" rel="stylesheet" href="assets/css/main.css"/>';}?>
    <title>
        <?php echo $pageTitle; ?>
    </title>
</head>

<body>
    <header>
        <div id="wrapper">
            <div id="nav">
                <li><a href="<?php if($pageTitle == 'The Great Gatsby') {echo '#';} else {echo 'index.php';} ?>">Home</a>
                </li>
                <li><a href="<?php if($pageTitle == 'Jeopardy Video') {echo '#';} else {echo 'jeopardy.php';} ?>">Jeopardy Video</a>
                </li>
                <li><a href="<?php if($pageTitle == 'Content Knowledge') {echo '#';} else {echo 'ck.php';} ?>">Content Knowledge</a>
                </li>
                <li><a href="<?php if($pageTitle == 'Writing Skills') {echo '#';} else {echo 'ws.php';} ?>">Writing Skills</a>
                </li>
                <li><a href="<?php if($pageTitle == 'Use of Resources') {echo '#';} else {echo 'ur.php';} ?>">Use of Resources</a>
                </li>
                <li><a href="<?php if($pageTitle == 'Pro Communication') {echo '#';} else {echo 'pc.php';} ?>">Pro Communication</a>
                </li>
            </div>
        </div>
    </header>
