function updateCartItem(obj, id) {
	$.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
		if(data == 'ok') {
			location.reload();
		}else{
			alert('Cart update failed. Please try again.');
		}
	});
}