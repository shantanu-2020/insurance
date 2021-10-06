<div class="container">
  <div class="container" style="margin: 70px 0px 0px 200px">
  <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="btn btn-primary"><a href="<?php echo base_url('admin/form');?>">BASIC DETAILS</a></li>
  <li role="presentation" class="btn btn-primary"><a href="<?php echo base_url('admin/address');?>">ADDRESS</a></li>
  <li role="presentation" class="btn btn-primary"><a href="<?php echo base_url('admin/class');?>">EDUCATION DETAILS</a></li>
</ul>

</div>
<div class="container" style="margin-left: 200px">
             <?php if($this->session->flashdata('status')) : ?>
                <div class="alert alert-success" style="margin-top: 70px">
                  <?php echo $this->session->flashdata('status'); ?>
                   </div>
                 <?php endif; ?>
               </div>
  	<div class="container" style="margin: 70px 200px">
  		<form name="reg_form" action="<?php echo base_url('admin/details'); ?>" method="post" onsubmit="return validate()">
        <h3 class>BASIC DETAILS</h3>
	<div class="row">
            <div class="col-sm-4 mb-3">
            	<label for="">STAFF ID</label><br>
            	<input type="text" name="staff_id" placeholder="">
              <?php echo form_error('staff_id'); ?>
			</div>
	        <div class="col-sm-4 mb-3">
	        	<label for="">EMAIL</label><br>
				<input type="text" name="email">
        <?php echo form_error('email'); ?>
            </div>
            <div class="col-sm-4 mb-3">
            	<label for="">ALTERNATE EMAIL</label><br>
            	<input type="text" name="alternate_email">
              <?php echo form_error('alternate_email'); ?>
		  </div>
	</div>


   <div class="row">
           <div class="col-md-4 mb-3">
            	<label for="">ROLE</label><br>
				<input type="text" name="role">
        <?php echo form_error('role'); ?>
		   </div>

       <div class="col-md-4 mb-3">
	        <label for="staff_type">STAFF TYPE</label><br>
<select name="staff_type" id="staff_type">
   <option value="full time">STAFF TYPE</option>
  <option value="full time">FULL TIME</option>
  <option value="part time">PART TIME</option>
  <option value="work from home">WORK FROM HOME</option>
 
</select>
</div>
            <div class="col-md-4 mb-3">
            	<label for="">AADHAR NUMBER</label><br>
            	<input type="text" name="aadhar">
              <?php echo form_error('aadhar'); ?>
            </div>
   	</div>
   <div class="row">
           <div class="col-md-4 mb-3">
            	<label for="">APPOINTMENT DATE</label><br>
				<input type="date" name="appointment">
        <?php echo form_error('appointment'); ?>
			</div>
	        <div class="col-md-4 mb-3">
	        	<label for="">FIRST NAME</label><br>
				<input type="text" name="first_name">
        <?php echo form_error('first_name'); ?>
            </div>
            <div class="col-md-4 mb-3">
            	<label for="">MIDDLE NAME</label><br>
            	<input type="text" name="middle_name">
              <?php echo form_error('middle_name'); ?>
   			</div>
   	</div>
   	<div class="row">
           <div class="col-md-4 mb-3">
            	<label for="">LAST NAME</label><br>
				<input type="text" name="last_name">
        <?php echo form_error('last_name'); ?>
		   </div>
	        <div class="col-md-4 mb-3">
	        	<label for="">EXPERIENCE</label><br>
				<input type="text" name="experience">
        <?php echo form_error('experience'); ?>
            </div>
           <div class="col-md-4 mb-3">
          <label for="blood_group">BLOOD GROUP</label><br>
<select name="blood_group" id="blood_group">
   <option value="a positive">BLOOD GROUP</option>
  <option value="a positive">A Positive</option>
  <option value="a negative">A Negative</option>
  <option value="a unknown">A Unknown</option>
   <option value="b positive">B Positive</option>
    <option value="b negative">B Negative</option>
     <option value="b unknown">B Unknown</option>
      <option value="ab positive">AB Positive</option>
       <option value="ab negative">AB Negative</option>
        <option value="ab unknown">AB Unknown</option>
         <option value="o positive">O Positive</option>
         <option value="o negative">O Negative</option>
         <option value="o unknown">O Unknown</option>
         <option value="unknown">Unknown</option>
 
</select>
</div>
</div>
   
   <div class="row">
           <div class="col-md-4 mb-3">
            	<label for="">DATE OF BIRTH</label><br>
				<input type="date" name="dob">
        <?php echo form_error('dob'); ?>
			</div>
	        <div class="col-md-4 mb-3">
          <label for="cars">GENDER</label><br>
<select name="gender" id="gender">
  <option value="male">GENDER</option>
  <option value="male">MALE</option>
  <option value="female">FEMALE</option>
  
 
</select>
</div>
            <div class="col-md-4 mb-3">
    			<label for="exampleFormControlTextarea1">MEDICAL HISTORY</label><br>
    			<input type="textarea" name="medical_history" class="form_control" row=2>
          <?php echo form_error('medical_history'); ?>
  </div>

   </div>
 <div class="row">
               <div class="col-md-12 mb-3 text-center">
            	<input type="button" class="btn btn-danger" value="BACK">
            	<input type="submit" class="btn btn-success" value="SAVE" placeholder="">
            </div>
		</form>
	</div>
</div>
</div>
  </div>
   <script type="text/javascript">    
        function validate() {    
            var staff_id = document.reg_form.staff_id;    
            var email = document.reg_form.email;    
            var alternate_email = document.reg_form.alternate_email;    
            var role = document.reg_form.role;    
            var staff_type = document.reg_form.staff_type;    
            var aadhar = document.reg_form.aadhar;    
            var appointment = document.reg_form.appointment;    
            var first_name = document.reg_form.first_name;    
            var middle_name = document.reg_form.middle_name;    
            var last_name = document.reg_form.last_name;    
            var experience = document.reg_form.experience;    
            var blood_group = document.reg_form.blood_group;    
            var dob = document.reg_form.dob; 
            var gender = document.reg_form.gender;    
            var medical_history = document.reg_form.medical_history;       
    
            if (staff_id.value.length <= 0) {    
                alert("Name is required");    
                staff_id.focus();    
                return false;    
            }    
            if (email.value.length <= 0) {    
                alert("Last Name is required");    
                email.focus();    
                return false;    
            }    
            if (alternate_email.value.length <= 0) {    
                alert("Address is required");    
                alternate_email.focus();    
                return false;    
            }    
            if (role.value.length <= 0) {    
                alert("Gender is required");    
                role.focus();    
                return false;    
            }    
            if (staff_type.value == "STAFF TYPE") {    
                alert("Staff type is required");    
                staff_type.focus();    
                return false;    
            }    
            if (aadhar.value.length <= 12) {    
                alert("Aadhar number is required");    
                aadhar.focus();    
                return false;    
            }    
            if (appointment.value.length <=0) {    
                alert("Appointment date is required");    
                appointment.focus();    
                return false;    
            }  
             if (first_name.value.length <=0) {    
                alert("First name is required");    
                first_name.focus();    
                return false;    
            }   if (middle_name.value.length <=0) {    
                alert("Middle name is required");    
                middle_name.focus();    
                return false;    
            }   if (last_name.value.length <=0) {    
                alert("Last name is required");    
                last_name.focus();    
                return false;    
            }   if (experience.value.length <=0) {    
                alert("Experience is required");    
                experience.focus();    
                return false;    
            }   if (blood_group.value == "BLOOD GROUP") {    
                alert("Blood group is required");    
                blood_group.focus();    
                return false;
            }   if (dob.value.length <=0) {    
                alert("Date of birth is required");    
                dob.focus();    
                return false;  
                 }   if (gender.value == "GENDER") {    
                alert("Gender is required");    
                gender.focus();    
                return false;
                 }   if (medical_history.value.length <=0) {    
                alert("Medical history is required");    
                medical_history.focus();    
                return false;  
            }    
            return true;    
        }    
    </script> 