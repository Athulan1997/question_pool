

<?php
session_start();
include "include/db.php";


$sql ="SELECT * FROM pdf where course_id='".$_GET['course_id']."'";
$result=mysqli_query($conn,$sql);


?>

    <!DOCTYPE html>
    <html>
            <head>
                    <title>Question Pool</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href = "new.css" rel = "stylesheet">
                    <link href = "styles.css" rel = "stylesheet">
            </head>
            <body style="background-color:LightSlateGrey;">

              <div class="modal-header" style="padding:0px 0px 0px 0px; background-color:#274156;border:0px;border-collapse:collapse;margin-bottom:0px" >
                <h1 style="font-size:100%;font-family:Segoe, 'Segoe UI', Calibri, Arial, sans-serif;color:Lavender;padding:10px 0px;"><<?php if (isset($_SESSION['name'])) {
   echo 'welcome ' .$_SESSION['name'];
} else {
echo 'Sorry, You are not logged in.';
} ?></h1>
              </div>

            <div class = "container" style="background-color:Lavender;margin-top:0px;padding-top:0px;">
              <div class="modal-header" style="padding:5px 50px;margin-top:10px; background-color:#274156;color:Lavender;border-top-left-radius:6px;border-top-right-radius:6px;">
		    <h2 style="font-size:200%;">Departments</h2>
              </div>
            <div class="list-group">

              <?php
    while($result && $row = mysqli_fetch_assoc( $result ) ){
      echo
      "<a href='./course.php?course_id={$row['pdf_id']}' class='list-group-item'   >
          <h4 onMouseOver='this.style.color=\"white\"' onMouseOut='this.style.color=\"Black\"' class='list-group-item-heading'>{$row['pdf']}</h4>

      </a>";
    }
  ?>
                  </div>            </div>

            </body>
    </html>
