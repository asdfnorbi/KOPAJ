<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="all"/>

<title> OLIMPIA </title>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Hege Refsnes">
</head>
<style>
body {background-color:white}

</style>
<body>
<div id="header">
<img src="logo.png" alt="Mountain View"  "text-align:center" id="logo">

</div>

<div id="menu">
<ul>
<li><a href="index.html">Kezdőlap</a></li>
<li><a href="stadion.html">Stadionról</a></li>
<li><a href="jatekos.html">Legjobb játékos</a></li>

</ul>
</div>
<div id="szoveg">
    <b><h2>Arsenal FC</h2>
<br>
<br>
Az Arsenal Football Club (röviden Arsenal, The Arsenal vagy az Ágyúsok) angol profi labdarúgócsapat Holloway-ben, Észak-Londonban. A Premier League-ben játszanak, és az egyik legsikeresebb klub az angol labdarúgásban 13 First Division és Premier League címmel és 12 FA Kupával.
<br>
<br>
Az Arsenalt 1886-ban alapították, viszont első fontosabb trófeáikat az 1930-as években nyerték, öt League Championship címet és két FA Kupát. Egy sikertelen időszak után (a háború utáni években) a második olyan klub volt, amelynek sikerült megnyernie a duplát (az 1970–71-es szezonban).
<br>
<br>
Az elkövetkezendő húsz év folyamán az egyik legsikeresebb angol csapat lett, ebben az időszakban az Arsenal megnyert két Duplát, a Premier League-et veretlenül, valamint az első londoni klub volt, amely elérte az UEFA Bajnokok Ligája döntőjét.
<p id="demo"></p>

<script>
var day;
switch (new Date().getDay()) {
    case 0:
        day = "vasarnap";
        break;
    case 1:
        day = "hetfo";
        break;
    case 2:
        day = "kedd";
        break;
    case 3:
        day = "szerda";
        break;
    case 4:
        day = "csutortok";
        break;
    case 5:
        day = "pentek";
        break;
    case  6:
        day = "szombat";
        break;
}
document.getElementById("demo").innerHTML = "Mai nap: " + day;
</script>

<div id="tablazat">
Legsikeresebb angol labdarugo csapatok a megnyert kupak szama alapjan:
<table style="width:40%">
  <tr>
    <td>Manchester United</td>
    <td>62</td>      
    
  </tr>
  <tr>
    <td>Liverpool</td>
    <td>60</td>        
    
  </tr>
  <tr>/
    <td><b>ARSENAL</b></td>
    <td>43</td>        
    
  </tr>
  <tr>
    <td>Chelsea</td>
    <td>28</td>        
    
  </tr>
  <tr>
    <td>Aston Villa</td>
    <td>24</td>        
    
  </tr>
  <tr>
    <td>Tottenham</td>
    <td>24</td>        
    
  </tr>
</table>
</div>



</div>
<div id="lablec">
Olimpia
</div>
<body background="back.jpeg" id="back">
</body>
</html>