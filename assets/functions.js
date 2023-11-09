//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=table_autos',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function registerAuto(){
var formData = new FormData(document.forms.namedItem("formAuto"));
$.ajax({
	type: 'POST',
	url: '?c=administrator&m=registerauto',
	data: formData,
	processData: false,
	contentType: false,
	success: function (response) {
		read();
		alert('Los datos se guardaron correctamente.');
		$('#addAuto').modal('hide');
	}
});

}	

function updateauto(){
    var formData = new FormData(document.forms.namedItem("formAutoUpdate"));
    $.ajax({
        type: 'POST',
        url: '?c=administrator&m=updateauto',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            read();
            $('#updateAuto').modal('hide');
        }
    });
}

function deleteAuto(id){	
	if (confirm('¿Está seguro de eliminar este registro?')) {
        $.ajax({
            type: 'POST',
            url: '?c=administrator&m=deleteauto',
            data: {
                id: id
            },
            success: function (response) {
                read();
            }
        });
    }
}

function ModalRegister(){
	$('#addAuto').modal('show');
}

function ModalUpdate(id,modelo,año,color,pasajeros,cilindros,transmision,velocidad){			
	document.formAutoUpdate.id.value 			= id;
	document.formAutoUpdate.modelo.value 		= modelo;
	document.formAutoUpdate.año.value 			= año;
	document.formAutoUpdate.color.value 		= color;
	document.formAutoUpdate.pasajeros.value 	= pasajeros;
	document.formAutoUpdate.cilindros.value 	= cilindros;
	document.formAutoUpdate.transmision.value 	= transmision;
	document.formAutoUpdate.velocidad.value 	= velocidad;
	$('#updateAuto').modal('show');
}
