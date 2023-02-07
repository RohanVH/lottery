<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Enter the value of AA</label>
				<input type="text" name="AA" value="<?php echo $AA; ?>" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Enter the value of BB</label>
				<input type="text" name="BB" value="<?php echo $BB; ?>" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Enter the value of CC</label>
				<input type="text" name="CC" value="<?php echo $CC; ?>" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Enter the value of A</label>
				<input type="text" name="a" value="<?php echo $A; ?>" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Enter the value of B</label>
				<input type="text" name="b" value="<?php echo $B; ?>" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Enter the value of C</label>
				<input type="text" name="c" value="<?php echo $C; ?>" class="form-control input-sm" required>
			</div>
			<button type="submit" class="btn btn-sm btn-default" name="submit">Submit</button>
		</form>
	</div>

	<div class="col-md-8">
		<?php include 'all_project.php'; ?>
	</div>
</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "updateproject.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Successfully added", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'create-project.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error updating", { header: 'update failed' });
			}
			}
		});
		return false;
	});
});
</script>