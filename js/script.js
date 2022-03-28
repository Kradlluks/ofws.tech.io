$(document).ready(function(){
$("#myInput").on("keyup",function(){
	var value1=$(this).val().toLowerCase();
	$("#myTable tr").filter(function(){
	$(this).toggle($(this).text().toLowerCase().indexOf(value1) > -1)
	})

	$("#myList li").filter(function(){
		$(this).toggle($(this).text().toLowerCase().indexOf(value1) > -1)

	})

	$("#myDIV *").filter(function(){
		$(this).toggle($(this).text().toLowerCase().indexOf(value1) > -1)

	})
	


});
});