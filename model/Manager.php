<?php

class PersonManager {
  private $_db;

  /**
   * Constructor
   *
   * @param PDO $db
   */
  public function __construct(PDO $db) {
    $this->setDb($db);
  }

  /**
   * Set the value of _db
   *
   * @param PDO $db
   * @return  self
   */ 
  public function setDb(PDO $db) {
    $this->_db = $db;
    return $this;
  }

  /**
   * Get the value of _db
   */ 
  public function getDb() {
    return $this->_db;
  }

  
  /**
   * Get all users. It returns an array of objects $user
   *
   * @return array $arrayUsers
   */
  public function getPersons() 
  {
    $query = $this->getDb()->query('SELECT * FROM Persons');
    // $query = $this->_db->query('SELECT * FROM Persons');
    $persons = $query->fetchAll(PDO::FETCH_ASSOC);

    // A chaque tour, on instancie un nouvel objet User qu'on stocke dans $arrayOfUsers[]
    foreach ($persons as $person) {
      $arrayOfPersons[] = new Person($person);
    }
    // On renvoie le tableau contenant tous nos objets User
    return $arrayOfPersons;
  }

  /**
   * Add user in DB
   *
   * @param User $user
   */
  public function addPerson(Person $person)
  {
    $query = $this->getDb()->prepare('INSERT INTO Persons(name) VALUES(:name)');
    $query->bindValue(':name', $person->getName(), PDO::PARAM_STR);

    $query->execute();
  }

}


 ?>
