

<?php
session_start();
include "include/db.php";


$sql ="SELECT * FROM course where dept_id='".$_GET['dept_id']."' ORDER BY course_id";
$result=mysqli_query($conn,$sql);

function exit_session() {
    session_unset();
    session_destroy();
}

?>

    <!DOCTYPE html>
    <html>
            <head>
                    <title>Question Pool:Courses</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "new.css" rel = "stylesheet">
                    <link href = "styles.css" rel = "stylesheet">
            </head>
            <body style="background-color:LightSlateGrey;">
<div class = "navbar navbar-inverse navbar-static-top">
              <div class = "container">


                      <a  class = "navbar-brand" style="margin:  10px 10px 10px 0px;font-size:200%;font-family:Segoe, 'Segoe UI', Calibri, Arial, sans-serif;color:Lavender;" > Question Pool</a>


                      <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                              <span class = "icon-bar"></span>
                              <span class = "icon-bar"></span>
                              <span class = "icon-bar"></span>
                      </button>

                      <div class = "collapse navbar-collapse navHeaderCollapse">

                              <ul class = "nav navbar-nav navbar-right">
                                      <li><a href = "#register" data-toggle="modal" style="margin:  10px 10px 10px 0px;"><?php if (isset($_SESSION['name'])) {
                     echo 'Welcome ' .$_SESSION['name'];
                  } else {
                  echo 'Sorry, You are not logged in.';
                  } ?></a></li>

                                      <li ><a href = "./login.php"  data-toggle="modal">
                                        <button type="button" class="btn btn-danger"
                                       style="background-color:LightSlateGrey;border:0px;" onClick="exit_session()">
                                             Logout
                                        </button></a></li>
                                      <!--<li><a href = "#register" data-toggle="modal">Register</a></li>-->

                              </ul>

                      </div>

              </div>
</div>

            <div class = "container" style="background-color:Lavender;margin-top:0px;padding-top:0px;">
              <div class="modal-header" style="padding:5px 50px;margin-top:10px; background-color:#274156;color:Lavender;border-top-left-radius:6px;border-top-right-radius:6px;">
		    <h2 style="font-size:200%;">Courses</h2>
              </div>
            <div class="list-group">

              <?php
    while($result && $row = mysqli_fetch_assoc( $result ) ){
      echo
      "<a href='./course.php?course_id={$row['course_id']}' class='list-group-item'   >
          <h4 onMouseOver='this.style.color=\"white\"' onMouseOut='this.style.color=\"Black\"' class='list-group-item-heading'>{$row['course_name']}</h4>

      </a>";
    }
  ?>
                  </div>            </div>

            </body>
    </html>
