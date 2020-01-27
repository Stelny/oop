<?php

class Test extends Dbh {
    

    public function getUser() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo $row["users_firstname"] . '<br>';
        }
    }
    public function getUserStmt($firstName, $lastName) {
        $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName]);
        $names = $stmt->fetchAll();

        foreach ($names as $key => $value) {
            echo $value["users_dateofbirth"];
        }
        
    }
    public function setUserStmt($firstName, $lastName) {
        $sql = "INSERT INTO users ()";
        
        
    }

}