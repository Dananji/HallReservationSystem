<?php

class Database extends PDO {
    public function __construct() {
        parent::__construct('mysql:host = localhost; dbname = hall_reservation_system; charset = utf8', 'root', '');
    }
}
?>
