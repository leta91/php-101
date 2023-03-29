<h1>Hello World</h1>  // the content wrapped within the h1 tag will render correctly to the browser

// how to have PHP coexists with HTML code in a PHP file

<?php ?>
<h1>Hello world</h1>
<php
<?php $age = 31;  //variables in PHP start with $ symbol
     
<?php
  $age = 31;
  echo $age;  // the "echo" keyword will output the value of the variable "age" that in this case equals 31
     
 <?php
   $age = 31;
   $age = 50; // the updated value of $age is 50
     
     
 <?php 
   
   function greeting() {
     echo 'Hello';
 }
 
 greeting();  // this is defined as invoking or calling a function and it will print the word "Hello"
 greeting();
     
 // by adding $message parameter to the function, the result is a flexible function
     
 function greeting($message) {
   echo $message;
 }
     greeting('Hi');
     greeting('Hey');  // the output printed to the browser is 'HiHey' without spaces
     
     
     
     
     
     
  

 
