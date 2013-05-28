<?php include 'Header.php'; ?>
<?php include 'Header_left.php'; ?>
<div id="maincontent">
    <?php
        // retrieve submitted information
        $antalPersoner = $_POST['nrOfPersons'];
        
        // variables for database access
        $dbUsername = "DB_015";
        $dbPassword = "12399";

        // query to retrieve information specific to submitted productcode
        try {
            $dbh = new PDO('oci:dbname=//localhost:1521/dbwc', $dbUsername, $dbPassword, array(PDO::ATTR_PERSISTENT => true));
            $q = <<<SQL
                SELECT *
                FROM P_PRODUCTS
                WHERE PRODUCTCODE = $code
            SQL;
                $stmt = $dbh->prepare($q);
                $stmt->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }?>
    <div class="default_padding">
        <img src="Images/free-slider-img2.png" width="100%" alt="some_text">
    </div> 
    <div class="default_padding">
        <iframe align="left" width="30%"  src="http://www.youtube.com/embed/iP6XpLQM2Cs" frameborder="0" allowfullscreen></iframe>
        <iframe align="center" width="30%" src="http://www.youtube.com/embed/iP6XpLQM2Cs" frameborder="0" allowfullscreen></iframe>
        <iframe align="right" width="30%"  src="http://www.youtube.com/embed/iP6XpLQM2Cs" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="calculatorback">
        <form action="" method="POST" id="calculator">
            <label>Energibesparelse</label>
                <select name="nrOfPersons" style="width: 20%">
                    <option value="1"<? if (antalPersoner == 1) {echo 'selected="selected"'} ?>>1 person</option>
                    <option value="2"<? if (antalPersoner == 2) {echo 'selected="selected"'} ?>>2 personer</option>
                    <option value="3"<? if (antalPersoner == 3) {echo 'selected="selected"'} ?>>3 personer</option>
                </select>
		    <button type="submit">Beregn</button>
            <label>din besparelse er 0%</label>
        </form>
</div>
    <div style="padding-bottom: 10px; padding-top: 10px">
        <img src="Images/Arg1.png" align="left" width="45%" alt="some_text">
    	<img src="Images/Arg2.png" align="right" width="45%" alt="some_text">        
    </div>
</div>
<?php include 'Header_right.php'; ?>
<?php include 'Footer.php'; ?>
