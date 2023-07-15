<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="FEEDBACK.CSS" class="rel">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			
			//Reg Ex Declaration - Globaly.
			var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
			var $FullNameRegEx = /^([a-zA-Z ]{2,40})$/;
			var $BankAccountNameRegEx = /^([a-zA-Z ]{2,60})$/;
			var $PasswordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,12}$/;

			var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
			var $ConNoRegEx = /^([0-9]{10})$/;
			var $AgeRegEx = /^([0-9]{1,2})$/;
			var $AadhaarNoRegEx = /^([0-9]{12})$/;
			var $GSTNoRegEx=/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
			var $IndianDrivingLicenseNoRegEx = /^([A-Z]{2,3}[-/0-9]{8,13})$/;
			var $IndianVehicleRegNoRegEx = /^([A-Z]{2}[0-9]{1,2}[A-Z]{1,3}[0-9]{1,4})$/;
			var $PincodeRegEx = /^[1-9][0-9]{5,6}$/;
			var $PANNoRegEx = /^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/;
			var $IFSCCodeRegEx = /^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/;
			var $BankAccountNoRegEx = /^([0-9]{9,18})$/;
			var $LatitudeLongitude=/^(-?(?:1[0-7]|[1-9])?\d(?:\.\d{1,8})?|180(?:\.0{1,8})?)$/;
			
			$(document).ready(function(){

				$("#name").blur(function(){
					$("#TxtNameValidation").empty();
					if($(this).val()=="" || $(this).val()==null){
						$("#TxtNameValidation").html("(*) Name required..!!");
					}
					else{
						if(!$(this).val().match($FullNameRegEx)){
							$("#TxtNameValidation").html("(*) Invalid name..!!");
						}
					}
				});

				$("#name").keypress(function(e){
					$("#TxtNameValidation").empty();
					var Flag=((e.which>=65 && e.which<=90) || (e.which>=97 && e.which<=121));
					if(Flag==false){
						$("#TxtNameValidation").html("Invalid Input..!!");
					}
					return Flag;
				});

				$("#contact").blur(function(){
					$("#TxtContactNoValidation").empty();
					if($(this).val()=="" || $(this).val()==null){
						$("#TxtContactNoValidation").html("(*) Contact no. required..!!");
					}
					else{
						if(!$(this).val().match($ConNoRegEx)){
							$("#TxtContactNoValidation").html("(*) Invalid contact no..!!");
						}
					}
				});

				$("#contact").keypress(function(e){
					$("#TxtContactNoValidation").empty();
					var Flag=(e.which>=48 && e.which<=57);
					if(Flag==false){
						$("#TxtContactNoValidation").html("Invalid Input..!!");
					}
					return Flag;
				});


				$("#email").blur(function(){
					$("#TxtEmailIdValidation").empty();
					if($(this).val()=="" || $(this).val()==null){
						$("#TxtEmailIdValidation").html("(*) Email id required..!!");
					}
					else{
						if(!$(this).val().match($EmailIdRegEx)){
							$("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
						}
					}
				});

				$("#msg").blur(function(){
					$("#TxtContactMsgValidation").empty();
					if($(this).val()=="" || $(this).val()==null){
						$("#TxtContactMsgValidation").html("(*) Contact message required..!!");
					}
					else{
						if($("#msg").val().length>300){
							$("#TxtContactMsgValidation").html("(*) Invalid contact message..!!");
						}
					}
				});

				var TxtNameFlag=false,TxtContactNoFlag=false,TxtEmailIdFlag=false,TxtContactMsgFlag=false;

				$("#BtnSubmit").click(function(){
					$("#TxtNameValidation").empty();
					if($("#name").val()=="" || $("#name").val()==null){
						$("#TxtNameValidation").html("(*) Name required..!!");
						TxtNameFlag=false;
					}
					else{
						if(!$("#name").val().match($FullNameRegEx)){
							$("#TxtNameValidation").html("(*) Invalid name..!!");
							TxtNameFlag=false;
						}
						else{
							TxtNameFlag=true;
						}
					}
					$("#TxtContactNoValidation").empty();
					if($("#contact").val()=="" || $("#contact").val()==null){
						$("#TxtContactNoValidation").html("(*) Contact no. required..!!");
						TxtContactNoFlag=false;
					}
					else{
						if(!$("#contact").val().match($ConNoRegEx)){
							$("#TxtContactNoValidation").html("(*) Invalid contact no..!!");
							TxtContactNoFlag=false;
						}
						else{
							TxtContactNoFlag=true;
						}
					}
					$("#TxtEmailIdValidation").empty();
					if($("#email").val()=="" || $("#email").val()==null){
						$("#TxtEmailIdValidation").html("(*) Email id required..!!");
						TxtEmailIdFlag=false;
					}
					else{
						if(!$("#TxtEmailId").val().match($EmailIdRegEx)){
							$("#TxtEmailIdValidation").html("(*) Invalid email id..!!");
							TxtEmailIdFlag=false;
						}
						else{
							TxtEmailIdFlag=true;
						}
					}
					$("#TxtContactMsgValidation").empty();
					if($("#msg").val()=="" || $("#msg").val()==null){
						$("#TxtContactMsgValidation").html("(*) Contact message required..!!");
						TxtContactMsgFlag=false;
					}
					else{
						if($("#msg").val().length>300){
							$("#TxtContactMsgValidation").html("(*) Invalid contact message..!!");
							TxtContactMsgFlag=false;
						}
						else{
							TxtContactMsgFlag=true;
						}
					}
					if(TxtNameFlag==true && TxtContactNoFlag==true && TxtEmailIdFlag==true && TxtContactMsgFlag==true){
						$("input,textarea").val("");
						alert("Form submitted successfully..!!");
					}
					else{
						alert("Invalid Input..!!");
					}
				});

			});
			
		</script>
</head>
<body>
    <form action="feeddb.php" method="post">
    <div class="container">
        <div class="row">
                <h1>Feedback</h1>
        </div>
        <div class="row">
                <h4 style="text-align:center">We'd love to hear from you!</h4>
        </div>
        <div class="row input-container">
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" name="name" required />
                        <label>Name</label> 
                        <small id="TxtNameValidation"></small>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input type="text" name="email" required />
                        <label>Email</label> 
                        <small id="TxtEmailIdValidation"></small>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input" style="float:right;">
                        <input type="text" name="contact" required />
                        <label>Phone Number</label> 
                        <small id="TxtContactNoValidation"></small>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <textarea required name="msg"></textarea>
                        <label>Message</label>
                        <small id="TxtContactMsgValidation"></small>
                    </div>
                </div>
                <!-- <div class="col-xs-12">
                    <div class="btn-lrg submit-btn">SUBMIT</div>
                     <button class="col-xs-12">send</button> 
                </div> -->
                <div class="col-xs-12">
                    <button class="btn-lrg submit-btn">Send</button>
                </div>
        </div>
    </div>
</Form>
    
</body>
</html>