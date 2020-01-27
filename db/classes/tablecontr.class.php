<?php

class TableContr extends Table {

    public function dropTable($tableName) {
        $this->shutTable($tableName);
    }

}