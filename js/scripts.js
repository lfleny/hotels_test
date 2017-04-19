$(document).ready(function(){
	$('#find_hotel').click(function(){
		$.post('ajax/ajax.php',{'city': $('#city').val()}, function(data) {
			$('#hotel_list').empty();
			data.hotels.forEach(function(item) {
			  $('#hotel_list').append('<div class="hotel">' + item + '</div>');
			})
		}, "json");
	});
})