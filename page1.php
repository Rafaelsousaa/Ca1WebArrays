<!-- in this parte I include my header by using php include -->
<?php include('Header.php'); ?>
<!-- I created a table a give some style in bootstrap -->
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Country</th>
            <th scope="col">Capital</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // for this parte i used a array with the countries that i need to use it insede the table
        $country = array(
            "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen",
            "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
            "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
            "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
            "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
        );
        // in here i used a for lopp to get the value $x as a country and $x_value to get the key that is the capital 
        foreach ($country as $x => $x_value) {
// in here i printed the country as $x amd the capital as $x-value
            echo "<tr><td>$x</td><td>$x_value</td></tr>";
        }

        ?>
        </tbody>   
    </table>
    <!-- this parte I include the footer -->

        <?php include('Footer.php'); ?>