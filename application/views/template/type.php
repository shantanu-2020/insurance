
<div class="container">
   <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="./">Home</a>
              </li>
              <li class="breadcrumb-item">Masters</li>
              <li class="breadcrumb-item active" aria-current="page">Agent/Advisors Type</li>
            </ol>
            <div class="container" style="margin-top: 70px">
             <?php if($this->session->flashdata('status')) : ?>
                <div class="alert alert-success">
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
      <th scope="col">Agent/Advisor Type</th>
      <th scope="col"> Discription</th>
      </tr>
  </thead>
  <tbody>
     <?php foreach ($type as $row) : ?>
                  <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->agent_advisor; ?></td>
                    <td><?php echo $row->discription; ?></td>
                  </tr>
                <?php endforeach; ?>
  </tbody>
</table>
<form name="myform" method="post" action="<?php echo base_url('admin/advisor');?>" onsubmit="return validateform()">
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
            <label for="recipient-name" class="col-form-label">Agent/Advisor Type:</label>
            <input type="text" class="form-control" name="agent_advisor" id="recipient-name">
            
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Discription:</label>
            <textarea class="form-control" name="discription" id="message-text"></textarea>
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
var agent_advisor=document.myform.agent_advisor.value;  
var discription=document.myform.discription.value;  
  
if (agent_advisor.length<4){  
  alert("Agent advisor must be at least 5 characters long.");  
  return false;  
}else if(discription.length<5){  
  alert("Discription must be at least 5 characters long.");  
  return false;  
  }  
}  
</script>   