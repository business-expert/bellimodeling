//#####################################################################
//-- Function to select interest
$.fn.selectRemoveInterest = function(data) {
  $(this).click(function(e){
    e.preventDefault();
    if($(this).attr('class')=="selected"){
    	$(this).removeClass('selected');
    }
    else{
    	 $(this).addClass('selected');
    	 
    }
    var interests = "";
    $(".select_interests_container li").each(function(element,value){
    	if($(this).attr('class')=="selected"){
    		interests += $(this).text()+"#";
    	}
    });
    $(".interests").val(interests.substring(0,interests.length-1));
  });
};
//#####################################################################


//#####################################################################
//-- start custom section
$(document).on("ready page:change", function() {
	$('.select_interests_container li').selectRemoveInterest();
});	
//-- end custom section
//#####################################################################


$(function() {
var availableTags = [
"ActionScript",
"AppleScript",
"Asp",
"BASIC",
"C",
"C++",
"Clojure",
"COBOL",
"ColdFusion",
"Erlang",
"Fortran",
"Groovy",
"Haskell",
"Java",
"JavaScript",
"Lisp",
"Perl",
"PHP",
"Python",
"Ruby",
"Scala",
"Scheme"
];
$( "#profession_credits_title" ).autocomplete({
source: availableTags
});
});