

<div class="container">
   <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="./">Home</a>
              </li>
              <li class="breadcrumb-item">Masters</li>
              <li class="breadcrumb-item active" aria-current="page">Staff Designation</li>
            </ol>
            <div class="container">
             <?php if($this->session->flashdata('status')) : ?>
                <div class="alert alert-success" style="margin-top: 70px">
                  <?php echo $this->session->flashdata('status'); ?>
                   </div>
                 <?php endif; ?>
               </div>
<div class="container" style="margin-left: 200px">
  <button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add</button>
  <table class="table table-bordered mt-2">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Designation Name</th>
      <th scope="col">Discription</th>
      </tr>
  </thead>
  <tbody>
     <?php foreach ($staff as $row) : ?>
                  <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->designation_name; ?></td>
                    <td><?php echo $row->discription; ?></td>
                  </tr>
                <?php endforeach; ?>
  </tbody>
</table>
<form name="myform" method="post" action="<?php echo base_url('admin/store');?>" onsubmit="return validateform()">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Designation Name:</label>
            <input type="text" class="form-control" name="designation_name">
            <?php echo form_error('designation_name');?>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Discription:</label>
            <textarea class="form-control" name="discription"></textarea>
            <?php echo form_error('discription'); ?>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>

<script>  
function validateform(){  
var designation_name=document.myform.designation_name.value;  
var discription=document.myform.discription.value;  
  
if (designation_name.length<4){  
  alert("Designation must be at least 5 characters long.");  
  return false;  
}else if(discription.length<5){  
  alert("Discription must be at least 5 characters long.");  
  return false;  
  }  
}  
</script>   