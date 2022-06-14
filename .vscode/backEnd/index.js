$(document).ready(function() {
    $('#butsave').on('click', function() {
    var nom = $('#nom').val();
    var email = $('#email').val();
    var passwd = $('#passwd').val();
    if(nom!="" && email!="" && passwd!="" ){
        $.ajax({
            url: "../backEnd/addData.php",
            type: "POST",
            data: {
                nom: nom,
                email: email,
                passwd: passwd				
            }
        });
        }
        else{
            alert('Remplir les champs vides !');
        }
    });
    });


    $.ajax({
		url: "../backEnd/getData.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#showUser').html(data); 
		}
	});