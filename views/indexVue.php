<?php
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
