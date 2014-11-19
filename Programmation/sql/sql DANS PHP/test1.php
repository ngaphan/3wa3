<?php

if ($mysqli = new mysqli("localhost", "3wa", "troiswa", "library"))
{
if ($result = $mysqli->query("SELECT * FROM books"))
{
print_r($result);
echo "<br>".$result->current_field ;
    echo "<br>".$result->field_count ;
    echo "<br>".$result->num_rows ;
    echo "<br>".$result->type ;
print_r($result->fetch_array());

print_r($result);
print_r($result->fetch_array());
print_r($result);
print_r($result->fetch_array());
print_r($result);
print_r($result->fetch_array());
print_r($result);
}
}

?>