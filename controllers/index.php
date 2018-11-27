<?php
<<<<<<< HEAD
require "../model/Database.php";
require "../entities/Person.php";
require "../model/Manager.php";
$personManager = new PersonManager(Database::DB());
    if (isset($_GET['start'])) {
        if ($_GET['start'] == 'loading') {
            if(isset($_POST["name"]))
            {
            $person = new Person([
                "name" => $_POST['name']
            ]);
            $addUser = $personManager->addPerson($person);
            $takeAllUsers = $personManager->getPersons();
            }
        }
    }    
        require "../views/indexVue.php";

?>
=======


include "../views/indexVue.php";
 ?>
>>>>>>> f5ea91f632f5c8b000bb566f24765fae7af3157a
