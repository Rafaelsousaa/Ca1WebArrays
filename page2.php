<!-- I include the header -->
<?php include('Header.php'); ?>

<!-- adding an array c$ountry -->
<?php
$country = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"

); ?>
<!-- adding a form to get the scroll bar for choosing the country -->
<form action="page2.php" method="POST">
    <select name="x" id="">
        <option value="" disabled selected> Pick a Country</option>
        <?php
// this loop is for get the countries then i printed in option
        foreach ($country as $x => $x_value) {
            echo "<option value='$x'>$x</option>";
        }
        ?>
<!-- I added a  button submit -->
        <input type="submit" name="submit" value="choose">
    </select>


</form>
<?php
// this part i created a if statment, i used $_Post to get the value and but the subimit for do the action
if (isset($_POST['submit'])) {
// this loop will take the country as $x and the capital as $x_value
    foreach ($country as $x => $x_value) {
// this part the letter x will be the option bar that i give on the select name
//than i  gave can as $x that will be my country 
// and cap as $x_value that will be my capital
        if ($_POST['x'] == $x) {
            $can = $x;
            $cap = $x_value;
        }
    }
    //this part i printed the country and capital.
    echo '<h1>The country choosen is : ' . $can . '</h1>';
    echo '<h2>The capital is : ' . $cap. '</h2>';
}


?>
<div class="space2"></div>

<!--  i added a footer -->

<?php include('Footer.php'); ?>