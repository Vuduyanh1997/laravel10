$(function(){
	$('.btn-info').click(function(){
		//e.preventDefault();
		$('#show').modal('show');
		var id=$(this).data('id');
		$.ajax({
			type:'get',
			url: app_url + 'product/' +id,
			success: function(response){
				$('#name').text(response.name);
				$('#price').text(response.price);						
			}
		})
	});
})