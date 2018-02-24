function start(){
	hpSequence = JSON.stringify($('#hpSequence').val());
	ppSequence = JSON.stringify($('#ppSequence').val());
	encoding = JSON.stringify($('#encoding :selected').text());
	model = JSON.stringify($('#model :selected').text());
	var sonucPozitif = document.getElementById("sonucPozitif");
	var sonucNegatif = document.getElementById("sonucNegatif");
	jQuery.ajax({
		type: "POST",
		url: 'http://localhost:8080/WekaWithPhp/Start.php',
		dataType: 'json',
		data: {functionname: 'yaz', arguments: [hpSequence,ppSequence,encoding,model]},

		success: function (obj, textstatus) {
			if( !('error' in obj) ) {
				yourVariable = obj.result;
				if(yourVariable=="1"){
					sonucPozitif.innerHTML= "There is interaction !"; 
					sonucPozitif.style.backgroundColor="green";
					if(sonucPozitif.classList.contains("invisible"))
					{
						sonucPozitif.classList.remove("invisible");
					}
				}
				else{
					sonucPozitif.innerHTML= "There isn't interaction"; 
					sonucPozitif.style.backgroundColor="red";
					if(sonucPozitif.classList.contains("invisible"))
					{
						sonucPozitif.classList.remove("invisible");
					}
				}
			}
			else {
				alert(obj.error);
			}
		}
	});
	
}
function resetForm(){
	document.getElementById("form1").reset();
	sonucPozitif.classList.add("invisible");
}
