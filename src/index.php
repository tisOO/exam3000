<html>
<head>
<titleЭкзаменатор 3000></title>
<link rel="stylesheet" href="static/bootstrap.min.css"/>
    <style>
        body {
            background-color: black;
            
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

                <img src="static/exam.jpg"/>

                <div class="text-center">
                    <h2 class="title" style="color: white;">Введите Ваше имя</h1>
                </div>

                <form action="questions.php" method="post">
                    <input type='hidden' name='csrfmiddlewaretoken' value='UtEGVuga2P81VFl4pVsXYMDNZ3a6qV0reI4idcseGEjDehB4EagY4Cg3bB9j8qcq' />
                    <table>
                            <p><input class="form-control input-lg" id="name" maxlength="30" name="name" placeholder="Имя" type="text" required /></p>
                    </table>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Получить билет</button>
                </form>

                <br />
                <h2><a href="/marks.php">Посмотреть оценки</a></h2>

            </div>

            <div class="col-md-3">
            </div>
        </div>
    </div>
</section>
</body>
</html>