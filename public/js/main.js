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


// setTimeout(function() { 
//     $('.alert').slideUp(5000); 
// });



$(function(){
    $('.hideproject').click(function(){
        $('.list-of-projects').next().hide();
    });
});

// Oplossing voor meerdere div's van hetzelfde naam. Dus  meerdere gebruikers
// $(function(){
//     $('.assign-day-option').click(function(){
//         var myParent = $(this).closest('div.assign-members');
//         myParent.find('.assign-date-option').show();
//       });
// });

// $(function(){
//     $('.assign-date-option').click(function(){
//         $('.final-assign-option').show();
//           });
// });


$(function(){
    $('.CheckIn').click(function(){
      $('assign-members').hide();
    });
});

$('.CheckIn').on('click',function(){
      $('assign-members').hide();
    });

//Function for selecting the current project and hide others

$(function(){

  $('.all-users-list').hide();
  $('.item .checkbox').on('click', function(){  

      if($(this).is(':checked')) {       
          $('.list-of-projects').hide();  
          $(this).closest('div.list-of-projects').show(); 
          $('.all-users-list').show();

      } else {
         $('.list-of-projects').show();
         $('.all-users-list').hide();
      }          
  });
});

 $(function(){
    $('.singleday input[type=radio]').on('click', function(){
      if($(this).is(':checked')) {
        $('.singleday-date').show();
        $('.multidays-date').hide();
      } 
       else  {
          $('.singleday-date').hide();
       }
    });
 });

  $(function(){
    $('.multidays [type=radio]').on('click', function(){
      if($(this).is(':checked')) {
        $('.multidays-date').show();
        $('.singleday-date').hide();
      }
       else  {
          $('.multidays-date').hide();
       }
    });
 });

 $(function(){
$('[type=checkbox] .singleday').prop('checked', true);
$('[type=checkbox] .multidays').prop('checked', false);
});

// $(function(){
// $('input.startdate').datepicker({
//     minDate: 0  
// });
// });


// $('.navbar-toggle').on('click', function(){ 
//     $('.overflow').hide()
//    // $('.overflow').css({opacity: 0.5});
// });
// $('.navbar-toggle').on('click', function(){ 
//     $('.overflow').show()
// //    $('.overflow').css({opacity: 0});
// });


// $(document).ready(function() {
//     $('#AddProductForm').formValidation({
//         framework: 'bootstrap',
//         icon: {
//             valid: 'glyphicon glyphicon-ok',
//             invalid: 'glyphicon glyphicon-remove',
//             validating: 'glyphicon glyphicon-refresh'
//         },
//         fields: {
//             title: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The title is required'
//                     },
//                     stringLength: {
//                         min: 3,
//                         max: 30,
//                         message: 'The name must be more than 3 and less than 30 characters long'
//                     },
//                     regexp: {
//                         regexp: /^[a-zA-Z0-9_]+$/,
//                         message: 'The name can only consist of alphabetical, number and underscore'
//                     }
//                 }
//             },
//             price: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The price is required'
//                     },
//                     numeric: {
//                         message: 'The price must be a number'
//                     }
//                 }
//             },
//             'size[]': {
//                 validators: {
//                     notEmpty: {
//                         message: 'The size is required'
//                     }
//                 }
//             },
//             availability: {
//                 validators: {
//                     notEmpty: {
//                         message: 'The availability option is required'
//                     }
//                 }
//             }
//         }
//     });
// });