<?php 

if (isset($_POST['name'])) {
    $mark = rand(7, 10);

    $result = @file_get_contents("marks.json");
    if ($result === false) {
        $result = [];
    } else {
        $result = json_decode($result, true);
    }

    $result[$_POST['name']] = $mark;

    file_put_contents("marks.json", json_encode($result));
}

?>

<html>
<head>
<titleЭкзаменатор 3000></title>
<link rel="stylesheet" href="static/bootstrap.min.css"/>
    <style>
        body {
            background-color: black;
            color: white;
        }
        img {
            max-width: 100%;
        }
    </style>
</head>
<body>
<section id="sign">
    <div class="container">
        <div class="h-100 row align-items-center">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">

                <div class="text-center">
                    <h1 class="title" style="color: white;">Экзаменатор3000</h1>
                </div>

                <div class="js-process">
                    <img src="static/mark.jpg"/>
                </div>

                <div class="js-mark" >
                        <h2 class="title" style="color: white;">Отличная работа, <?= $_POST['name'] ?>. </h2>
                        <h2 class="title" style="color: white;">Ваша оценка - <?= $mark ?> . </h2>
                </div>

                <br/>
                <h2><a href="/">Следующий!</a>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    </div>
</section>
</body>
</html>