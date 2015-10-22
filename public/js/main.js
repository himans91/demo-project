// Show and hide search page
$(function() {
    $('.item-search-user').show(); 
    $('#selection').change(function(){
        if($('#selection').val() == 'project') {
            $('.item-search-project').show();
             $('.item-search-user').hide();
        } else if($('#selection').val() == 'user'){
        	$('.item-search-project').hide();
            $('.item-search-user').show();
        }
    });
});

//add project intern/extern

$(function (){
	$('.select-intern-extern').change(function(){
		if($('.select-intern-extern').val() ==  'extern') {
			$('.extern-location').show();
		} else if ($('.select-intern-extern').val() ==  'intern') {
        	$('.extern-location').hide();
        }
	});

});
    
