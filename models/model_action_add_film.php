<?php

$db = new db();
$db->query("INSERT INTO film_information.films(name,year,format,actors)
                   VALUES(:n,:year,:f,:actors)", array("n"=>$film[0],"year"=>$film[1],"f"=>$film[2],"actors"=>$film[3]));