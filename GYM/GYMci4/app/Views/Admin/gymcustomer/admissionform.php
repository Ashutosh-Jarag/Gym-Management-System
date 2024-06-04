 
<head>
  <meta charset="utf-8">
  <title>ADDMISSION FORM</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Set page size here: A5, A4 or A3 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Set also "landscape" if you need -->
  <style>
  @page { size: A4 ;
  -webkit-print-color-adjust: exact;}
  
  @font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
 
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

section{

}

a {
  color: black;
  text-decoration: none;
}

body {
  position: relative;

  margin: 0 auto; 
  color: #000;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 15px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 10px;
  border-bottom: 5px solid #dec53c;;
}

.logo {
  float: left;
  margin-top: 0px;
}

.logo img {
  height: 104px;
}

#company {
  float: left;
  text-align: center;
}


#details {
  margin-bottom: 0px;
}

#client {
  padding-left: 6px;
  
  float: left;
  width:65%;
  margin-bottom:6px;
  
}

#client1 {
  padding: 6px;
  border: 1px solid #000;
  float: right;
  width:48%;
  background:#dec53c52 !important;
  margin-bottom:6px;
}
#client2 {
  padding: 0px;
  border: 1px solid #000;
  float: right;
  width:16%;
  background:#dec53c52 !important;
  margin-bottom:6px;
}

#client .to {
  color: #000;
}

h2.name {
  font-size: 2.2em;
  font-weight: bold;
  margin: 0px;
  color:black;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #dec53c;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #000;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
    display: block;
    overflow-x: auto;
    
}

table th,
table td {
  padding: 3.7px;
  background: #d6220e1f !important;
  text-align: center;
  border: 1px solid #000 !important;
}

table th {
  white-space: nowrap;        
  font-weight: bold;
  color:#dec53c;
}

table td {
  text-align: right;
}

table td h3{
  color: #dec53c;
  font-size: 1.0em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #dec53c;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #dec53c;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.0em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #dec53c;
  font-size: 1.0em;
  border-top: 1px solid #dec53c; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
	margin-bottom: 10px;
    margin-top: 30px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #dec53c;
	margin-bottom:20px;
	font-size: 15px;
	color:black;
	font-weight:900;
}

#notices .notice {
  font-size: 15px;
  color:#000;
}

footer {
  color: #777777;
  width: 95%;
  height: 70px;
  position: absolute;
  bottom: 0;
  border-top: 2px solid #dec53c;
  padding: 4px 0;
  text-align: center;
  line-height:4px;
}

.answer
{
color:blue;
font-weight:500;
}
.table
{
	width:50%;
	float:left;
}
.table1
{
	width:25%;
	float:left;
}

input[type="checkbox"]:checked:after {
background:white;
 border: 1px solid black;
  
 
  display: block;
  content: "\f00c";
  font-family: 'FontAwesome';
  color: black;
  font-weight: 100;
  font-size: 12px;
  text-align: center;
  border-radius: 3px;
  }
  #text_8::after {
    content: '';
    background-image: url(https://i.ibb.co/WVXqB0w/Best-Google-Froms-alternative-v8-15.png);
    display: inline-block;
    height: 3px;
    background-size: 220px;
    background-repeat: no-repeat;
  width: 220px;}

  </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 " >

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
	<div class="" id="printDiv">
		<button id="print" class="" type="button" onclick="printFun();" style="background: #dec53c; padding: 15px;width: 100%;color: white;"> <span><i class="fa fa-print"></i> CLICK HERE TO - PRINT ADDMISSION FORM OR SAVE ADDMISSION FORM PDF</span> </button>
    </div>
	<section class="sheet padding-10mm" style="padding:5mm !important;">

	<header class="clearfix">
      <div class="logo">
			<img src="<?php echo base_url('661.png')?>" alt="">
      </div>
      <div id="company">
			<h2 class="name">GURUDATTA FITNESS CENTER</h2>
      <div><br>
			<span style="font-size:15px;">                            
											3rd Floor, K.K.Sankpal Complex, Main Road Uchagaon Kolhapur-416003
            </span>
	  </div><br>
        
      <div><a href="#">*EMAIL:-gurudattafitnesscenter@gmail.com
                            </a> &nbsp&nbsp <a href="#">*PHONE NO:-73042 25952</a></div>
      </div>
	</header>
	
	
    <main>
		 	 
      <div id="details" class="clearfix">
		<div id="details" class="clearfix">
			<div id="client1">
				<div class="to"><span style="font-weight:900;font-size:15px;"><b>Admission Form No:- </span><span><?php echo $printData['id']; ?></span>  </b></div>
            </div>

			<div id="client1">
				<div class="to"><span style="font-weight:900;font-size:15px;"><a href=""><b>Admission Date:-</span><?php echo $printData['joindate']; ?>   </b></a></div>
            </div>
		</div>
		
		
		
	
<div style="width:100%; display:flex;">

		<div style="width:70%;">
		<h3 style="color:black;">PERSONAL DETAILS</h3>	
				<div style="width:100%;Float:left;">
					<div style="width:25%;float:left;"><span style="font-weight:900;font-size:16px;">Customer Name:- </span></div>
				 	<div  style="width:75%;float:left;"><span class="answer"><?php echo $printData['customername']; ?></span></div>
				</div>

				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Date of Birth:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['date']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Gender:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['gender']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Phone No:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['phoneno']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Aadhar No:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['aadharno']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Email:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['email']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Present Address:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['address']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Occupation:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['occupation']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">City:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['city']; ?></span></div>
				</div>
	 
		</div>
		<div style="width:30%;float:right;">
			 
						<div id="studphoto" class="to" style="font-weight:900;font-size:22px;height:131px; width:134px; "> 
							<img src="<?php echo base_url('images/upload/gymcustomer/').'/'.$printData['id'].'/'.$printData['customerimage']?>" style="height:131px; width:134px; ">
						</div>
			 
		</div>
</div>	<br>	
		
		
		<div id="client" style=" width:98%; border-top:2px solid #dec53c;">
		<h3 style="color:black;">BRANCH DETAILS</h3>
		<div style="width:100%;">
		 
		
				<div style="width:100%;Float:left;">
					<div style="width:25%;float:left;"><span style="font-weight:900;font-size:16px;">Branch Name:- </span></div>
				 	<div  style="width:75%;float:left;"><span class="answer"><?php echo $printData['branchname']; ?></span></div>
				</div>

				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Instructor Name:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['instructorname']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Program Name:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['programname']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Joining Date:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['joindate']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Program Time:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['programtime']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Package Joined For:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['package']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Membership:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['member']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">Place:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['place']; ?></span></div>
				</div>
				<div class="table">
					<div class="table"><span style="font-weight:900;font-size:16px;">References:- </span></div>
				 	<div  class="table"><span class="answer"><?php echo $printData['reference']; ?></span></div>
				</div>
		</div>
		 
		</div>
		<div id="client" style=" width:98%; border-top:2px solid #dec53c;">
		<h3 style="color:black;">MEDICAL DETAILS</h3>
		<div><span style="font-weight:900;font-size:16px;">Blood Group:-</span>&nbsp;<span class="answer"><?php echo $printData['bloodgroup']; ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<span style="font-weight:900;font-size:16px;">Height:-</span>&nbsp;<span class="answer"><?php echo $printData['height']; ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<span style="font-weight:900;font-size:16px;">Weight:-</span>&nbsp;<span class="answer"><?php echo $printData['weight']; ?></span></div><br>
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;">1.Have you ever or do you have any of the following</h4>
			<div style="width:100%;">
			<div class="table1">
			<input type="checkbox" name="heart" value="Heart Disease" <?php if($printData['heart'] == "Heart Disease"){ echo ' checked="true"'; } ?>> 
			<label class="form-check-label" for="check1">Heart Disease</label> </div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="asthma" name="asthma" value="Asthma"  <?php if($printData['asthma'] == "Asthma"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check2">Asthma</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="gout" name="gout" value="Gout"  <?php if($printData['gout'] == "Gout"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check3">Gout</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="cardio" name="cardio" value="Cardiovascular condition"  <?php if($printData['cardio'] == "Cardiovascular condition"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">Cardiovascular condition</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="diabetes" name="diabetes" value="Diabetes" <?php if($printData['diabetes'] == "Diabetes"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check2">Diabetes</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="fainting" name="fainting" value="Fainting" <?php if($printData['fainting'] == "Fainting"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check3">Fainting</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="dizziness" name="dizziness" value="Dizziness" <?php if($printData['dizziness'] == "Dizziness"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check1">Dizziness</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="arthritis" name="arthritis" value="Arthritis" <?php if($printData['arthritis'] == "Arthritis"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check2">Arthritis</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="infection" name="infection" value="Infectious Disease" <?php if($printData['infection'] == "Infectious Disease"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check3">Infectious Disease</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="blackouts" name="blackouts" value="Blackouts" <?php if($printData['blackouts'] == "Blackouts"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check1">Blackouts</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="fits" name="fits" value="Epilepsy/Fits" <?php if($printData['fits'] == "Epilepsy/Fits"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check1">Epilepsy/Fits</label></div>
			<div class="table1">
			<input type="checkbox" class="form-check-input" id="pressure" name="pressure" value="High/Low Blood Pressure" <?php if($printData['pressure'] == "High/Low Blood Pressure"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check2">High/Low Blood Pressure</label></div>
			<div style="width:25%;float:left;">
			<input type="checkbox" class="form-check-input" id="familyhx" name="familyhx" value="Family Hx of heart Disease" <?php if($printData['familyhx'] == "Family hx of heart Disease"){ echo ' checked="true"'; } ?>  >
			<label class="form-check-label" for="check3">Family Hx of heart Disease</label></div>
			<div style="width:75%;float:left;">
			
			<input type="checkbox" class="form-check-input" id="other" name="other" value="Other" <?php if($printData['other'] == "Other"){ echo ' checked="true"'; } ?>  >
			
			<label class="form-check-label" for="check2">Other:&nbsp;</label><span class="answer"  style="text-decoration:underline;"><?php echo $printData['otherdesc']; ?></span> 	<br>		
			<!--<hr style="width:75%; margin-top:0px;margin-bottom:0px;">-->
			 </div>
			</div>
			<div>
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;">2.Do you have any problems/injuries in the follow areas?(please tick and explain to the best of your ability)</h4>
			
			<input type="checkbox" class="form-check-input" id="knees" name="knees" value="Knees" <?php if($printData['knees'] == "Knees"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">Knees</label>&emsp;&emsp;&emsp;
			<input type="checkbox" class="form-check-input" id="lowerback" name="lowerback" value="Lower Back" <?php if($printData['lowerback'] == "Lower Back"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check2">Lower Back</label>&emsp;&emsp;&emsp;
			<input type="checkbox" class="form-check-input" id="neck" name="neck" value="Neck/Shoulder" <?php if($printData['neck'] == "Neck/Shoulder"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">Neck/Shoulder</label>&emsp;&emsp;&emsp;
			<input type="checkbox" class="form-check-input" id="hips" name="hips" value="Hips/Pelvis" <?php if($printData['hips'] == "Hips/Pelvis"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">Hips/Pelvis</label>&emsp;&emsp;&emsp;
			<input type="checkbox" class="form-check-input" id="flexibility" name="flexibility" value="Flexibility" <?php if($printData['flexibility'] == "Flexibility"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">Flexibility</label>&emsp;&emsp;&emsp;
			<input type="checkbox" class="form-check-input" id="others" name="others" value="Others" <?php if($printData['others'] == "Others"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">Others</label><br><br> 
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;">3.Are you pregnant?</h4>
			<input type="checkbox" class="form-check-input" id="yes" name="yes" value="Yes" <?php if($printData['yes'] == "Yes"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">Yes</label>&emsp;&emsp;&emsp;
			<input type="checkbox" class="form-check-input" id="no" name="no" value="No" <?php if($printData['no'] == "No"){ echo ' checked="true"'; } ?> >
			<label class="form-check-label" for="check1">No</label>
			
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;" >If Yes how many weeks :- &nbsp;												
			<span class="answer"><?php echo $printData['weeks'];?></span> </h4><br>
			
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;">4. Are you currently doing any physical activity,what and how many times per week?&nbsp;																						
			<span class="answer"> <?php echo $printData['physical'];?></span></h4>		<br>																												
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;">5. Have you had surgery in the last 5 years,if yes,when and what?&nbsp;
			<span class="answer"> <?php echo $printData['surgery'];?></span></h4><br>
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;">6. Do you smoke,if yes how many per day,and for how long have you smoked? &nbsp;
			<span class="answer"> <?php echo $printData['smoke'];?></span></h4><br>
			<h4 style="color:black;margin-bottom:0px;margin-top:0px;">7. Are you on any medication,if yes,what and when do you take?&nbsp;
			<span class="answer"> <?php echo $printData['medication'];?></span></h4><div>
		</div>
		
	</div><br>
	
 
	<div id="client" style=" width:98%; border-top:2px solid #dec53c;"></div><br>
		
	    <div id=" ">
			
			
			<div class="notice" style="font-size:14px;"><b> NOTE:-The information I provided in this application are true and correct. The supporting documents attached are authentic.</b></div>
			<br>
			<div class="notice" style="text-align:center; border-bottom:3px double #dec53c;"> </div>
        </div>
		<br>
		<div id="client1" style="width: 175px; height:40px;">
			<div id="signphoto" class="to" style="width:100%; height:100%;"> </div>
        </div>
		 
		 
    </main>
</section>
 
<script>
	function printFun()
	{
		document.getElementById("printDiv").style.display="none";
		window.print();
		
	}
</script>
  
</body>
    
</html>