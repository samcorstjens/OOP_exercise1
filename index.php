<?php
require 'form1.php';
require 'form2.php';

//create a new form

$form = new Form($_POST);
$form2 = new HTML($_POST);
?>

<form action="#" method="post">
  <?php
  // these are written in the form
  echo $form2->text();
  echo $form2->link();
  echo $form2->afbeelding("poo.png");
  echo $form2->alink("http://www.youtube.com");
  echo $form2->javascript();

echo $form->input("username");
echo $form->select("This is my select");
echo $form->submit();
echo $form->textarea();
echo $form ->radio();
echo $form-> check();

echo $form->checkstring("");
echo $form->checkint(78);
echo $form->checkdec(10.55);



  ?>

</form>
