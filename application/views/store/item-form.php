<div class="grid-container bs-docs-grid">
<div class="grid-container-head bs-docs-grid">
<h3>Items</h3>
<p>Note: create a new item or edit existing item details</p>
</div>
<div class="grid-container-body bs-docs-grid">
<div class="row-fluid show-grid">
<form class="bs-docs-example" id="frm">
	<div class="control-group">
		<div class="controls">
			<input type="text" id="name" name="name" value="<?php print $name; ?>" placeholder="Item Name" class="input-large">
		</div>
	</div>	
	<div id="select-brand-div" class="input-prepend">
		<span class="add-on">Brand: </span>
		<?php echo form_dropdown('brand', $select_brand, $selected_brand, 'id="select-brand"'); ?>
	</div>
	<div id="select-model-div" class="input-prepend">
		<span class="add-on">Model: </span>
		<?php echo form_dropdown('model', $select_model, $selected_model, 'id="select-model"'); ?>
	</div>
	<input type="hidden" name="item_id" value="<?php print $item_id; ?>" />
</form>
</div>
<a href="#" class="btn btn-large btn-primary" id="submit">Submit</a>
</div>
<script>
				var url = window.location.href;
				url = url.substr(0,url.indexOf("store"));

		$(document).ready(function() {
			$("#select-brand").on('change',function(){
				$.ajax({
					type: "GET",
					url: url+"store/modelDropDown/"+$("#select-brand").val()
				}).done(function(data) {
					$("#select-model-div").html(data);
				});
			});

			$("a#submit").click(function(){
				var name = $("#name").val();
				if($.trim(name) == ''){
					$(".control-group").addClass("error");
					return false;
				}else{
					$(".control-group").removeClass("error");
				}
				$.ajax({
					type: "POST",
					url: url+"store/saveItem",
					data: $("#frm").serialize()
				}).done(function(data) {
					var obj = jQuery.parseJSON(data);
					location.reload(true);
				});
			});			
		});
</script>