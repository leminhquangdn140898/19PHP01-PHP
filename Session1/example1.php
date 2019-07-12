
<?php
	echo "<h1>HELLO WORLD!</h1>"
?>
<p>Hi man!!!!!</p>
<?php
	$userName = 'admin';
	echo $userName;
	$x = 7;
	$y = 8;
	echo "<br>";
	echo $x + $y;
	echo "<br>";
	echo $x - $y;
	echo "<br>";
	echo $x * $y;
	echo "<br>";
	echo $x / $y;
	function sumNumber($a , $b){
		return $a + $b;
	}
	echo "<br>";
	echo sumNumber(22, 98);

	echo "<br>";
	$i = 8;
	if($i % 2){
		echo "i là số lẻ";
	} else {
		echo "i là số chẵn";
	}

	echo "<br>";
	for($i = 1 ; $i <= 10; $i++){
		echo $i;
		echo "<br>";
	}

	echo "<br>";
	$n = 5;
	while ($n < 10) {
		echo $n;
		$n++;
		echo "<br>";
	}

	echo "<br>";
	$m = 5;
	do{
		echo $m;
		$m++;
		echo "<br>";
	}while ($m < 10);
	

	echo "<br>";
	for ($i=200; $i <= 250 ; $i++){ 
		if ($i % 3 == 0 ) {
			echo "<br>";
			echo "$i chia hết cho 3";
		}
	}
	 
?>
<table width="350px"  border="1px">    
      <?php  
      for($row=1; $row <= 8; $row++)  
      {  
          echo "<tr>";  
          for($col=1; $col <=8; $col++)  
          {    
            if(($row + $col) % 2 == 0)  
            {  
              echo "<td height=40px width=40px bgcolor=	#CCCC33></td>";  
            }  
            else  
            {  
              echo "<td height=40px width=40px bgcolor=#000000></td>";  
            }  
          }  
          echo "</tr>";  
      }  
      ?>  
     </table>

<link rel="stylesheet" type="text/css" href="example1.css">
<?php 
	echo "<br>";
	for($row=1; $row <= 8; $row++) {
		 for($col=1; $col <=8; $col++){
		 	if(($row + $col) % 2)   
            {  
              echo "<div class='Box1'></div>";  
            }  
            else  
            {  
             echo "<div class='Box2'></div>";     
            }  
          }  
          echo "<br>";  
      }  
?>


<?php
echo "<br>";
        for($x=1; $x <= 10; $x++)  
		{  
		   for ($y=1; $y <= $x; $y++)  
			{  
			 echo "*";  
				if($y <= $x)  
				 {  
				   echo "*";  
				 }  
			 }  
		   echo "<br>";  
		}
       ?>