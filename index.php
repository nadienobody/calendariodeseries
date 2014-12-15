<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-ES" lang="es-ES">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Calendario de Series - Sigue los estrenos de tus series favoritas</title>
		<meta name="description" content="Con el calendario de series no volver&aacute;s a perderte un estreno."/>
		<meta name="ROBOTS" content="NOARCHIVE"/>
		<link rel="canonical" href="http://calendario.series.es/"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="css/custom.css" rel="stylesheet" />
        <link href="css/fullcalendar.css" rel="stylesheet" />
        <link href="css/fullcalendar-custom.css" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/fullcalendar.min.js"></script>
        <script src="js/fullcalendar-custom.js"></script>
    </head>
    <body>
        <img id="menudisplay" src="img/menu.PNG">
        <div id="header">
            <div id="color-legend">Leyenda</div>
            <a href="/"><img src="img/logo2.png" id="logo"></a>
            <ul id="topmenu">
                <li class="menutopic"><a href="faq.php">Ayuda (FAQ)</a></li>
                <li class="menutopic"><a href="http://www.foroseries.com/">Foro de series</a></li>
                <li class="menutopic lastmt"><a href="http://www.subtitulos.es/">Subtitulos.es</a></li>
            </ul>
        </div>
        <div id="iamlegend">
            <div class="closelegend">X</div>
            <div class="legend-title"><h3>Leyenda de colores</h3></div>
            <table id="tablelegend">
            <tr>    
                <td class="color" bgcolor="#1303DE"></td>
                <td>Nueva serie</td>
            </tr>
            <tr>
                <td class="color" bgcolor="#40D962"></td>
                <td>Nueva temporada</td>
            </tr>
            <tr>
                <td class="color" bgcolor="#ea7f23"></td>
                <td>Final de temporada</td>
            </tr>
            <tr>
                <td class="color" bgcolor="#ff0b0b"></td>
                <td>Final de la serie</td>
            </tr>
            <tr>
                <td class="color" bgcolor="#ffe30b"></td>
                <td>Estreno simultáneo (Netflix)</td>
            </tr>
            </table>
        </div>
        <div id="calendar"></div>
    </body>
</html>
