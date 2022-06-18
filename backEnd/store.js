    $.ajax({
        url: "../backEnd/getDataMonuments.php",
        type: "POST",
        success: function(data){
            $('#showMonuments').html(data); 
        }
    });



    function myFunction() {
        var x = document.getElementById("add");
        var y = document.getElementById("addN");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else{
            y.style.display = "block";
            x.style.display = "none";
        }
        $(document).ready(function() {


            $('#butsave').on('click', function() {
                var title = $('#title').val();
                var place = $('#place').val();
                var description = $('#description').val();
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
      }


      function myFunction2() {
        var x = document.getElementById("addNew");
        var y = document.getElementById("addNew2");
        if (y.style.display === "none") {
            y.style.display = "block";
            x.style.display = "none";
        } 
    }

    //   function showImg(x) {
    //     x.style.display = "block";
    //   }
      
    //   function hideImg(x) {
    //     x.style.display = "block";
    //   }