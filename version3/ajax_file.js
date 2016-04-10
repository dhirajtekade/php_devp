function submitDataFunction() {
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var marks = document.getElementById("marks").value;
	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone + '&marks=' + marks;
	if (name == 'er' || email == '' || phone == '' || marks == '') {
		alert("Please Fill All Fields");
	} else {
		// AJAX code to submit form.
		$.ajax({
			type: "POST",
			url: "insert_data.php",
			data: dataString,
			//cache: false,
			success: function(data) {
				//alert(data);
				 $("#table_id").append(data);
				// $( '#container' ).html( data);	
			}
		});
	}
	return false;
}