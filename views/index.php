<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<?php 



?>
<link rel="stylesheet" type="text/css" href="/web/assets/css/style.css">

<script type = "text/javascript" src="/web/assets/js/jquery-latest.js"></script>
<script type = "text/javascript" src="/web/assets/js/jquery.tablesorter.js"></script>
<script type = "text/javascript" src="/web/assets/js/jquery.tablesorter.pager.js"></script>


<script type = "text/javascript" src="/web/assets/js/script.js"></script>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	
	<br> 
<div class ="row">

      <div class="site-index" ><div class="col-md-2"></div>
<a class="btn btn-primary" href="/admin" role="button">Admin</a>
      </div>

</div>
	<hr>
	<div class ="row">
				<div class="col-md-3"></div>
					   <div class = 'col-md-5'>
					<h3 style = "color:red"> <center>  	
   <?php if(isset($_SESSION['mesage'])){
					   $text = $_SESSION['mesage'];
					   	echo $text;
					  unset($_SESSION['mesage']);
					   }
					   ?>
</center></h3>
			    
<form  role="form" action="index" method="post">
					 <div class="form-group ">
					  <label for="inputNme">Ваше Ім'я</label>
					  <input type="text" class="form-control" id="username" name="name" placeholder=" Ваше Ім'я" required>
					  
					 </div>
					  <div class="form-group">
					  <label for="inputEmail">Ваш email</label>
					  <input type="text" class="form-control" id="email" name="email" placeholder=" Ваш emil" required>
					  
					 </div>
					 <div class="form-group">
					  <label for="Сайт">Сайт</label>
					  <input type="text" class="form-control" id="text" name="site" placeholder="Сайт">
					 </div>
					  <div class="form-group 3" >
					  <label rows="3" for="Відгук">Відгук</label>
					  <textarea rows="3" class="form-control" name="public" required></textarea>
					
					 </div>
					<h3 style = "color:red"> <?php  if(isset($_POST['mesage_Capcha'])){
					   	 echo $_POST['mesage_Capcha'];
					
                           }
					 ?></h3>

					 <div class="g-recaptcha" data-sitekey="6Lc4TTcUAAAAAJ1mo4rnMoykVXqeTxSo-zTN33Js" ></div><br>
					 <button type="submit" class="btn btn-primary">Додати</button>
</form><br>
				     
				</div>
				</div>	<hr>
	<div class ="row">
		<div class="col-md-3"></div>
		 <div class = 'col-md-7'>
		<table align="center"  id="myTable" class="tablesorter" width="100%" border ="0px" style=" font-size: 12pt;">
					 <thead>
					 <tr>
					 <th >№ </th>
					 <th >Имя</th>
                        <th >Дата</th>
					 <th >Почта</th>
					  <th >Сайт</th>
					 <th >Відгук</th>
					 </tr>
					 </thead>

	                
               <tbody>
   <?php foreach ($public as $publics): ?>

					 <tr>
					 	     <td ><?php echo $publics ['id'];?></td>
							 <td><?php echo $publics ['name'];?></td>
							  <td><?php echo $publics ['data'];?></td>
							 <td><?php echo $publics ['email'];?></td>
							 <td><?php echo $publics ['site'];?></td>
							 <td><?php echo $publics ['public'];?></td>
					 </tr>
      <?php endforeach ?>
		       </tbody>
			
		 </table>
		 
	
		
</div>
</div> 
<div id="pager" class = "pager">
		 	<form>
		 		<img src = "web/assets/css/1.png" class="prev"/>
		 		<img src = "web/assets/css/2.png" class="next"/>
		 		<input type = "text" class = "pagedisplay">

		 		<select class = "pagesize">
		 			<option selected = "selected" value = "5">5</option>
		 			<option  value = "10">10</option>
		 			<option  value = "15">15</option>
		 		</select> 		
           </form>
       </div>
       <hr>
	</body>
		</html>