var form = $('#miform');


	$(form).submit(function(e) {

		e.preventDefault();

		var formData = $(form).serialize();
	

		$.ajax({
			type: 'POST',
			url: "controller/session/login.php",
			data: formData
		})
		.done(function(response) {

            var res = response.split('_')[0];
            var resp = response.split('_')[1];
			
            alert(res);
            if(resp.length>0){
                location.href=resp;
            }
            

		})
		.fail(function(data) {

			alert('error al ingresar');

		});
	});

