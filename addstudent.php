<div class="modal fade" role="dialog" id="addst">
 <div class="modal-dialog">
 <div class="modal-content p-5">

    <h2 class="text-center">Add students</h2>
    <form method="post">
     <div class="form-group mt-3">
    <input type="text" name="fnm" placeholder="Enter firstname" required class="form-control"> 
    </div>   
    
    <div class="form-group mt-3">
        <input type="text" name="lnm" placeholder="Enter lastname" required class="form-control"> 
        </div>   

        
     <div class="form-group mt-3">
        <input type="text" name="em" placeholder="Enter email" required class="form-control"> 
        </div>   

        
     <div class="form-group mt-3">
        <input type="text" name="phone" placeholder="Enter phone" required class="form-control"> 
        </div>   

        
     <div class="form-group mt-3">
        <select name="course"  required class="form-control">
            <option value="">-select course-</option>
            <?php
            foreach($shw as $shw1)
            { 
            ?>
            <option value="<?php echo $shw1["course_id"];?>"><?php echo $shw1["coursename"];?></option>
            <?php 
            }
            ?> 
        </select> 
        </div>
        
     <div class="form-group mt-3">
        <input type="submit"  name="add_student" value="AddStdents" class="btn btn-lg btn-info"> 
        
        <input type="reset"  name="reset" value="Reset" class="btn btn-lg btn-danger"> 
        </div>   
</div>
</div>        