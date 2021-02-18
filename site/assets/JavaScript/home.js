heure();
setInterval("heure()", 1000);
document.getElementById('img').src += Math.round(Math.random()*49)+1 + ".webp";
function heure(){

	d = new Date();
	h = d.getHours();
	m = d.getMinutes();

	if(m < 10){
		m = "0"+Math.round(m);
	}

	jour = new Array(7);
	jour[0] = "Dimanche";
	jour[1] = "Lundi";
	jour[2] = "Mardi";
	jour[3] = "Mercredi";
	jour[4] = "Jeudi";
	jour[5] = "Vendredi";
	jour[6] = "Samedi";

	day = jour[d.getDay()];
	date = d.getDate();

	month = new Array();
	month[0] = "Janvier";
	month[1] = "Fevrier";
	month[2] = "Mars";
	month[3] = "Avril";
	month[4] = "Mai";
	month[5] = "Juin";
	month[6] = "Juillet";
	month[7] = "Aout";
	month[8] = "Septembre";
	month[9] = "Octobre";
	month[10] = "Novembre";
	month[11] = "Decembre";

	mo = month[d.getMonth()];
	y = d.getFullYear();

	affHeure = h + ":" + m;
	affDate = day + " " + date + " " + mo + " " + y;

	document.getElementById("time").innerHTML = affHeure;
	document.getElementById("date").innerHTML = affDate;
};
