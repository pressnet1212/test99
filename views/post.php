<?php 


$mesage = 'Редагувати запис № ';

foreach ($result as $results){

   $id = $results['id'];
   $name = $results['name'];
   $email = $results['email'];
   $site = $results['site'];
   $public = $results['public'];
}

?>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<br>
<div class ="row">

      <div class="site-index" >
      	<div class="col-md-2"></div>
      	<a class="btn btn-primary" href="/index" role="button">Головна</a>
<a class="btn btn-primary" href="/admin" role="button">Admin</a>
      </div>

</div>
<div class ="row">
				<div class="col-md-3"></div>
					   <div class = 'col-md-5'>
					   	<h2> 
					   		
					   <?php if(isset($_POST['mesage'])){
					   	echo $_POST['mesage'];
					   } else{
					   	echo $mesage, $id;
					   }
					   ?>

					   		</h2>
					   	


					   </div>
					   </div><hr>
<div class ="row">
				<div class="col-md-3"></div>
					   <div class = 'col-md-5'>
<form  role="form" action="/post" method="post">
					 <div class="form-group ">
					  <label for="inputNme">Ім'я</label>
					  <input type="text" class="form-control" id="username" name="name" value = "<?php echo $name ?>" placeholder=" Ваше Ім'я" required>
					  
					 </div>
					  <div class="form-group">
					  <label for="inputEmail">email</label>
					  <input type="text" class="form-control" id="email" name="email" value = "<?php echo $email ?>" placeholder=" Ваш emil" required>
					  
					 </div>
					 <div class="form-group">
					  <label for="Сайт">Сайт</label>
					  <input type="text" class="form-control" id="text" name="site" value = "<?php echo $site ?>" placeholder="Сайт">
					 </div>
					  <div class="form-group 3" >
					  <label rows="3" for="Відгук">Відгук</label>
					   <textarea rows="3" class="form-control" name="public" ><?php echo $public ?></textarea>
					  
					 
					 </div>
				
					 <button type="submit" class="btn btn-primary">Редагувати</button>
					</form>
				</div>
			</div>
