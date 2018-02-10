 
<?php
     session_start();     
     $_SESSION['username'] = $user_name;
    ?>
<?php 
session_start();     
if (!isset($_SESSION['username'])) {
   echo 'Welcome, '.$_SESSION['username']; 
} else {
echo 'Sorry, You are not logged in.';
}
?>
   
 <!DOCTYPE html>
    <html>
            <head>
                    <title>NITC QuestionBank</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "bootstrap.min.css" rel = "stylesheet">
                    <link href = "styles.css" rel = "stylesheet">
            </head>
            <body>
                   
                    <div class = "navbar navbar-inverse navbar-static-top">
                            <div class = "container">
                                  
                                    <a href = "./index.php" class = "navbar-brand" style="margin:  10px 10px 10px 0px;" >Question Pool</a>
                                    
                                   <a href = "./index.php" class = "navbar-brand" style="margin:  10px 10px 10px 0px;" >Question Pool</a>
                            </div>
                    </div>
                   
                   
            <div class = "container">
		    <h2>Departments</h2>
            <div class="list-group">
                    <a href="./department.php?DP_ID=GN" class="list-group-item">
                        <h4 class="list-group-item-heading">Common Courses</h4>
                            <p class="list-group-item-text"></p>
                    </a>
                    <a href="./department.php?DP_ID=AR" class="list-group-item">
                        <h4 class="list-group-item-heading">Architecture</h4>
                       
                    </a>
                    <a href="./department.php?DP_ID=BT" class="list-group-item">
                        <h4 class="list-group-item-heading">Biotechnology</h4>
                           
                    </a>
                    <a href="./department.php?DP_ID=CE" class="list-group-item">
                        <h4 class="list-group-item-heading">Civil Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=CH" class="list-group-item">
                        <h4 class="list-group-item-heading">Chemical Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=CS" class="list-group-item">
                        <h4 class="list-group-item-heading">Computer Science and Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=EC" class="list-group-item">
                        <h4 class="list-group-item-heading">Electronics & Communication Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=EE" class="list-group-item">
                        <h4 class="list-group-item-heading">Electrical & Electronics Engineering</h4>
                                  </a>
                   
                    <a href="./department.php?DP_ID=ME" class="list-group-item">
                        <h4 class="list-group-item-heading">Mechanical Engineering</h4>
                            
                    </a>
                    <a href="./department.php?DP_ID=PE" class="list-group-item">
                        <h4 class="list-group-item-heading">Production Engineering</h4>
                                 </a></div>            </div>
                   
                   
                    <div class = "modal fade" id = "login" role = "dialog">
                        <div class = "modal-dialog">
                            <div class = "modal-content">
                               <form enctype="multipart/form-data"  id="Login_form" action="./admin.php" method="POST" class="form-horizontal" >
                                    <div class = "modal-header">
                                        <h4>Login</h4>
                                    </div>
                                    <div class = "modal-body">
                                   
                                        <div class = "form-group">
                                           
                                            <label for = "contact-email" class = "col-lg-2 control-label">Email:</label>
                                            <div class = "col-lg-10">
                                               
                                                <input type = "text" name ="userid" class = "form-control" id = "contact-email" placeholder = "you@example.com">
                                               
                                            </div>
                                           
                                        </div>
                                        
					
                                        <div class = "form-group">
                                           
                                            <label for = "contact-name" class = "col-lg-2 control-label">Password:</label>
                                            <div class = "col-lg-10">
                                               
                                                <input type = "password" name="password" class = "form-control" id = "contact-name" placeholder = "">
                                               
                                            </div>
                                           
                                        </div>

					
				
                                       
					                                  
                                    </div>
                                    <div class = "modal-footer">
                                	<a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                                        <button class = "btn btn-primary" type = "submit" name="submit" value="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>




		    <div class = "modal fade" id = "register" role = "dialog">
                        <div class = "modal-dialog">
                            <div class = "modal-content">
                                <form class = "form-horizontal">
                                    <div class = "modal-header">
                                        <h4>About Us</h4>
                                    </div>
                                    <div class = "modal-body">
                                   <p>Developed By <b>Aashish Duddukuri</b> and <b>Arpit Augustine</b>  Batch of 2012 BTech CSED</p>
                                   <p>For Further Details and suggestions contact Student Affairs Council</p>
                                   <ul>
                                   	<li>Vijil Vinayan (Academic Secretary at SAC)</li>
                                   </ul>
                                   <p>To Contribute to the question bank mail us at nitcqb@gmail.com</p>
                                        
                                       
					
                                    <div class = "modal-footer">
                                <a class = "btn btn-default" data-dismiss = "modal">Close</a>    
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                    <script src = "js/bootstrap.js"></script>
                   
            </body>
    </html>
