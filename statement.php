<?php 
include('conn.php');

$abc1 = array();
$a1=1;
$textvalue;
while($a1 < 10)
{ 
    $abc12 = $_POST['radioname'.$a1]; 
    $a1++;
    array_push($abc1, $abc12 );
    
}
//var_dump($abc1);echo"<br>";

 $vals1 = array_count_values($abc1);
//var_dump($vals1);echo"<br>";

$maxkeysval = max(array_keys($vals1));
//var_dump($maxkeysval);echo"<br>";
//echo$maxkeysval;
 
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
                <h1>Select the one statement that sounds most like you</h1>
            </div>
         <form action="answer2.php" method="post" id="target">
		 <input type="hidden" name="name" value="<?php echo $name ?>">
		 <input type="hidden" name="email" value="<?php echo $email ?>">
		 <input type="hidden" name="phone" value="<?php echo $phone ?>">
		<input type="hidden" name="coachid" value="<?php  $coachid = 1; echo $coachid; ?>">
            <div class="main-content common-space">
                 <?php
		     $a=1;
		    foreach($abc1 as $key =>$value){
		       // var_dump($key);
		        // var_dump($value);
        		  //  if($key == 0 ){
        		  //      $key =1;
        		  //  }
		        if($value == $maxkeysval){
		            $key++;
		            
                  $sql1 = "SELECT * FROM 9parag where id='$key'";
                $result1 = $conn->query($sql1);
                $totalrow=mysqli_num_rows($result1);
               
                while($row1 = $result1->fetch_assoc()) {
                  
                  ?>
                <div class="instructions">
                    <div class="heading">
                       <h2>  <?php echo"Statement ". $a++ ; ?></h2> 
                    </div>
                    <div class="desc">
                        <p>  <?php echo $row1["description"];  ?>
                        </p>
                    </div>
                    <div class="answer">
                        <div class="statement-check">
                          <input type="radio" class="statement-radio" id="redi<?php echo $key ?>" style="opacity: 0;" name="radioname"  value="<?php echo $key ?>" />
                          <span class="statement-ans" id="<?php echo $key ?>">This sounds most like me</span>
                         </div>
                    </div>
                   
                </div>
                 <hr style="border-bottom: 1px solid #e0e0f2;border-top: 0;border-left: 0; border-right: 0; margin-bottom: 3%;">
                	<?php
           
               }
		        }
		      }
        ?>
        
              </form>
                
                <button class="next" id="next" >Next</button>
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
                        alert('Please select one statment.');
                        return false;
                    }
                
            });
        
        // $(document).ready(function () {
            $(".statement-ans").on('click',function(){
                var id =$(this).attr('id');
                //alert(id);
                $("#redi"+id).prop("checked", true);
                $(".statement-ans").removeClass("ButtonClicked");
                $(this).addClass("ButtonClicked");
            });
        // });
        </script>
    </body>
</html>
