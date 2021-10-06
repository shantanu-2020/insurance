<div class="container">
  <div class="container" style="margin: 70px 200px">
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

            <div class="container" style="margin: 70px 150px">
              <h3 style="margin-left: 50px">EDUCATION DETAILS</h3>
  <button type="button" class="btn btn-primary btn-md float-right"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><h3>Add</h3></button>
  <table class="table table-bordered mt-2 education">
    <thead>
    <tr>
      <th scope="col">SR.NO.</th>
      <th scope="col">CLASS</th>
      <th scope="col">STREAM</th>
      <th scope="col">INSTITUTE NAME</th>
      <th scope="col">BOARD/UNIVERSITY</th>
      <th scope="col">PASSING YEAR</th>
      <th scope="col">PERCENTAGE</th>
      </tr>
  </thead>
  <tbody>
     <?php foreach ($class as $row) : ?>
                  <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->class_1; ?></td>
                    <td><?php echo $row->stream; ?></td>
                     <td><?php echo $row->institute_name; ?></td>
                      <td><?php echo $row->board; ?></td>
                       <td><?php echo $row->passing; ?></td>
                        <td><?php echo $row->percentage; ?></td>
                  </tr>
                <?php endforeach; ?>
  </tbody>
</table>
<form name="myform" method="post" action="<?php echo base_url('admin/fetch');?>" onsubmit="return validateform()">
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
            <label for="recipient-name" class="col-form-label">Class</label>
            <input type="text" class="form-control" name="class_1" id="recipient-name">
            
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Stream</label>
            <textarea class="form-control" name="stream" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Institute Name</label>
            <textarea class="form-control" name="institute_name" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Board</label>
            <textarea class="form-control" name="board" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Passing</label>
            <textarea class="form-control" name="passing" id="message-text"></textarea>
          </div>
           <div class="form-group">
            <label for="message-text" class="col-form-label">Percentage</label>
            <textarea class="form-control" name="percentage" id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" value="SAVE">
      </div>
      </form>
    </div>
  </div>
</div>

</div>
<script type="text/javascript">  
function validateform(){  
var class_1=document.myform.class_1.value;  
var stream=document.myform.stream.value;  
var institute_name=document.myform.institute_name.value;  
var board=document.myform.board.value;  
var passing=document.myform.passing.value;  
var percentage=document.myform.percentage.value;  
  
if (class_1.length<2){  
  alert("Class should be fill properly.");  
  return false;  
}else if(stream.length<3){  
  alert("stream should be fill properly.");  
  return false;  
  } else if(institute_name.length<3){  
  alert("institute name should be fill properly.");  
  return false;  
  } else if(board.length<3){  
  alert("board should be fill properly.");  
  return false;  
  } else if(passing.length<3){  
  alert("passing should be fill properly.");  
  return false;  
  } else if(percentage.length<3){  
  alert("percentage should be fill properly.");  
  return false;  
  }  
}  
</script>
  