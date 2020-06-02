<!DOCTYPE html>
<html lang="en"> 
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="survey">
    <div class="container">
        <div class="survey-header">
            <div class="ctf-logo">
                <img src="img/logo.png" alt="">
            </div>
            <p class="ak">BY ARFEEN KHAN</p>
        </div>
        <form action="insert.php" method="post" id="grupsubmit" class="grupsubmit" >
        <div class="survey-form">
            <h3>Fill this quick survey</h3>
            <div class="survey-box">
                <div class="survey-section" style="margin-top:0">
                    <p class="title">I am...</p>
                    <div class="coach-btn">
                        <!--<label class="radio-btn">-->
                        <!--  <input type="radio" checked="checked" name="radio">-->
                        <!--  <span class="checkmark-coach">Already a Trainer/Coach</span>-->
                        <!--</label>-->
                        <!--<label class="radio-btn">-->
                        <!--  <input type="radio" name="radio">-->
                        <!--  <span class="checkmark-coach">Want To Be A Trainer/Coach</span>-->
                        <!--</label>-->
                        <button type="button" class="alreadycoach commonclass" id="alreadycoach" >Trainer/Coach</button>
                        <input type="hidden" name="iam" id="alreadycoach1" value="" required>
                        <button type="button" class="wanttocoach commonclass" id="BusinessOwner" >Business Owner</button>
                         <button type="button" class="wanttocoach commonclass" id="JobOwner" >Job Owner</button>
                          <button type="button" class="wanttocoach commonclass" id="Student" >Student</button>
                          <button type="button" class="wanttocoach commonclass" id="somethingelse" >Something else</button>
                    </div>
                    <textarea rows="4" cols="50" name="comment" placeholder="If anything else, type here..." required></textarea>
                </div>
            
            
            
                <div class="survey-section" id="learn">
                    <p class="title">What would you like to learn more about?</p>
                    <p class="desc">Select one or more options that apply</p>
                    <label class="check-title">Change your career to one with better prospects
                      <input type="checkbox" name="type"  value="Change your career to one with better prospects" >
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Become a trainer
                      <input type="checkbox" name="type"  value="Become a trainer">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Grow your training business
                      <input type="checkbox" value="Grow your training business " name="type" >
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Increase your financial income
                      <input type="checkbox" name="type"  value="Increase your financial income">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Increase your business sales and profits
                      <input type="checkbox"  name="type"  value="Increase your business sales and profits">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Improve your relationships with your partner
                      <input type="checkbox" name="type"  value="Improve your relationships with your partner">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Negotiation and persuasion skills
                      <input type="checkbox" name="type"  value="Negotiation and persuasion skills">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Saving and managing money
                      <input type="checkbox" name="type"  value="Saving and managing money">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Improve relationships with children
                      <input type="checkbox" name="type"  value="Improve relationships with children">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Increasing your motivation
                      <input type="checkbox" name="type"  value="Increasing your motivation">
                      <span class="checkmark"></span>
                    </label>
                    <label class="check-title">Reducing fear and anxiety
                      <input type="checkbox" name="type"  value="Reducing fear and anxiety">
                      <span class="checkmark"></span>
                    </label>
                       <label class="check-title">Improving your health and fitness
                      <input type="checkbox" name="type"  value="Improving your health and fitness">
                      <span class="checkmark"></span>
                    </label>
                </div>
           
                <div class="survey-section">
                    <p class="title">What’s the ideal outcome that you want to achieve with regards to the above? </p>
                    <p class="desc">For example, I want to land a high paying job that pays me Rs. 2 lakhs a month or I want to lose 15 kgs of weight and reach 75 KGs in weight</p>
                     <textarea rows="4" cols="50" name="outcome" placeholder="Type here..." required></textarea>
                </div>
                
                <div class="survey-section">
                    <p class="title">What’s the biggest challenge you’ve experienced with the above? What is preventing you from achieving success?</p>
                    <p class="desc">For example, most of the clients I meet can’t afford what I charge</p>
                     <textarea rows="4" cols="50" name="bchallenge"  placeholder="Type here..." required></textarea>
                </div>
                
                <div class="survey-section">
                    <h2>Personal Details</h2>
                      <label for="fname" class="personal-title">Name:<br>
                      <input type="text" id="fname" name="fname" required>
                      </label><br><br>
                      <label for="number" class="personal-title">Phone Number:<br>
                      <input type="number" id="number" name="number" required>
                      </label><br><br>
                      <label for="email" class="personal-title">Email:<br>
                      <input type="email" id="email" name="email" required>
                      </label><br><br>
                </div>
                  <input type="hidden" name="checkboxvalue" id="checkboxvalue" value="" >
                <div class="submit-btn">
                    <button onclick = "GetSelected()" >Complete my survey now</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</body>
 
<script>
 
$(document).ready(function(){
    // Get value on button click and show alert
//     $("#alreadycoach").click(function(){
//           if($(this).data('clicked', true)){
//           $(".alreadycoach").css("border"," 2px solid #2196F3")
//          $(".alreadycoach").css("background","#d2eefd")
//          $(".alreadycoach").css("color","#2196F3")
//         var str = $("#alreadycoach").text();
//         document.getElementById("alreadycoach1").value=str;
//           } 
       
//     }).dblclick(function() {
//          window.location.reload();
//         document.getElementById("alreadycoach1").value='';
// });
        
//      $("#wanttocoach").click(function(){
//           if($(this).data('clicked', true)){
//             $(".wanttocoach").css("border","2px solid #2196F3")
//           $(".wanttocoach").css("background","#d2eefd")
//           $(".wanttocoach").css("color","#2196F3")
//         var str1 = $("#wanttocoach").text();
//         document.getElementById("wanttocoach1").value=str1;
//           } 
      
//     }).dblclick(function() {
//          window.location.reload();
//         document.getElementById("wanttocoach1").value='';
// });

$(".commonclass").click(function(){
    
var id = $(this).attr('id');

            $(".commonclass").css("border"," 2px solid #555");
          $(".commonclass").css("background","#fff");
         $(".commonclass").css("color","#555");

            $("#"+id).css("border"," 2px solid #2196F3");
          $("#"+id).css("background","#d2eefd");
         $("#"+id).css("color","#2196F3");
         var str = $("#"+id).text();
         document.getElementById("alreadycoach1").value=str;
});
  
            
 
});
</script>
 <script>
  function GetSelected() {
        //Create an Array.
        var selected = new Array();
      
        //Reference the Table.
        var learn = document.getElementById("learn");
 
        //Reference all the CheckBoxes in Table.
        var chks = learn.getElementsByTagName("INPUT");
 
        // Loop and push the checked CheckBox value in Array.
        for (var i = 0; i < chks.length; i++) {
            if (chks[i].checked) {
                selected.push(chks[i].value);
            }
        }
     if (selected.length == 0) {
            alert("Please Select some value from checkbox! ");
            $('#grupsubmit').attr('onsubmit','return false;');
        } else if (selected.length > 0) {
            //alert("Selected values: " + selected.join(","));
             document.getElementById("checkboxvalue").value = selected;
             
             
        }
        
        
    };

  </script>
</html>
