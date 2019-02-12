<?php
class Form{
  private $data;
  private $surround = 'p';
//these are the functions needed to fit with the html elements
  public function __construct($data = array()){
    $this->data = $data;
  }

  private function surround($html){
return "<{$this->surround}>{$html}</{$this->surround}>";
  }

  private function getValue($index){
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }

//In here we assign the values of the html elements
  public function input($name){
    return $this->surround(
      '<input type="text" name="' . $name . '" value="' . $this->getValue($name) .'">');
  }

  public function select($select){
    return $this->surround(
      '<select name="' .$select .'">
  <option value="volvo">Leerling</option>
  <option value="saab">Leraar</option>
</select>');

  }
  public function textarea(){
    return $this->surround(
      '<textarea rows="4" cols="50">

      </textarea>'  );
  }
  public function radio(){
    return $this->surround(
      '<input type="radio" name="gender" value="male"> Male<br>
       <input type="radio" name="gender" value="female"> Female<br>
       <input type="radio" name="gender" value="other"> Other'
          );
      }
      public function check(){
        return $this->surround(
          '<input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
<input type="checkbox" name="vehicle2" value="Car"> I have a car<br>
<input type="checkbox" name="vehicle3" value="Boat" checked> I have a boat<br>'
              );
          }

  public function submit(){
    return $this->surround('<button type="submit">Envoyer</button>');
  }

  //validate
  public function checkstring($string){
  if(is_string($string)){
    return $this->surround(
      '<p>this is a string</p>');
  }else{
    return $this->surround(
      '<p>this is not a string</p>');
  }

  }
  public function checkint($int){
  if(is_int($int)){
    return $this->surround(
      '<p>this is a integer</p>');
  }else{
    return $this->surround(
      '<p>this is not a integer</p>');
  }

  }
  public function checkdec($dec){
  if(is_float($dec)){
    return $this->surround(
      '<p>this is a decimal</p>');
  }else{
    return $this->surround(
      '<p>this is not a decimal</p>');
  }

  }
  public function link(){
    return $this->surround(
      '
    <link rel="stylesheet" type="text/css" href="theme.css">

      ');
  }

  public function meta(){
    return $this->surround(
      '
      <meta charset="UTF-8">
     <meta name="description" content="Free Web tutorials">
     <meta name="keywords" content="HTML,CSS,XML,JavaScript">
     <meta name="author" content="John Doe">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


      ');
  }

  public function afbeelding($foto){
    return $this->surround(
      '
    <img src="' . $foto .'" alt="test">

      ');
  }
  public function alink($link){
    return $this->surround(
      '
      <a href="https://www.w3schools.com/html/">Visit this HTML tutorial</a><br>
    <a href="' . $link . '">This is a link to a website you chose</a>

      ');
  }
  public function javascript(){
    return $this->surround(
      '
  <script src="myscript.js"></script>

      ');
  }


}
  ?>
