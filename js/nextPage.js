function getArray() {
	debugger
	var value = $('#uservalue').val()
    window.location = "/gridle/arrayAdmin.php?uservalue="+value;
}
function getValue() {
	debugger
	var givenvalues = {
	length : $('#length').val(),
	values : $('#arrayvalues').val()
	}
	$.ajax({
        type: "POST",
        url: "/gridle/calculationPage.php",
        data: givenvalues,
        success:function(data){
            $('#outputvalues').html(data);
        }
});
}