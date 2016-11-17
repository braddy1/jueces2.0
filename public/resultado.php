<?php 
	include "../view/buscar.php";

	$json = Enviar();
	echo $json; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../public/vendor/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="../public/vendor/jquery/jquery.js"></script>
	
	<script type="text/javascript">

		$(document).ready(function(){
			

	       var archivo = $.getJSON('{"id_persona":"11","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN","inicio":"14\/01\/1869","final":"05\/12\/1869","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"68","nro_caja":"1","nro_libro":"012","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"19","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN","inicio":"15\/01\/1872","final":"03\/12\/1872","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"49","nro_caja":"1","nro_libro":"020","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"24","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN ","inicio":"20\/01\/1873","final":"20\/12\/1873","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"37","nro_caja":"2","nro_libro":"025","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"29","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN ","inicio":"03\/04\/1875","final":"31\/12\/1875","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"38","nro_caja":"2","nro_libro":"030","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"35","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN ","inicio":"12\/01\/1878","final":"24\/12\/1878","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"63","nro_caja":"2","nro_libro":"036","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"65","nombres":"GALLEGOS","a_paterno":"","a_materno":"DANIEL","inicio":"02\/06\/1910","final":"18\/02\/1911","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"32","nro_caja":"4","nro_libro":"068","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"68","nombres":"GALLEGOS","a_paterno":"","a_materno":"DANIEL","inicio":"27\/03\/1911","final":"31\/12\/1911","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"35","nro_caja":"4","nro_libro":"071","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"102","nombres":"GALLEGOS","a_paterno":"","a_materno":"NICOLAS ","inicio":"02\/04\/1962","final":"12\/03\/1963","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"44","nro_caja":"5","nro_libro":"105","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"110","nombres":"GALLEGOS","a_paterno":"","a_materno":"NICOOLAS ","inicio":"30\/06\/1964","final":"29\/12\/1964","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CIVIL","cant_folios":"6","nro_caja":"5","nro_libro":"113","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"149","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN ","inicio":"20\/01\/1869","final":"11\/10\/1869","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CRIMINAL","cant_folios":"45","nro_caja":"6","nro_libro":"152","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"158","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN","inicio":"16\/02\/1872","final":"14\/09\/1872","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CRIMINAL","cant_folios":"27","nro_caja":"6","nro_libro":"161","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"159","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN ","inicio":"07\/12\/1872","final":"12\/03\/1874","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CRIMINAL","cant_folios":"37","nro_caja":"6","nro_libro":"162","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"163","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN","inicio":"30\/07\/1873","final":"05\/01\/1874","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CRIMINAL","cant_folios":"10","nro_caja":"6","nro_libro":"166","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"166","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN ","inicio":"04\/02\/1875","final":"03\/01\/1876","serie_documental":"ACTAS DE JUICIOS VERBALES","causa":"CRIMINAL","cant_folios":"24","nro_caja":"6","nro_libro":"169","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"174","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN ","inicio":"15\/03\/1878","final":"29\/11\/1878","serie_documental":"ACTAS DE JUCIOS VERBALES","causa":"CRIMINAL","cant_folios":"21","nro_caja":"7","nro_libro":"177","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"218","nombres":"GALLEGOS","a_paterno":"MONRROY","a_materno":"NICOLAS","inicio":"02\/\/04\/1962","final":"18\/03\/1963","serie_documental":"ACTAS DE JUCIOS VERBALES","causa":"CRIMINAL","cant_folios":"53","nro_caja":"8","nro_libro":"221","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"223","nombres":"GALLEGOS","a_paterno":"","a_materno":"NICOLAS","inicio":"26\/04\/1964","final":"27\/02\/1965","serie_documental":"ACTAS DE JUCIOS VERBALES","causa":"CRIMINAL","cant_folios":"8","nro_caja":"8","nro_libro":"226","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"303","nombres":"GALLEGOS","a_paterno":"","a_materno":"JULIAN","inicio":"1878-03-23","final":"1878-08-19","serie_documental":"ACTAS DE JUCIOS VERBALES","causa":"CONCILIACION","cant_folios":"6","nro_caja":"10","nro_libro":"306","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"355","nombres":"GALLEGOS","a_paterno":"MONRROY","a_materno":"NICOLAS ","inicio":"22\/09\/1962","final":"19\/03\/1963","serie_documental":"ACTAS DE JUICIOS VERVALES","causa":"MEMORANDUN","cant_folios":"6","nro_caja":"11","nro_libro":"358","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"360","nombres":"GALLEGOS","a_paterno":"","a_materno":"NICOLAS ","inicio":"18\/04\/1964","final":"17\/05\/1965","serie_documental":"ACTAS DE JUICIOS VERVALES","causa":"MEMORANDUN","cant_folios":"40","nro_caja":"11","nro_libro":"363 B","procedencia":"ILAVE","provincia":"ILAVE","observacion":""},{"id_persona":"1080","nombres":"GALLEGOS","a_paterno":"","a_materno":"CRISTOBAL","inicio":"1911-05-27","final":"1911-05-27","serie_documental":"ACTA DE JUICIOS VERBALES","causa":"CRIMINAL","cant_folios":"4","nro_caja":"31","nro_libro":"479","procedencia":"HUACULLANI","provincia":"HUACULLANI","observacion":"DETERIORADO"}');
	        var jsonObj = $.parseJSON(archivo);
	        var html = '<table border="1">';
	        $.each(jsonObj, function(key, value){
	            html += '<tr>';
	            html += '<td>' + key + '</td>';
	            html += '<td>' + value + '</td>';
	            html += '</tr>';
	        });
	        html += '</table>';

	        $('div').html(html);
		});
	
	</script>
</head>
<body>
	<div>[[datos]]</div>
	
</body>
</html>