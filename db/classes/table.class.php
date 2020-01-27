<?php 

class Table extends Dbh{

    protected function getTables() {
        $sql = "SHOW TABLES";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function shutTable($tableName) {
        $sql = "DROP TABLE " . $tableName;
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$tableName]);
    }
}