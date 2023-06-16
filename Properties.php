<?php
require_once "Data/Person.php";
 $person = new Person();

 $person -> name = "Muhammad Yusuf Farizan";
 $person -> address = "Jl.Akasia II, No.122";
 $person -> country ;

        echo "Name : $person->name ". PHP_EOL;  
         echo "Address : $person->address ". PHP_EOL;
         echo "Country : $person->country ". PHP_EOL;
         