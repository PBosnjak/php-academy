<?php
    require_once 'function.php';
    session_start();
    if( isset($_POST['username']) && $_POST['username'] == 'admin' &&
        isset($_POST['password']) && $_POST['password'] == 'php'
    ) {
        $_SESSION['is_logged_in'] = true;
    }

    
    
    
    
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">PHP akademija</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Naslovnica</a></li>
                    <li><a href="form.php">Prijavi se</a></li>
                    <li class="active"><a href="login.php">Login (za admine)</a></li>
                </ul>
        </nav>
</header>

<main>
    <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']): ?>

        <p>Welcome admin!</p>
        <a class="btn btn-default" href="logout.php">Logout</a>
        <?php
            
        $conn = dbConnect();
        $query = "SELECT * FROM prijave";
        $result = $conn->query($query);
        $proba = $result->fetch_assoc();
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Ime i prezime</th>
                    <th>Email</th>
                    <th>Smjer</th>
                    <th>Godina</th>
                    <th>Motiv</th>
                    <th>Predznanje</th>
                    <th>Jezici</th>
                    <th>Kod</th>
                </tr>
            </thead>
            <tbody>                
                <?php
                while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['ime'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['smjer'] . '</td>';
                    echo '<td>' . $row['godina'] . '</td>';
                    echo '<td>' . $row['motiv'] . '</td>';
                    echo '<td>' . $row['predznanje'] . '</td>';
                    echo '<td>';
                    
                    if(isset($row['php']) && $row['php'] == 1){ echo 'PHP&nbsp';};
                    if(isset($row['java']) && $row['java'] == 1){ echo 'Java&nbsp';};
                    if(isset($row['python']) && $row['python'] == 1){ echo 'Python&nbsp';};
                    if(isset($row['c']) && $row['c'] == 1){ echo 'C++&nbsp';};
                    if(isset($row['drugi']) && $row['drugi'] == 1){ echo 'Drugi';};
                    
                    echo '</td>';
                    echo '<td>' . $row['kod'] . '</td>';                    
                    echo '<tr>';
                };
                ?>            
            </tbody>
        </table>
    <?php else: ?>

        <form method="post">

            <label for="username">Username</label>
            <input type="text" name="username" required class="form-control" id="username" required /><br>
            

            <label for="password">Password</label>
            <input type="text" id="password" name="password" required class="form-control" /><br>
            
            <button class="btn btn-default" type="submit">Login</button>

        </form>

    <?php endif ?>   
    
    
    
    
    
</main>
<footer>
    <p>&copy; PHP Akademija, 2016</p>
</footer>

</body>
</html>