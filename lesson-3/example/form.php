<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">PHP akademija</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Naslovnica</a></li>
                    <li class="active"><a href="form.php">Prijavi se</a></li>
                    <li><a href="login.php">Login (za admine)</a></li>
                </ul>
        </nav>
        
    
</header>

<main>

    <h1>Prijavnica za PHP akademiju</h1>

    <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
    <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
    <p>Više informacija na:
        <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
    </p>
    <?php
    if (isset($_GET['val']) && $_GET['val'] == 1){
    ?>
    <script>alert("Prijava je uspješna")</script>
    <?php
    } elseif (isset($_GET['val']) && $_GET['val'] == 2) {
    ?>
    <script>alert("Došlo je do greške prilikom uploada")</script>
    <?php
    };
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data" >
        
        <label>Ime i prezime</label>
        <input type="text" name="ime" required class="form-control" id="username"/><br>
        
        <label for="email">Mail adresa</label>
        <input name="email" type="email" required class="form-control" id="email"/><br>
        <label>Smjer</label>
        <input type="text" name="smjer" class="form-control" id="username" /><br>

        <label>Godina studija</label><br>
        <div class="radio"><label><input name="godina" type="radio" value="1"/>1.</label></div>
        <div class="radio"><label><input name="godina" type="radio" value="2"/>2.</label></div>
        <div class="radio"><label><input name="godina" type="radio" value="3"/>3.</label></div>
        <div class="radio"><label><input name="godina" type="radio" value="4"/>4.</label></div>
        <div class="radio"><label><input name="godina" type="radio" value="5"/>5.</label></div>
        <br>
        <label>Što te motiviralo da se prijaviš?</label>
        <textarea name="comm" class="form-control" id="comment" rows="5">

        </textarea><br>


        <label>Imaš li predznanje vezano uz web development?</label>
        <textarea name="comm2" class="form-control" id="comment">

        </textarea><br>

        <label>U kojim jezicima si do sada programirao?</label><br>
        <div class="checkbox"><label><input class="checkbox" id="check" name="php" type="checkbox" value="1" />PHP</label></div>
        <div class="checkbox"><label><input class="checkbox" id="check" name="java" type="checkbox" value="1" />Java</label></div>
        <div class="checkbox"><label><input class="checkbox" id="check" name="python" type="checkbox" value="1" />Python</label></div>
        <div class="checkbox"><label><input class="checkbox" id="check" name="c" type="checkbox" value="1" />C++</label></div>
        <div class="checkbox"><label><input class="checkbox" id="check" name="drugi" type="checkbox" value="1" />Drugi</label></div>
        <br><br>
        <label class="btn btn-default btn-file">Uploadaj primjer svoga koda:
            <input style="display: none" type="file" name="fileUpload" ><br>
        </label> <br><br>
        <button class="btn btn-default" type="submit" name="submit">Prijavi se</button>
</form>

</main>

<footer>
    <p>&copy; PHP Akademija, 2016</p>
</footer>

</body>
</html>