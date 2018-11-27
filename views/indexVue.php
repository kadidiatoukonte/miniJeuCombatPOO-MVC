<?php
<<<<<<< HEAD
  include("template/header.php");
?>
<form action="index.php?start=loading" method="POST">
Pseudo: <input type="text" name="name" value=""><br>
        <input name="" id="" class="btn btn-primary" type="submit" value="Création"> 

</form>
<?php
// foreach($Persons as $person){
 ?>

  <?php if (isset($_GET['start'])) { ?>
    <?php if ($_GET['start'] == 'loading') { 
    foreach ($takeAllUsers as $user) { ?>
    <p>
    <?php echo $user->getDamage(); ?>
    </p>
    <p>
    <?php echo $user->getName(); ?>
    </p>
    <p>
    <?php echo $user->getId(); ?>
    </p>
    <?php }  
    ?>
  <?php } ?>
  <?php } ?>
    
 <?php
//  }
   include("template/footer.php");
?>
=======
  include("template/header.php")
 ?>

<p>This is the index view</p>

 <?php
   include("template/footer.php")
  ?>
>>>>>>> f5ea91f632f5c8b000bb566f24765fae7af3157a
