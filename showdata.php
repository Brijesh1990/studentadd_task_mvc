<div class="container-fluid p-5 mt-2">
<button type="button" data-bs-toggle="modal" data-bs-target="#addst" class="btn btn-info btn-lg float-right" style="float: right;">Add student</button>
<h1 class="text-center mt-4">Show all students Data</h1>
<hr class="border border-1 border-danger w-25 mx-auto">
<table id="tbl" class="display mt-4" style="width:100%">
    <thead>
        <tr>
            <th>FirtName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
         foreach($shwjoin as $row)
         {
        ?>
        <tr>
            <td><?php echo $row["firstname"]; ?></td>
            <td><?php echo $row["lastname"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["phone"]; ?></td>
            <td><?php echo $row["coursename"]; ?></td>
            <td><a href="<?php echo $row["course_id"]; ?>" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a> | <a href="<?php echo $row["course_id"]; ?>" class="btn btn-sm btn-info"><span class="bi bi-pencil"></span></a></td>
        </tr>
    
         <?php 
    }
    ?>
    </tbody>
    <tfoot>
        <tr>
            <th>FirtName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>




</div>
<script>
$(document).ready(function () {
$('#tbl').DataTable();
});
</script>