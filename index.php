<?php include 'Header.php'; ?>
<?php include 'Header_left.php'; ?>
<div id="maincontent">
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
                    <option value="1">1 person</option>
                    <option value="2">2 personer</option>
                    <option value="3">3 personer</option>
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
