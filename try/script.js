function page1(){
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

      var request = new XMLHttpRequest();
      request.open("GET", "home.json", false);
      request.send(null)
      var json = JSON.parse(request.responseText);

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
