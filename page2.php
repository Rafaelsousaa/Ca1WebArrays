<?php include('Header.php'); ?>


<?php
$country = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"

); ?>
<form action="page2.php" method="POST">
    <select name="x" id="">
        <option value="" disabled selected> Pick a Country</option>
        <?php

        foreach ($country as $x => $x_value) {
            echo "<option value='$x'>$x</option>";
        }
        ?>

        <input type="submit" name="submit" value="choose">
    </select>


</form>




<?php include('Footer.php'); ?>