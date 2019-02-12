<?php
class HTML{
  private $data;
  private $surround = 'p';
//these are the functions needed to fit with the html elements

  private function surround($html){
return "<{$this->surround}>{$html}</{$this->surround}>";
  }

  private function getValue($index){
    return isset($this->data[$index]) ? $this->data[$index] : null;
  }
//In here we assign the values of the html elements
public function text(){
  return $this->surround(
    'Testing the site');
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
