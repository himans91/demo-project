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
            $('#street').val(" ");
            $('#zippcode').val(" ");
            $('#city').val(" ");

		} else if ($('.select-intern-extern').val() ==  'intern') {
        	$('.extern-location').hide();
            }
	});
});

//add project intern/extern set deafault value
$(function(){
            $('#street').val("Joop Geesinkweg 209");
            $('#zippcode').val("1114 AB");
            $('#city').val("Amsterdam");
});


setTimeout(function() { 
    $('.flashmessages').hide(3000); 
});

$(function(){ 
    $('.all-users-list').hide();
        $('.show-users-list').click(function(){
            
            $('.all-users-list').show();
        });
});

// Replace the text when the checkbox is clicked

$(function(){ 
    $('.CheckIn').change(function() {
      $('.CheckboxStatus').text('Check me in for:');
      // $('.CheckboxStatus').css('color', 'red');
      if(this.checked){
       $(this).next().text('Im checked for:');
       // $('.CheckboxStatus').css('color', 'green');
      }
    });
});

$(function(){
    $('.hideproject').click(function(){
        $('.list-of-projects').next().hide();
    });
});

$(function(){
    $('.assign-day-option').click(function(){
        $('.assign-date-option').show();
      });
});

$(function(){
    $('.assign-date-option').click(function(){
        $('.final-assign-option').show();
          });
});


