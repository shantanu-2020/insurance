<div class="container">
  <div class="container" style="margin: 70px 200px">
  <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="btn btn-primary"><a href="<?php echo base_url('admin/form');?>">BASIC DETAILS</a></li>
  <li role="presentation" class="btn btn-primary"><a href="<?php echo base_url('admin/address');?>">ADDRESS</a></li>
  <li role="presentation" class="btn btn-primary"><a href="<?php echo base_url('admin/class');?>">EDUCATION DETAILS</a></li>
</ul>

</div>

  	<div class="container" style="margin: 70px 200px">
       <?php if ($this->session->flashdata('status')): ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('status'); ?>
                   </div>
                 <?php endif;?>

  		<form name="reg_form" action="<?php echo site_url('admin/address1'); ?>" method="post" onsubmit="return validate()">
        <h3 class>ADDRESS</h3>

	<div class="row">
            <div class="form-group col-sm-4 mb-3">
            	<label for="">MOBILE NUMBER</label><br>
            	<input type="text" name="mobile_number" placeholder="">
              <?php echo form_error('mobile_number'); ?>
			</div>
	        <div class="form-group col-sm-4 mb-3">
	        	<label for="">ALTERNATE NUMBER</label><br>
				<input type="text" name="alternate_number">
        <?php echo form_error('alternate_number'); ?>
            </div>
            <div class="form-group col-sm-4 mb-3">
            	<label>PROFILE PHOTO</label><br>
            	<input type="file" name="image">
              
		  </div>
	</div>


   <div class="row">
           <div class="form-group col-md-4 mb-3">
            	<label for="">DESIGNATION</label><br>
				<input type="text" name="designation">
        <?php echo form_error('designation'); ?>
		   </div>
	        <div class="form-group col-md-4 mb-3">
	        	<label for="">LOCAL ADDRESS</label><br>
				<input type="text" name="local_address">
        <?php echo form_error('local_address'); ?>
            </div>
            <div class="form-group col-md-4 mb-3">
            	<label for="">ZIP CODE</label><br>
            	<input type="text" name="zip_code">
              <?php echo form_error('zip_code'); ?>
            </div>
   	</div>
   <div class="row">
           <div class="form-group col-md-4 mb-3">
            	<label for="">PERMANENT ADDRESS</label><br>
				<input type="text" name="permanent_address">
        <?php echo form_error('permanent_address'); ?>
			</div>
	        <div class="form-group col-md-4 mb-3">
	        	<label for="">ZIP CODE</label><br>
				<input type="text" name="zip_code1">
        <?php echo form_error('zip_code1'); ?>
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
            var mobile_number = document.reg_form.mobile_number;    
            var alternate_number = document.reg_form.alternate_number;    
            var image = document.reg_form.image;    
            var designation = document.reg_form.designation;    
            var local_address = document.reg_form.local_address;    
            var zip_code = document.reg_form.zip_code;    
            var permanent_address = document.reg_form.permanent_address;    
            var zip_code1 = document.reg_form.zip_code1;    
            
    
            if (mobile_number.value.length <= 9) {    
                alert("mobile number is required");    
                mobile_number.focus();    
                return false;    
            }    
            if (alternate_number.value.length <= 9) {    
                alert("alternate number is required");    
                alternate_number.focus();    
                return false;    
            }    
            if (image.value.length <= 0) {    
                alert("image is required");    
                image.focus();    
                return false;    
            }    
            if (designation.value.length <= 0) {    
                alert("designation is required");    
                designation.focus();    
                return false;    
            }    
            if (local_address.value.length <= 5) {    
                alert("local address is required");    
                local_address.focus();    
                return false;    
            }    
            if (zip_code.value.length <= 5) {    
                alert("zip_code is required");    
                zip_code.focus();    
                return false;    
            }    
            if (permanent_address.value.length <= 5) {    
                alert("permanent address is required");    
                permanent_address.focus();    
                return false;    
            }  
             if (zip_code1.value.length <=5) {    
                alert("zip code1 is required");    
                zip_code1.focus();    
                return false;    
               }    
              
        }    
    </script> 


