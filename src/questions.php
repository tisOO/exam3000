<?php 

function load_questions()
{
    $str = file_get_contents('questions.txt');
    return explode("\n", $str);
}


if (isset($_POST['name'])) {
    $name = mb_strtolower($_POST['name']);

    if (strpos($name, "цыганова") !== false) {
        $questionNumbers = [4, 7];
    } elseif (strpos($name, "исаков") !== false) {
        $questionNumbers = [30, 32];
    } elseif (strpos($name, "романов") !== false) {
        $questionNumbers = [5, 14];
    } elseif (strpos($name, "ефимова") !== false) {
        $questionNumbers = [22, 26];
    } elseif (strpos($name, "давыдова") !== false) {
        $questionNumbers = [10, 12];
    } elseif (strpos($name, "лагутин") !== false) {
        $questionNumbers = [39, 40];
    } elseif (strpos($name, "атнишкин") !== false) {
        $questionNumbers = [16, 18];
    } elseif (strpos($name, "тимошенкова") !== false) {
        $questionNumbers = [46, 48];
    } else {
        $questionNumbers = [rand(1, 25), rand(26, 50)];
    }

    $q = load_questions();
    // var_dump($name);
    // var_dump(strpos($name, "исаков"));
    
    $questions = [
        $q[$questionNumbers[0] - 1],
        $q[$questionNumbers[1] - 1],
    ];

    // var_dump($questionNumbers);
    // die();
} else {
    header('Location: /');
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

                <img src="static/teacher.jpg"/>

                <div class="text-center">
                    <h2 class="title" style="color: white;">Слушаю ответы на вопросы...</h1>
                </div>

                <ol class="list">
                    <li><?= $questions[0] ?></li>
                    <li><?= $questions[1] ?></li>
                </ol>

                <form action="result.php" method="post">
                    <input type='hidden' name='name' value='<?= $_POST['name'] ?>' />
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Завершить отвечать</button>
                </form>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    </div>
</section>
</body>
</html>