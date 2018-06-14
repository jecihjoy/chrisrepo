$('document').ready(function() {
    $('#level').change(function(){
        var level_id = $(this).val();
        $("#programme > option").remove();
        $.ajax({
            type: "POST",
            url: "populate_data.php",
            data: "cid=" + level_id,
            success:function(opt){
                $('#programme').html(opt);
            }
        });
    });


 $('#department').change(function(){
        var course_req = $(this).val();
        $("#program > option").remove();
        $.ajax({
            type: "POST",
            url: "populate_program.php",
            data: "prog=" + course_req,
            success:function(data){
                $('#program').html(data);
            }
        });
    });

//checking the selection of the faculties and departments
$('#cat').change(function(){
        var country_id = $(this).val();
        $("#subcat > option").remove();
        $.ajax({
            type: "POST",
            url: "populate_subcat.php",
            data: "fid=" + country_id,
            success:function(opt){
                $('#subcat').html(opt);

            }
        });
    });

    $('#subcat').change(function(){
        var country_id = $(this).val();
        $("#cattype > option").remove();
        $.ajax({
            type: "POST",
            url: "populate_cat_type.php",
            data: "fid=" + country_id,
            success:function(opt){
                $('#cattype').html(opt);

            }
        });
    });

    $('#category').change(function(){
        var course_req = $(this).val();
        $("#design > option").remove();
        $.ajax({
            type: "POST",
            url: "populate_jobgroups.php",
            data: "cat=" + course_req,
            success:function(data){
                $('#design').html(data);
            }
        });
    });

});