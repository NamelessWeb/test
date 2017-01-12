<!-- !DOCTYPE definerer dokumenttype som da er html -->
<!DOCTYPE html>
<html>
<!-- head er da plassen der du legger inn text og bilde som du vil ha i headeren som f.eks <title> som gir tittel-->
<head>
  
  <title>Thomas</title>
  <!-- <link> da definerer kobling mellom dokumentet og en annen fil/kode som et stylesheet. Her har jeg da lagt inn fontyper og css filen. Når du ser i CSS filen er det veldig lett og forstå hva som gjør hva og hvor på siden-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Quicksand:300,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="test.css">
</head>
<!-- <body> definerer da bare at her vil da det som vises på nettsiden ligge-->
<body>
<!-- div definerer til da en spesiell klasse eller id som du kan sette opp til å koble sammen i f.eks css koden. Her har jeg lagt da klasser som header, partner og prop. ID er da en slags undertittel til klassen som da legger f.ex text over klassen som er i css filen en bakgrunn -->
  <div class="header">
    <div id="header-text">
      <h1>Travel Like Never Before</h1>
      <h2>Whether you're looking for adventure or luxury, let us help you plan your perfect getaway.</h2>
    </div>
  </div>
<ul>
  <li><a href="default.asp">Home</a></li>
  <li><a href="news.asp">News</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
  <div class="partner">
    <!-- alle <h> er da laget som regel for overskrifter, de kan ha h1, h2 osv. for størrelse, det kan man endre i css filen. <p> er da for paragrafer. 
    Rett under her ser du også <img src som er da til å legge inn ett bilde -->
    <h4>Proud Partner of Am South Airlines <img src="https://s3.amazonaws.com/codecademy-content/courses/web-101/unit-5/htmlcss1-img_amsoair.png" id="aa-logo" width="150px"></h4>
  </div>

  <div class="main">
    <h3>Why You Should Choose Jetsetter Concierge Travel Planning</h3>
    <p>With over 25 years of experience in concierge, high-end travel planning, we'll provide you with the highest quality services. Every vacation is unique, custom, and tailored to your tastes.</p>

    <div class="value-props">
      <a href="http://youtube.com">
      <div class="prop">
        <img src="https://s3.amazonaws.com/codecademy-content/courses/web-101/unit-5/htmlcss1-img_diamond.png" width="60px">
        <h2>Youtube</h2>
        <p>We don't do standardized packages because we know everyone wants something different. Every vacation will be uniquely customized to your tastes.</p>
      </div>
      
      </a>
      <a href="http://google.com">
      <div class="prop">
        <img src="https://s3.amazonaws.com/codecademy-content/courses/web-101/unit-5/htmlcss1-img_diamond.png" width="60px">
        <h2>Google</h2>
        <p>Google’s mission is to organize the world’s information and make it universally accessible and useful.</p>
      </div>
      </a>

      <a href="http://facebook.com">
      <div class="prop">
        <img src="https://s3.amazonaws.com/codecademy-content/courses/web-101/unit-5/htmlcss1-img_diamond.png" width="60px">
        <h2>Facebook</h2>
        <p>Facebook’s mission is to give people the power to share and make the world more open and connected.</p>
      </div>
      </a>
    </div>
  </div>
  
</body>
</html>