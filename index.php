<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="assets/CSS/home.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="assets\Icone\menu.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="assets\Icone\menu.ico" />
    <script type="text/javascript" src="./assets/JavaScript/home.js"></script>
  </head>
  <body>

    <div class="JS">
      <img class="background total zero" src="./assets/Image/" id="img" alt="backgrond image">
      <div class="time_date total zero">
  			<div id="time" class="time"></div>
  			<div id="date" class="date"></div>
  		</div>
      <script type="text/javascript">
      heure();
      setInterval("heure()", 1000);
      document.getElementById('img').src += Math.round(Math.random()*49)+1 + ".webp";
      </script>
    </div>

    <div id="blank" class="blank total zero"></div>

    <div id="page1" class="main total zero">

      <div class="englobeur">
        <div class="big_onglet">
					<div class="st_onglet">
						<a href="https://www.google.fr/">
							<img src="assets\Icone\google.png" alt="google logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://mail.google.com/mail/">
							<img src="assets\Icone\gmail.png" alt="gmail logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://drive.google.com/">
							<img src="assets\Icone\drive.png" alt="google drive logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://translate.google.fr/">
							<img src="assets\Icone\trad.png" alt="google traduction logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://maps.google.fr/maps">
							<img src="assets\Icone\map.png" alt="google map logo">
						</a>
					</div>
				</div>
			</div>

			<div class="englobeur">
				<div class="big_onglet">
					<div class="st_onglet">
						<a href="https://www.netflix.com/fr/">
							<img src="assets\Icone\netflix.png" alt="netflix logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://open.spotify.com/">
							<img src="assets\Icone\spotify.png" alt="spotify logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://www.youtube.com/">
							<img src="assets\Icone\youtube.png" alt="youtube logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://www.twitch.tv/">
							<img src="assets\Icone\twitch.png" alt="twitch logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://discord.com/channels/@me">
							<img src="assets\Icone\discord.png" alt="discord logo">
						</a>
					</div>
				</div>
			</div>

			<div class="englobeur">
				<div class="big_onglet total">
					<div class="st_onglet center">
						<a href="https://intraetu.univ-nantes.fr/accueil/">
							<img class="icone" src="assets\Icone\intranet.png" alt="intranet logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://cas-ha.univ-nantes.fr/esup-cas-server/login?service=https%3A%2F%2Fmadoc.univ-nantes.fr%2Flogin%2Findex.php%3FauthCAS%3DCAS">
							<img class="icone" src="assets\Icone\madoc.png" alt="madoc logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://webmail-etu.univ-nantes.fr/src/login.php">
							<img class="icone" src="assets\Icone\webmail.png" alt="webmail logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://app.smart-edt.com/">
							<img src="assets\Icone\edt.png" alt="smart edt logo">
						</a>
					</div>
					<div class="onglet">
						<a href="https://notes.iut-nantes.univ-nantes.fr/">
							<img class="icone" src="assets\Icone\note.png" alt="note logo">
						</a>
					</div>
				</div>
			</div>

      <div class="englobeur">
        <button onclick="page2();" class="button st_onglet icone center">
            <img src="assets\Icone\plus.png" class="icone" alt="Plus">
        </button>
      </div>

    </div>

    <div id="page2" class="page2 total zero">

      <div class="fav">
        <button onclick="page1();" class="button icone center">
          <img src="assets\Icone\retour.png" class="icone" alt="retour logo">
        </button>
      </div>

      <?php
      $xml = simplexml_load_file('./assets/Php/app.xml');
      echo $xml;
      foreach ($xml->fav->app as $app) {
      echo  "<div class=\"fav\">";
      echo    "<a href=\"$app->lien\">";
      echo      "<img class=\"icone\" src=\"$app->icone\" alt=\"'$app->name' logo\">";
      echo    "</a>";
      echo  "</div>";}
       ?>

       <div class="fav">

        <button onclick=" window.open('speedtest.html','SpeedTest','menubar=no, scrollbars=no, top=100, left=100, width=370px, height=400px');" class="button icone center">
          <img src="assets\Icone\speedtest.png" class="icone" alt="plus logo">
        </button>
       </div>

      <div class="fav" id="plus">
        <button onclick="addElement();" class="button icone center">
          <img src="assets\Icone\plus.png" class="icone" alt="plus logo">
        </button>
      </div>

    </div>

    <div id="divform" class="divform zero">
      <form id="form" class="form" action="" method="post" autocomplete="off">
        <label class="input label labeltitre">Nom :</label><br>
        <input class="input" type="text" id="name" name="name"><br><br>
        <label class="input label labeltitre">Lien :</label><br>
        <input class="input" type="text" id="lien" name="lien"><br><br>
        <label class="input label labeltitre">Icone :</label><br>
        <input type="checkbox" name="auto" value="true">
        <label class="input label">Automatique ou </label>
        <input type="file" id="iconefile" name="iconefile" class="hidden inputbut" accept="image/png"><br><br>
        <input class="butform inputbut" type="submit" value="Envoyer" name="valider">
        <input class="butform inputbut" type="button" value="Annuler" onclick="annuler();">

        <?php
        if(isset($_REQUEST['valider']) && $_POST['name']!=null && $_POST['lien']!=null){
           $Name= $_POST['name'];
           $Lien= $_POST['lien'];
           if(isset($_POST['auto'])){
             $Icone = 'https://logo.clearbit.com/'.$Lien;
           }
           else{
             if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
               move_uploaded_file($_FILES['userfile']['tmp_name'],'assets/Icone/');
             }
             $Icone = 'assets/Icone/'. $Name . '.png';
           }


          $xml = new DOMDocument();
          $xml->load('assets\Php\app.xml');
          $fav = $xml->getElementsByTagName('fav')->item(0);

          $app = $xml->createElement('app');
          $fav->appendChild($app);

          $appname = $xml->createElement('name',$Name);
          $applien = $xml->createElement('lien',$Lien);
          $appico = $xml->createElement('icone',$Icone);

          $app->appendChild($appname);
          $app->appendChild($applien);
          $app->appendChild($appico);

          $xml->save('assets\Php\app.xml');

          echo '<script>
        			var plus = document.getElementById("plus");
              var newdiv = document.createElement("div");
              newdiv.id =\'',$Name,'\';
        			newdiv.className = "fav";
        			document.getElementById("page2").insertBefore(newdiv,plus);

        			var newa = document.createElement("a");
              newa.href =\'',$Lien,'\';
        			newa.id = \'',$Name,'\' + "_a";
              document.getElementById(\'',$Name,'\').appendChild(newa);

        			var newimg = document.createElement("img");
        			newimg.className = "icone";
        			newimg.src = \'',$Icone,'\';
        			newimg.alt = \'',$Name,'\' + " logo";
        			document.getElementById(\'',$Name,'\' + "_a").appendChild(newimg);
            </script>';
         }
         else{
           echo '<script>annuler();</script>';
         }?>
      </form>
    </div>
  </body>
</html>
