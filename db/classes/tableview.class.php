<?php

class TableView extends Table {
    public function showTables() {
        $result = $this->getTables();
        return $result;
    }
}