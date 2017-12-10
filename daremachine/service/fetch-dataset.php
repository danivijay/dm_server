<?php

/*
Value format : 
1. id
Eg: "101" 
Note: Unique ID

2. dare
Eg:"sing a song"

3. gender
Eg: "m" 
Note: m: Male, f: Female, g: General
Values : m,f,g

4. intensity
Eg: "1"
Note: 1:simple, 2: medium, 3: hardcore
*/

$arr = array("id"=>"101", "dare"=>"sing a song", "gender"=>"g", "intensity"=>"1");
echo json_encode($arr);

?>