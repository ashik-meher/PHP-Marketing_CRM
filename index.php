<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Marketing CRM  </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Latest compiled and minified CSS -->
	
	<link rel="shortcut icon" type="image/png" href="image/crm.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="jquery.elevator.css">


<link href="css/crm.css" rel="stylesheet">

<style>
th{
	border:1px solid black;
	border-top:1px solid black;
	background:#352E2E;
	color:white;important!
}
</style>
 
  </head>
  
  <body>
  
    <br>
    <h1 style="text-align:center;font-size:40px;color:black;">Marketing CRM(SPA)</h1>
	<br><br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<!--You write here-->
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Soft Code CRM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Follow-up</a></li>
      <li><a href="#">Database</a></li>
	  <li><a href="#">IMPORTANT</a></li>
	  <li><a href="todo.html">To Do List</a></li>
    </ul>
	
	
	<form class="navbar-form navbar-left" action="/action_page.php">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>


    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Ashik Meher</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Another Account? </a></li>
    </ul>
  </div>
</nav>


	
	<div class="container"> 
	
	      <div class="row">
		  
		         
				 <div class="col-md-12 justify-content-center">
				 
				 <p style="font-size:15px;color:white;background:#352E2E;border:2px solid #581845 ;width:150px;padding:5px;border-radius:5px;text-align:center;box-shadow: 4px 6px #766B6B;"><?php echo date('d F, Y (l)');?></p>
				          
				          <?php require_once 'process.php';?>

				          <?php if(isset($_SESSION['message'])): ?>

				           <div class="alert alert-<?=$_SESSION['msg_type']?>"> 	
				          	   <?php echo $_SESSION['message'];
				          	         unset($_SESSION['message']);
				          	    ?>
				           </div>

				         <?php endif ; ?>
						  

						  <?php
						      
							   $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
							   $sql="SELECT * FROM data";
							   $result= $mysqli->query($sql) or die($mysqli->error);
							   //pre_r=($result);
							   //pre_r($result->fetch_assoc());

						   ?>

                           <div class="row justify-content-center"> 

                           	  <table class="table" style="font-size:14px;">


                           	  	 <thead>
                           	  	 	<tr>
                           	  	 		 <th style="color:white;border-left:0px;">Name</th>
                           	  	 		 <th style="color:white">Location</th>
										 <th style="color:white">Mail</th>
										 <th style="color:white">Contact</th>
										 <th style="color:white">Last Called</th>
                           	  	 		 <th style="color:white">Next Call</th>
										 <th style="color:white;text-align:center;border-right:0px;">Remarks</th>
                           	  	 		
                           	  	 		  <th colspan="2" style="color:red;border:0px;"></th>
                           	  	 	</tr>

                           	  	 </thead>

                           	  	 <?php while($row= $result->fetch_assoc()): ?>               

                           	  	 <tr> 

                           	  	 	 <td><?php echo $row['name'] ?></td>

                           	  	 	 <td><?php echo $row['location']?></td>
									 
									 <td><?php echo $row['mail'] ?></td>
									  
									 <td><?php echo $row['contact_number'] ?></td>
									 
									 <td><?php echo $row['last_call'] ?></td>

                           	  	 	 <td><?php echo $row['next_call']?></td>
									 
									 <td><?php echo $row['remark'] ?></td>

                           	  	 	
                           	  	 	 <td>
                           	  	 	 	
                           	  	 	 	<a href="index.php?edit=<?php echo $row['id'];?>" 
                           	  	 	 		class="btn btn-info">Edit</a>

                           	  	 	 	<a href="process.php?delete=<?php echo $row['id'];?>"
                           	  	 	 		class="btn btn-danger">Delete</a>



                           	  	 	 </td>




                           	  	 </tr>
                           	  	<?php endwhile; ?>
                           	  	




                           	  </table>

                           </div>




							  
                          <?php                                                 
							   function pre_r( $array){
							   	echo '<pre>';
							   	print_r($array);
							   	echo '</pre>';
							   }
							  
						  
						   ?>
						   
						   
						   <p style="font-size:17px;color:white;background:#352E2E;border:5px solid #581845 ;width:130px;padding:5px;border-radius:5px;text-align:center;box-shadow: 4px 6px #766B6B;">Today<br><?php echo date('d | m | Y');?></p>


						  <form action="process.php" method="post">
						  	<input type="hidden" name="id" value="<?php echo $id; ?>"> 
								 <div class="form-group">
								 <label>Company Name</label>
								 <input type="text" name="name" class="form-control" value="<?php echo $name;?>" placeholder="Enter name" />
								 
								 </div>
								 
								 <div class="form-group">
								 <label>Factory Location / Corporate Office</label>
								 <input type="text" name="location" class="form-control" value="<?php echo $location;?>" placeholder="Location"  />
								 
								 </div>
								 
								 <div class="form-group">
								 <label>Mail</label>
								 <input type="text" name="mail" class="form-control" value="<?php echo $mail;?>" placeholder="abc@mail.com"  />
								 
								 </div>
								 
								 <div class="form-group">
								 <label>Contact Number</label>
								 <input type="text" name="contact_number" class="form-control" value="<?php echo $contact_number;?>" placeholder="Contact Person & Number"  />
								 
								 </div>
								 
								 <div class="form-group">
								 <label>Last Called</label>
								 <input type="text" name="last_call" class="form-control" value="<?php echo $last_call;?>" placeholder="<?php echo date('d - m - Y ');?>" />
								 
								 </div>
								 
								 <div class="form-group">
								 <label>Next Call Date</label>
								 <input type="text" name="next_call" class="form-control" value="<?php echo $next_call;?>" placeholder="Next Call Date" />
								 
								 </div>
								 
								 <div class="form-group">
								 <label>Remarks</label>
								 <input type="textbox" name="remark" class="form-control input-lg" value="<?php echo $remark;?>" placeholder="Remarks" />
								 
								 </div>
								 
								 <div class="form-group" >

								 	<?php if ($update ==true):  ?>

								 		 <button type="submit" name="update" class="btn btn-info"/>UPDATE</button>

								 	<?php else: ?>
								 	
								 <button type="submit" name="save" class="btn btn-primary"/>SAVE</button>

								<?php endif; ?>


								 </div>
								 
								 
						  
						  
						  
						  
						  
						  
						  </form>
						  
						
				 
				 
				 
				 
				 </div>
		  
		  
		  
		  
		  </div>
	
	
	
	</div>
	
	
	<div id="top-element">
        <div class="container">
            
        </div>
    </div>

<div id="bottom-element">
        <div class="container">
            
        </div>
    </div>
	
	

<script src="jquery-1.11.3.min.js"></script>

<script src="jquery.elevator.js"></script>
<script src="script.js"></script>
<script>$.elevator({
/**
a setting to enable go to top button.
@property show_top
@type Boolean
@default true
*/
show_top: true,

/**
a setting to enable go to bottom button.
@property show_bottom
@type Boolean
@default true
*/
show_bottom: true,

/**
a setting to establish an item which acts as top.
@property item_top
@type Object
@default null
*/
item_top: null,

/**
a setting to establish an item which acts as bottom.
@property item_bottom
@type Object
@default null
*/
item_bottom: null,

/**
a setting to establish the position of the elevator object.
@property align
@type String
@default 'bottom right'
*/
align: 'bottom right',

/**
a setting to establish the list of navigation items.
@property navigation
@type Object[]
@default []
*/
navigation: [],

/**
a setting to enable text for navigation items.
@property navigation_text
@type Boolean
@default false
*/
navigation_text: false,

/**
a setting to establish an extra margin for top and bottom sections.
@property margin
@type Number
@default 100
*/
margin: 100,

/**
a setting to establish the speed of animation.
@property speed
@type Number
@default 1000
*/
speed: 1000,

// options: (string) 'circle' (default) | 'rounded' | 'square'
shape: 'circle',            
         
/**
a setting to enable glass translucent effect.
@property glass
@type Boolean
@default false
*/
glass: false,

/**
a setting to enable title tooltips.
@property tooltips
@type Boolean
@default false
*/
tooltips: false,

/**
a setting to establish the callback before general movement.
@property onBeforeMove
@type Function
@default Function
*/
onBeforeMove: function(){},

/**
a setting to establish the callback after general movement.
@property onAfterMove
@type Function
@default Function
*/
onAfterMove: function(){},

/**
a setting to establish the callback before top movement.
@property onBeforeGoTop
@type Function
@default Function
*/
onBeforeGoTop: function(){},

/**
a setting to establish the callback after top movement.
@property onAfterGoTop
@type Function
@default Function
*/
onAfterGoTop: function(){},

/**
a setting to establish the callback before bottom movement.
@property onBeforeGoBottom
@type Function
@default Function
*/
onBeforeGoBottom: function(){},

/**
a setting to establish the callback after bottom movement.
@property onAfterGoBottom
@type Function
@default Function
*/
onAfterGoBottom: function(){},

/**
a setting to establish the callback before section movement.
@property onBeforeGoSection
@type Function
@default Function
*/
onBeforeGoSection: function(){},

/**
a setting to establish the callback after section movement.
@property onAfterGoSection
@type Function
@default Function
*/
onAfterGoSection: function(){}
});
</script>

	
	
  </body>
</html>