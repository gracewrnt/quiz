<?php
        require_once'connect.php';
		/*mysql_connect("webservhost","maillearn_sor","662251Mo");
		mysql_select_db("maillearn_test");*/
		$strSQL ="SELECT * FROM Quiz";
		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                $objResult = mysql_fetch_array($objQuery);
?>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        </head>
        <body>
        
             
                <h1>ANNOUCEMENT<a href ='register.php'><img src =Addicon.png width="30" height="30"></a></h1>
				<center>
                                     <?php
	while($objResult = mysql_fetch_array($objQuery))
	{
?>
					<table width=30% style="border:3px dashed #33CCFF;" cellspacing="5" bgcolor="#33CCFF" 
					cellpadding="5"><tr><td style="border:3px dashed white;" bgcolor="white"> 
					<?php 	echo "Question:".$objResult['question'];?><br>
					<a href="delete.php?Number=<?php echo $objResult["Number"];?>">
					<img src =delete.png width="30" height="30" align="right"></a>
					<input type="radio" id="myRadioA" name="test" value="a"><?php	echo "Choice A:".$objResult['a'];?><br>
					<input type="radio" id="myRadioB" name="test" ><?php	echo "Choice B:".$objResult['b'];?><br>
                                        <input type="radio" id="myRadioC" name="test" ><?php	echo "Choice C:".$objResult['c'];?><br>
                                        <input type="radio" id="myRadioD" name="test" ><?php	echo "Choice D:".$objResult['d'];?><br>
					</td></tr></table><br/>
                                        
                                        <button target="checkcorrect()">check correct</button>
                                        
                                        
                                        
                                        <a href="AnnoucementHome_1.php?Number=1"><button >next question</button></a>
                                        
                                        <p id="demo"></p>
                                      
        <?php } ?>
                                        <button onclick="checkcorrect()">Click me</button>
                                      <script>
                                            var total = 0;
                                            function checkcorrect() {
                                               document.getElementById("demo").innerHTML = total;
                                            } 

 <?php mysql_close(); ?>
</script>
        </body>
</html>