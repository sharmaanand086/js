<?php
include('conn.php'); 
$name 		= 	$_POST['name'];
$email		= 	$_POST['email'];
$phone 		= 	$_POST['phone'];

 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Personality-assessment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header common-space">
                <h1>Rate each statement</h1>
            </div>
             <form action="statement.php" method="post" id="target">
    		 <input type="hidden" name="name" value="<?php echo $name ?>">
    		 <input type="hidden" name="email" value="<?php echo $email ?>">
    		 <input type="hidden" name="phone" value="<?php echo $phone ?>">
    		<input type="hidden" name="coachid" value="<?php  $coachid = 1; echo $coachid; ?>">
              <div class="main-content common-space">
                   <?php
                    $sql1 = "SELECT * FROM 9parag ORDER BY id ASC";
                    $result1 = $conn->query($sql1);
                    $totalrow=mysqli_num_rows($result1);
                    $a=1;
                    while($row1 = $result1->fetch_assoc()) {
                      ?>
                <div class="instructions">
                    <div class="heading">
                       <h2> </h2> 
                    </div>
                    
                    
                    
                    <table>
                
        
<tr><td><h3><br><?php  echo $a++;?>. <?php echo $row1["description"];  ?></h3></td></tr>  
  <tr><td><input required type="radio" name="userans<?php echo $row1["id"]; ?>" value="<?php echo $row1["option1"]; ?>">&nbsp;<?php echo $row1["option1"]; ?><br>
  <tr><td><input required type="radio" name="userans<?php echo $row1["id"]; ?>" value="<?php echo $row1["option2"]; ?>">&nbsp;<?php echo $row1['option2'];?></td></tr>
  <tr><td><input required type="radio" name="userans<?php echo $row1["id"]; ?>" value="<?php echo $row1["option3"]; ?>">&nbsp;<?php echo $row1['option3']; ?></td></tr>
  <tr><td><input required type="radio" name="userans<?php echo $row1["id"]; ?>" value="<?php echo $row1["option4"]; ?>">&nbsp;<?php echo $row1['option4']; ?></td></tr>
  <tr><td><input required type="radio" name="userans<?php echo $row1["id"]; ?>" value="<?php echo $row1["option5"]; ?>">&nbsp;<?php echo $row1['option5']; ?></td></tr>
  </table>
  
  
                </div>
         <?php
        }
        ?>
                
                <button class="next" id="next"  >Next</button>
            </div>
        </div>
        <script>
        
$('#next').click(function(){
    
var check = true;
        $("input:radio").each(function(){
            var name = $(this).attr("name");
            if($("input:radio[name="+name+"]:checked").length == 0){
                check = false;
            }
        });
        
        if(check){
            $('#target').submit();
            //alert('One radio in each group is checked.');
        }else{
            alert('Please select one rating in each statment.');
            return false;
        }
    
});

        </script>
    </body>
</html>
