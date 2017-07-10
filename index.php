
<!DOCTYPE html>
<html>
<head>
	<title>Personal Date Sheet</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="css/custom.css">
<body>
<div class = "container">
	<div class = "col-lg-12 col-md-12 column-header">
			<h1 class = "module">Personal Data Sheet</h1>
			<p class = "small-text"></p>
		<div class = "col-sm-4 pull-right">
			<p><label>CS ID No.</label>	<input type = "text" class = "form-control"/></p>
		</div>
	</div>
	<div class = "col-lg-12 column-container">
	<span style = "font-style:italic;">I. Personal Information</span>
	</div>
	<div class = "col-lg-12 col-md-12 col-sm-12 column-body">
		<div class = "col-lg-3 col-md-3 col-sm-3 grayscale">
			<p class = "title">SURNAME</p>
			<p class = "title">FIRST NAME</p>
			<p class = "title">MIDDLE NAME</p>
			<p class = "title">NAME EXTENSION</p>
		</div>	
		<div class = "col-lg-9 col-md-9 col-sm- whitescale">
		<form method = "POST">
			<input type = "text" class = "form-control no-border" name = "surname" >	
			<input type = "text" class = "form-control no-border" name = "firstname">	
			<input type = "text" class = "form-control no-border" name = "middlename">
			<input type = "text" class = "form-control no-border" name = "name_extension" placeholder="example SR. JR. etc..">
		</div>
	<div class = "col-lg-12 column-body">
			<div class = "col-lg-5 col-xs-5 col-md-5 birthday">
				<div class = "col-lg-4 col-md-4 col-sm-4 grayscale2">
			<p class = "title">DATE OF BIRTH</p>
			<p class = "title">PLACE OF BIRTH</p>
			<p class = "title">SEX</p>			
		</div>	
		<div class = "col-lg-8 col-md-8 col-sm-8 whitescale">
			<input type = "date" id = "datepicker" class = "form-control no-border2" name = "date_of_birth" >	
			<input type = "text" class = "form-control no-border2" name = "place_of_birth">	
			<div class="radio-inline break">
 				 <label>
   					 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
 						MALE
 				 </label>
			</div>
			<div class="radio-inline break">
  				<label>
   					 <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
  						FEMALE
  				</label>
			</div>	
		</div>
			</div>

			<div class = "col-lg-7 col-xs-7 col-md-7" style = "padding:0px;">
				<div class = "col-lg-4 col-md-4 col-sm-4 citizenship" style = "">
					<p class = "texture">CITIZENSHIP <br/><span class="tiny">If holder of dual citizenship,<br/> please indicate the details.</span></p>				
				</div>	
				<div class = "col-lg-8 col-md-8 cit-right">
					<div class="radio-inline break">
		 				 <label>
		   					 <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
		 						Filipino
		 				 </label>
					</div>
					<div class="radio-inline break">
		  				<label>
		   					 <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
		  						Dual Citizenship
		  				</label>
					</div>	
				</div>	
			</div>
	</form>
	</div>
</div>
</body>
</html>