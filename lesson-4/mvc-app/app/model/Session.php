<?php

/**
 * Class Session
 * include functions
 */
class Session
{
    private static $instance;

    private function __construct()
    {
        session_start();
    }

    /**
     * Logs user in
     */
    public function login()
    {
        if( isset($_POST['username']) && $_POST['username'] == 'admin' &&
        isset($_POST['password']) && $_POST['password'] == 'php'
        ) {
            $_SESSION['is_logged_in'] = true;
        }
    }

    /**
     * Logs user out
     */
    public function logout()
    {
        //@todo
    }

    /**
     * Checks if user is logged in or not
     */
    public function isLoggedIn()
    {
        if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {

            echo '<p>Welcome admin!</p>';
            echo '<a class="btn btn-default" href="logout.php">Logout</a>';
            

            $conn = dbConnect();
            $query = "SELECT * FROM prijave";
            $result = $conn->query($query);
            
            
                echo '<table class="table">        
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
                <tbody>';               
                    
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

            echo '</tbody>
            </table>';
        } else {

            echo '<form method="post">

                <label for="username">Username</label>
                <input type="text" name="username" required class="form-control" id="username" required /><br>


                <label for="password">Password</label>
                <input type="text" id="password" name="password" required class="form-control" /><br>

                <button class="btn btn-default" type="submit">Login</button>

            </form>';
        }
    
    }
    
    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}
