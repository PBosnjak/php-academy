<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <style>
        input, textarea { display: block; }
        
    </style>
    <title>Title</title>
    
</head>
<body>

<header>
    <ul>
        <li><a href="index.php">Naslovnica</a></li>
        <li><a href="form.php">Prijavi se</a></li>
        <li>Login (za admine)</li>
    </ul>
</header>

<main>

    <h1>Prijavnica za PHP akademiju</h1>

    <p>Prijavnica za prvo osječko izdanje PHP akademije koju Inchoo pokreće u suradnji s FERITom.</p>
    <p>Prijave traju do 10.10., pa požuri i svoje mjesto rezerviraj već sad.</p>
    <p>Više informacija na:
        <a href="http://inchoo.hr/php-akademija-2016/" target="_blank">http://inchoo.hr/php-akademija-2016/</a>
    </p>

    <!-- fix form -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Ime i prezime</label>
        <input type="text" name="ime" required/><br>

        <label>Mail adresa</label>
        <input name="email" type="email" required /><br>

        <label>Smjer</label>
        <input type="text" name="smjer" /><br>

        <label>Godina studija</label><br>
        1.<input id="check" name="godina" type="radio" value="1"/>
        2.<input id="check" name="godina" type="radio" value="2"/>
        3.<input id="check" name="godina" type="radio" value="3"/>
        4.<input id="check" name="godina" type="radio" value="4"/>
        5.<input id="check" name="godina" type="radio" value="5"/><br>
        <br>
        <label>Što te motiviralo da se prijaviš?</label>
        <textarea name="comm">

        </textarea><br>


        <label>Imaš li predznanje vezano uz web development?</label>
        <textarea name="comm2">

        </textarea><br>

        <label>U kojim jezicima si do sada programirao?</label><br>
        PHP<input id="check" name="jezik" type="checkbox" value="PHP" />   
        Java<input id="check" name="jezik" type="checkbox" value="Java" />
        Python<input id="check" name="jezik" type="checkbox" value="Python"/>
        C++<input id="check" name="jezik" type="checkbox" value="C++"/>
        Drugi<input id="check" name="jezik" type="checkbox" value="Drugi"/><br><br>
        <label>Uploadaj primjer svoga koda:</label>
        <input type="file" name="fileUpload"><br>

        <button type="submit" name="submit">Prijavi se</button>
</form>
</main>

<footer>
    <p>&copy; PHP Akademija, 2016</p>
</footer>

</body>
</html>