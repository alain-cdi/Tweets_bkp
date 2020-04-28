function validate() {
    var isValid = true;

    var user = $("#user").val();
    var msg = $("#msg").val();
    var tags = $("#tags").val();
    var date = $("#date").val();
	
	
// msg erreurs si zones non remplies ou si non conformes aux expressions régulières
	
	if (!user.match(/^[a-z0-9-]{4,16}$/i)) {
        $("#info1").html("(Nom utilisateur non valide)");
        $("#user").css('border', '#fb0505 1px solid');
        isValid = false;
    }  
    
	if (msg == "") {
		$("#info2").html("(Veuillez remplir le contenu du message 1000 caractère maxi.)");
        $("#msg").css('border', '#fb0505 1px solid');
		isValid = false;
    }
	
	
	if (!tags.match(/(#\w+)/i)) {
        $("#info3").html("(Liste hashtag non valide)");
        $("#tags").css('border', '#fb0505 1px solid');
        isValid = false;
    }
            
	if (date<("1970-01-02")) {
		$("#info4").html("(Veuillez indiquer une date supérieure à 01/01/1970)");
        $("#date").css('border', '#fb0505 1px solid');
        isValid = false;
    }   
	else {
		$("#info4").html("(Date correcte)");
		$("#date").css('border', '#61f205 1px solid');
	}
	
    return isValid;
}