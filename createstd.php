<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Enter the Value of AA</label>
				<input type="text" name="std_name" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Enter the Value of BB</label>
				<input type="text" name="std_no" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Enter the Value of CC</label>
				<input type="text" name="std_dept" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Enter the Value of A</label>
				<input type="text" name="std_dept" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Enter the Value of B</label>
				<input type="text" name="std_dept" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Enter the Value of C</label>
				<input type="text" name="std_dept" class="form-control input-sm" required>
			</div>

			<button type="submit" class="btn btn-sm btn-default">Submit</button>
		</form>
	</div>

	<div class="col-md-8">
		<?php include 'all_student.php'; ?>
	</div>
</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addstudent.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Numbers added", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error creating", { header: 'creation failed' });
			}
			}
		});
		return false;
	});
});
</script>
<script>
	function assign(){
   	  	$('#project_title').html('<img src="image/ajax-loader.gif">')
   	  	$.ajax({
        	type: 'POST',
        	url: 'assign.php',
        	data: 'action=yes',
        	cache: false,
        	dataType: 'json',
        	success: function(data){
        		// data = JSON.parse(data);
        		console.log(data[0])
              setTimeout(function(){
              	var project = data[0]['project_name'];
              	var case_ = data[0]['project_case'];
              	var id = data[0]['id'];
                
                $("#project_title").html("");
                $("#project_title").append(project+"<br>"+case_);
                $("#project_id").val(id);
                if(id >0){
                	$('#login_form1 button[type="submit"]').attr('disabled',false)
                }else{
                	$('#login_form1 button[type="submit"]').attr('disabled',true)
                }
              },500);
        	}
        })
   	  }
   $(document).ready(function(){
   	  // $("#login_form1 .well").on('mouseover',function(){
        assign()
   	  // })
   	  $('#RefProj').click(function(){
   	  	assign()
   	  })
   })
</script>