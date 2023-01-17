 <?php
 $name = "    My name is Pranav    ";
 echo "String can be concantenated " . "using '.' String = " . $name;
 echo "<br>";
 echo "String length - strlen(varname) - " . strlen($name);
 echo "<br>";
 echo "String word count - str_word_count(varname) - " . str_word_count($name);
 echo "<br>";
 echo "String reverse - strrev(varname) - " . strrev($name);
 echo "<br>";
 echo "String search - strpos(varname,'key') - " . strpos($name, "is");
 echo "<br>";
 echo "String replace - str_replace(ini,rep,varname) - " . str_replace("Pranav", "Hazy",$name);
 echo "<br>";
 echo "String right trim {ltrim for left}- rtrim(varname) - " . rtrim($name). 
 "<br> Left trim -". ltrim($name);
 echo "<br>";
 ?>
