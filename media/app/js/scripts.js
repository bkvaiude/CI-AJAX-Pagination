$("#f1").submit(function(){
	var form_submit = true;
	$("input:text").each(function(){
		var num0to999Regex = '^([0-9]|[1-9][0-9]|[1-9][0-9][0-9])$';
		var inputVal = $(this).val();
    	var numericReg = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
    	if(!numericReg.test(inputVal)) {
    		alertify.error("Only numeric values are allowed!!!");
    		form_submit = false;
    	}
	});
		return form_submit;
});