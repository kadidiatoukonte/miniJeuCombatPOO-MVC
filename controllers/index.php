<?php
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
