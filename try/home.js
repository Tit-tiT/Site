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

function page1(){
	document.getElementById('page1').style.position = 'fixed';
	document.getElementById('page2').style.position = 'unset';
};

function page2(){
	// document.getElementById('page1').style.position = 'unset';
	// document.getElementById('page2').style.position = 'fixed';

	document.getElementById('page').innerHTML = '';
  var englobeur = document.createElement('div');
  englobeur.className = 'englobeur';

  var big_onglet = document.createElement('div');
  big_onglet.className = 'big_onglet';

  var st_onglet = document.createElement('div');
  st_onglet.className = 'st_onglet';

  var onglet = document.createElement('div');
  onglet.className = 'onglet';

  big_onglet.appendChild(st_onglet);
  big_onglet.appendChild(onglet);
  big_onglet.appendChild(onglet);
  big_onglet.appendChild(onglet);
  big_onglet.appendChild(onglet);
  englobeur.appendChild(big_onglet);
};

function page12(){
  page = document.getElementById('page');
  page.innerHTML = '';

  for(let i=0; i<3;i++){
    var englobeur = document.createElement('div');
    englobeur.className = 'englobeur';

    var big_onglet = document.createElement('div');
    big_onglet.className = 'big_onglet';

    var st_onglet = document.createElement('div');
    st_onglet.className = 'st_onglet';

    page.appendChild(englobeur);
    englobeur.appendChild(big_onglet);
    big_onglet.appendChild(st_onglet);

    for(let j=0;j<4;j++){

      var json = JSON.parse("assets\JSON\home.json");
      var nom = json[1].nom;
      var lien = json[1].lien;
      var image = json[1].image;

      var a = document.createElement('a');
      a.setAttribute('href',lien);

      var img = document.createElement('img');
      img.setAttribute('src',image);
      img.setAttribute('alt',nom+' logo');

      var onglet = document.createElement('div');
      onglet.className = 'onglet';
      big_onglet.appendChild(onglet);
    }
  }

  var englobeur2 = document.createElement('div');
  englobeur2.className = 'englobeur';

  var button = document.createElement('button');
  button.className = 'button st_onglet icone center';
  button.setAttribute('onclick','page1();');

  var img = document.createElement('img');
  img.className = 'icone';
  img.setAttribute('src','assets/Icone/plus.png');
  img.setAttribute('alt','Plus');

  page.appendChild(englobeur2);
  englobeur2.appendChild(button);
  button.appendChild(img);

}


// function addElement () {
  // var name = prompt('Nom du site ?');
  // if(name != null){
  //   var lien = prompt('Lien du site ?');
  //   if(lien != null){
	// 		var plus = document.getElementById("plus");
  //     var newdiv = document.createElement("div");
  //     newdiv.id = name;
	// 		newdiv.className = "fav";
	// 		document.getElementById("page2").insertBefore(newdiv,plus);
	//
	// 		var newa = document.createElement("a");
  //     newa.href = 'https://www.'+ lien;
	// 		newa.id = name + "_a";
  //     document.getElementById(name).appendChild(newa);
	//
	// 		var newimg = document.createElement("img");
	// 		newimg.className = "icone";
	// 		newimg.src = "https://logo.clearbit.com/" + "https://www."+ lien;
	// 		newimg.alt = name + " logo";
	// 		document.getElementById(name + "_a").appendChild(newimg);
  //   }
  // }
// };

function addElement(){
	document.getElementById("img").style.filter = "brightness(0.30)";
	document.getElementById("divform").style.zIndex = "6";
	document.getElementById("blank").style.zIndex = "5";
}

function annuler(){
	document.getElementById("divform").style.zIndex = "-1";
	document.getElementById("img").style.filter = "brightness(0.60)";
	document.getElementById("blank").style.zIndex = "3";
}
