<?php

/**
 * Class to connect to the data base
 * 
 * @return PDO $db 
 */
class Database
{

// connection settings
const HOST  = "localhost";
const DBNAME = "mini_jeu_combat_poo"; 
const LOGIN = "root"; 
const PWD = "root"; 

  /**
   * Function to connect to the DB
   *
   * @return PDO $db
   */
  static public function DB()
  {
    $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::DBNAME , self::LOGIN, self::PWD);
    return $db;
  }

}


 ?>
