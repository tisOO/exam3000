<?php 
$marks = file_get_contents("marks.json");
if ($marks === false) {
    $marks = [];
} else {
    $marks = json_decode($marks, true);
}
?>

<html>
<head>
<title>Экзаменатор 3000</title>
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
                    <img src="static/marks.jpg"/>
                </div>

                <div class="text-center">
                    <h2 class="title" style="color: white;">Оценки</h2>
                </div>

                <table class="table">
                <thead>
                    <th>#</th>
                    <th>ФИО</th>
                    <th>Оценка</th>
                </thead>
                <tbody>
                    <?php 
                    $idx = 1;
                    foreach ($marks as $name=>$mark) { ?>
                        <tr>
                            <td><?= $idx++ ?></td>
                            <td><?= $name ?> </td>
                            <td><?= $mark ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
                </table>

                <br/>
                <h2><a href="/">Вернуться на экзамен</a>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    </div>
</section>
</body>
</html>