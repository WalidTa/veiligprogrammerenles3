<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "brokenauth");

class DB{
    protected $dbh;
    protected $stmt;
    protected $resultSet;

    public function __construct(){
            $this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            $this->resultSet = [];
    }

    public function executeSQL($query){
        $this->stmt = $this->dbh->prepare($query);

        $result = $this->stmt->execute();

        $row = $this->stmt->fetchAll();

        if (!$result) {
            die('<pre>Oops, Error execute query '. $query .'</pre><br><pre>'.'Result code: '. $result .'</pre>');
        }

        if(!empty($row)){
            $this->resultSet = $row;
            return $this->resultSet;
        }

    return $this->resultSet;
}

}



 ?>

 <html>
  <body>
    <form method="POST" action="index.php" >
      <input type="text" name="Username" placeholder="Username" required>
      <input type="password" name="pswd" placeholder="Password" required>
      <input type="submit"> <br>

    </form>
  </body>

 </html>