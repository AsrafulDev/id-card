<html>
	<head>
				<meta name= "viewport" content= "width=device-width, initial-scale=1" >

		
		<style> #mydiv {
	width: 204px;
  height: 324px;
  background-image: url("bg.jpg");
  background-color:green;
  background-position: center; /* Center
the image */
background-repeat: no-repeat; /* Do not
repeat the image */
background-size: cover;
border-color:black;
border-width:1;

}
#edit{
padding-bottom:10;
padding-top:100;
padding-left:0;
padding-right:0;



}
#image{
padding-bottom:0;
padding-top:0;
padding-left:60;
padding-right:60;
height:100;
wide:70;
}

#txt{
font-size:11.33;
font-style:bold;
padding-bottom:0;
padding-top:0;
padding-left:5;
padding-right:5;

}
#p1 {
  display: inline-block;
  margin-top:0;
  margin-bottom:0;
  margin-left: 0;
  margin-right: 0;
  text-transform: uppercase;
}
#page { 
  height:11.69in;
  wide:8.27in;
  
  margin:40px;
  
}





	</style>
	
		<script>
		</script>
	</head>
	<body"><div id="page">
	<div id="mydiv">
	<div id="edit"> 
	<div id="image">
		
		
  <?php
if(isset($_POST['submit']))
{
$filepath ="image/" .$_FILES["file"] ["name" ];
if (move_uploaded_file($_FILES["file"]["tmp_name"],$filepath))
{
echo "<img src=" .$filepath ." height= 90 width= 85 />" ;
}
else {
echo "Error !!";}
}
?> 

	</div><b>
	<div id="txt">
Name&nbsp;&nbsp;&nbsp;:<p id="p1"><?php echo $_POST["name"]; ?></p></br>

Father&nbsp;&nbsp;:<p id="p1"><?php echo $_POST["father"]; ?></p></br>

Class&nbsp;&nbsp;&nbsp;&nbsp;:B.B.A.Hon's&nbsp;(<?php echo $_POST["department"]; ?>)<br>

Roll&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?php echo $_POST["roll"]; ?><br>

Session:<?php echo $_POST["session"]; ?></div>
	</div>
		
	</b>

	</div>
	<br><br><br><br><br><br>
	<br>
	<script>

</script> <div  margin-left:80px; >
		
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Button1" value="প্রিন্ট করুন" onclick="window.print();" id="button" style="color:Black;height:29px;"  position:center; />

  </div>         
<style>
@media print {
  #button {
    display: none;
  }
}




@page {
  size: A4;
  margin: 0;
}
@media print {
  html, body {
    width: 210mm;
    height: 297mm;
  }
  
}
* {
    -webkit-print-color-adjust: exact !important;   /* Chrome, Safa
    color-adjust: exact !important;                 /*Firefox*/
}


}

</style>
	
	</body>
</html>