<!doctype html>
<html>
	
	<body bgcolor="orange" >
	  
	  <form action="" method="POST">
		
		<br>    <font color="white">Enter Name</font>
					<input type="text" name="name" placeholder="Enter Your Name"/>
	    <br><br><font color="white">Enter Address</font>		
					<textarea rows="2" cols="80" name="addr"></textarea>
				
		<Br><br><font color="white">Enter Your Phone No.+91</font><input type="number" name="phone"/>
				
		<br><br><font color="white">Enter Email Address</font><input type="email" name="email" />
				
		<br><br><font color="white">Enter Mobile Date Of Purchase</font><input type="date" name="date" />
				
		<br><br><font color="white">Enter IMEI Number</font><input type="number" name="imei" />
				
		<Br><br><font color="white">Enter Brand Name</font>
					<select type="dropdown" name="brand">
                                               <option value="Apple">Apple</option>
                                               <option value="Samsung">Samsung</option>
                                               <option value="Nokia">Nokia</option>
                                               <option value="LG">LG</option>
                                               <option value="HTC">HTC</option>
                                               <option value="Asus">Asus</option>
                                              <option value="Huawei">Huawei</option>
                                               <option value="Mi">Mi</option>
                                               <option value="Acer">Acer</option>
                                              <option value="Micromax">Micromax</option>
                                               <option value="Google">Google</option>
                                               <option value="HP">HP</option>
                                              <option value="Sony">Sony</option>
                                               <option value="Lava">Lava</option>
                                               <option value="Intex">Intex</option>   
                                              <option value="Oppo">Oppo</option>
                                               <option value="Vivo">Vivo</option>
                                               <option value="TCL">TCL</option>  
                                              <option value="Lenovo">Lenovo</option>
                                               <option value="Motorola">Motorola</option>
                                               <option value="ZTE">ZTE</option>  
                                              <option value="Gionee">Gionee</option>
                                               <option value="LYF">LYF</option>
                                               <option value="Jio">Jio</option> 
                                              <option value="Panasonic">Panasonic</option>
                                               <option value="Karbonn">Karbonn</option>
                                               <option value="Blackberry">Blackberry</option> 
                                              <option value="Coolpad">Coopad</option>
                                               <option value="Datawind">Datawind</option>
                                               <option value="iBall">iBall</option>       
                                              <option value="Skull">Skull</option>
                                               <option value="Philips">Philips</option>
                                               <option value="Vertu">Vertu</option>    
                                              <option value="Videocon">Videocon</option>
                                               <option value="Zen">Zen</option>
                                               <option value="YU">YU</option>                      
                                           </select>
				
		<br><br><font color="white">Enter Model Details</font><input type="var" name="model" placeholder="iPhone 5s 16 gb"/>
				
		<br><br><font color="white">Enter Your Complaint</font><textarea rows="2" cols="80" name="com" ></textarea>
				
           <center><br><hr>  <input type="submit" name="submit" value="Submit"/></center>
          </form>

		
		<hr><hr>
		
		
		
        <form method="get" action="Main.html">
         <center><button type="submit">Back</button></center><br>
        </form>
			
		
		<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['name']) && !empty($_POST['addr']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['date']) && !empty($_POST['imei']) && !empty($_POST['brand']) && !empty($_POST['model']) && !empty($_POST['com']) ) {  
    $name=$_POST['name'];  
    $addr=$_POST['addr'];
    $phone=$_POST['phone'];  
    $email=$_POST['email'];
    $date=$_POST['date'];  
    $imei=$_POST['imei'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];  
    $com=$_POST['com'];	
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('customer') or die("cannot select DB");  
  
    $query=mysql_query("INSERT INTO `complaint`(`Dname`, `Daddr`, `Dphone`, `Demail`, `Ddate`, `Dimei`, `Dbrand`, `Dmodel`, `Dcom`) VALUES ('$_POST[name]','$_POST[addr]','$_POST[phone]','$_POST[email]','$_POST[date]','$_POST[imei]','$_POST[brand]','$_POST[model]','$_POST[com]')");  
   
} else {  
    echo "All fields are required!";  }  
}  
?> 







		
		
	</body>
	
</html>