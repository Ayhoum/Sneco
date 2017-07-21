<?php
include "../include/phpscripts/DB.php";
?>
<form name="add_name" id="add_name" method="post" action="test_code.php">
    <table class="table table-brodered" id="dynamic_field">
        <tr>
            <td><input type="text" name="name[]" id="name" placeholder="Enter Name" class="form-control name_list"></td>
            <td><button type="button" name="add" id ="add" class="btn btn-success"> Add More</button></td>
        </tr>
    </table>
    <input type="submit" name="submit" id="submit" value="submit">
</form>

<script>
    $(document).ready(function(){
        var i = 1;
        $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name" placeholder="Enter Name" class="form-control name_list"></td><td><button name="remove" id ="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>')
        });
        $(document).on('click', '#btn_remove',function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
        });
        $('#submit').click(function(){
            .$ajax({
                url:"name.php",
                method:"post",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                 alert(data);
                 $('#add_name')[0].reset();
                }
            });
        });

    });
</script>