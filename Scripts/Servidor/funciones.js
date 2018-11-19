function agregaform(datos){

	d=datos.split('||');

	$('#num_control').val(d[0]);
	$('#nombre').val(d[1]);
	$('#primer_ap').val(d[2]);
	$('#segundo_ap').val(d[3]);
	$('#edad').val(d[4]);
	$('#semestre').val(d[5]);
	$('#carrera').val(d[6]);

}
function agregaNC(datos){

	d=datos.split('||');

	$('#num_controlE').val(d[0]);

}
