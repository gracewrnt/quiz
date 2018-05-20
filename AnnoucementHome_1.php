<?ob_start();?>
<?php
        require_once'connect.php';
		/*mysql_connect("webservhost","maillearn_sor","662251Mo");
		mysql_select_db("maillearn_test");*/
		$strSQL = "SELECT * FROM Quiz WHERE Number = '".$_GET["Number"]."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
?>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        </head>
        <body>
         <?php
         $old=$objResult["Number"];
          if(!isset($old) || $old ==''){
             header("Location: result.php");
             exit();

       }

         $old++;




                ?>
                <h1>ANNOUCEMENT<a href ='register.php'><img src =Addicon.png width="30" height="30"></a></h1>
				<center>
					<table width=30% style="border:3px dashed #33CCFF;" cellspacing="5" bgcolor="#33CCFF"
					cellpadding="5"><tr><td style="border:3px dashed white;" bgcolor="white">
					<?php 	echo "Question:".$objResult['question'];?><br>
					<a href="delete.php?Number=<?php echo $objResult["Number"];?>">
					<img src =delete.png width="30" height="30" align="right"></a>

          <form action="x1.php?Number=<?php echo $objResult["Number"];?>=" method="post">
          <input type="radio" id="myRadioA" name="test" value="a"><?php	echo "Choice A:".$objResult['a'];?><br>
					<input type="radio" id="myRadioB" name="test" value="b"><?php	echo "Choice B:".$objResult['b'];?><br>
          <input type="radio" id="myRadioC" name="test" value="c"><?php	echo "Choice C:".$objResult['c'];?><br>
          <input type="radio" id="myRadioD" name="test" value='d'><?php	echo "Choice D:".$objResult['d'];?><br>

                                        <input type="submit" value="Submit">
                                      </form>
					</td></tr></table><br/>




                                        <a href="AnnoucementHome_1.php?Number=<?php echo $old; ?>"><button >Next question</button></a></center>


                                           <p id="demo"></p>

                                      <?php


                                        ?>
<?php

mysql_close();

?>

</script>
        </body>
</html>
