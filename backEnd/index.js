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


    $('#butadd').on('click', function() {
        var title = $('#title').val();
        var place = $('#place').val();
        var description = $('#description').val();
        var image = $('#image').val();
        var price = $('#price').val();
        var copie = $('#copie').val();
        if(title!="" && place!="" && description!="" && price!="" && copie!="" ){
            $.ajax({
                url: "../backEnd/addDataMonuments.php",
                type: "POST",
                data: {
                    title: title,
                    place: place,
                    description: description,
                    price: price,
                    copie: copie					
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
		success: function(data){
			$('#showUser').html(data); 
		}
	});



    $.ajax({
        url: "../backEnd/getDataMonuments.php",
        type: "POST",
        success: function(data){
            $('#showMonuments').html(data); 
        }
    });

    