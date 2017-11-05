<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="/web/assets/css/style.css">

<script type = "text/javascript" src="/web/assets/js/jquery-latest.js"></script>
<script type = "text/javascript" src="/web/assets/js/jquery.tablesorter.js"></script>
<script type = "text/javascript" src="/web/assets/js/jquery.tablesorter.pager.js"></script>


<script type = "text/javascript" src="/web/assets/js/scriptadmin.js"></script>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
	<br>
	
					   	
				         

					
					
						
      <div class ="row">
 <div class="site-index" >
      	<div class="col-md-2"></div>
<a class="btn btn-primary" href="/index" role="button">Головна</a>
      </div>
		<div class="col-md-3">	</div>
		 <div class = 'col-md-7'><h2>Адміністративна панель</h2><hr>


		 
		<table align="center"  id="myTable" class="tablesorter" width="100%" border ="0px" style=" font-size: 11pt;">
					 <thead>
					 <tr>
					 <th >№ </th>
					 <th >Имя</th>
                        <th >Дата</th>
					 <th >Почта</th>
					  <th >Сайт</th>
					 <th>Відгук</th>
					 <th>Видалити/Редагуваи</th>
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
							  <td><a href = "admin/?id=<?php echo $publics ['id'];?>"/>Видалити/
							  	<a href = "/post/?pub=<?php echo $publics ['id'];?>"/>Редагувати</td>
		
					 </tr>
      <?php endforeach ?>
		       </tbody>
			
		 </table>
		 <div id="pager" class = "pager">
		 	<form>
		 		<img src = "/web/assets/css/1.png" class="prev"/>
		 		<img src = "/web/assets/css/2.png" class="next"/>
		 		<input type = "text" class = "pagedisplay">

		 		<select class = "pagesize">
		 			<option selected = "selected" value = "20">5</option>
		 			<option  value = "30">30</option>
		 			<option  value = "50">50</option>
		 		</select> 		
           </form>
       </div>
       <hr>
	
		
</div>
</div> 



					</div>

					 
					
					
</form><br>
				        
				</div>
				</div>	<hr>
	
	</body>
		</html>