console.log("hola");
let id_trabajador = document.getElementById("idTrabajador");
let nombre_trabajador = document.getElementById("nombre");
let apellido_paterno = document.getElementById("apellidoPaterno");
let apellido_materno = document.getElementById("apellidoMaterno");
let tipo_documento_identidad = document.getElementById("tipoDocumentoIdentidad");
let numero_documento_identidad = document.getElementById("numeroDocumentoIdentidad");
let fecha_nacimiento = document.getElementById("fechaNacimiento");
let departamento = document.getElementById("departamento");
let provincia = document.getElementById("provincia");
let distrito = document.getElementById("distrito");
let direccionExacta = document.getElementById("direccionExacta");


let regExpRUC  = new RegExp(/[0-9]{11}$/)
let regExpPasaporte  = new RegExp( /[0-9]{12}$/)
let regExpDNI  = new RegExp(/[0-9]{8}$/)

function editar(id) {

  $.ajax(`http://localhost/PRUEBA ROCKDRILL/?page=trabajador&opcion=editar&id=${id}`, {
    dataType: 'json',
    contentType: 'application/json',
    cache: false
  })
    .done(function (response) {
      id_trabajador.value = response[0].id
      nombre_trabajador.value = response[0].nombre
      apellido_paterno.value = response[0].apellidoPaterno
      apellido_materno.value = response[0].apellidoMaterno
      $("#tipoDocumentoIdentidad option[value="+ response[0].tipoDocumento +"]").attr("selected",true);
      numero_documento_identidad.value = response[0].numeroDocumento
      $("input[name=sexo][value="+response[0].sexo+"]").prop("checked",true)
      fecha_nacimiento.value = response[0].fechaNacimiento
      departamento.value = response[0].departamento
      provincia.value = response[0].provincia
      distrito.value = response[0].distrito
      direccionExacta.value = response[0].direccionExacta
      listar()
    });
}

function calcularEdad(fecha) {
  var hoy = new Date();
  var cumpleanos = new Date(fecha);
  var edad = hoy.getFullYear() - cumpleanos.getFullYear();
  var m = hoy.getMonth() - cumpleanos.getMonth();

  if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
      edad--;
  }

  return edad;
}

function validarDocumentoIdentidad (){
  let isValido=true;
  if(tipo_documento_identidad.value=="RUC" && regExpRUC.test(parseInt(numero_documento_identidad.value)) == false){
    alert("cantidad de numeros debe ser 11");
    isValido = false
  }
  else if(tipo_documento_identidad.value=="DNI" && regExpDNI.test(parseInt(numero_documento_identidad.value)) == false){
    alert("cantidad de numeros debe ser 8");
    isValido = false
  }
  else if(tipo_documento_identidad.value=="Pasaporte" && regExpPasaporte.test(parseInt(numero_documento_identidad.value)) == false){
    alert("cantidad de numeros debe ser 12");
    isValido = false
  }
  return isValido
}

function modificar() {

  if(!validarDocumentoIdentidad()){
    return false
  }
  
  if(calcularEdad(fecha_nacimiento.value) < 18){
    alert("el trabajador debe ser mayor de edad");
    return false
  }

  return false


  let datos ={
    nombreTrabajador : nombre_trabajador.value,
    apellidoPaterno : apellido_paterno.value,
    apellidoMaterno : apellido_materno.value,
    tipoDocumentoIdentidad : tipo_documento_identidad.value,
    numeroDocumentoIdentidad : numero_documento_identidad.value,
    sexo : $('input[name="sexo"]:checked').val(),
    fechaNacimiento : fecha_nacimiento.value,
    departamento : departamento.value,
    provincia : provincia.value,
    distrito : distrito.value,
    direccionExacta : direccionExacta.value,
  }
  $.ajax(`http://localhost/PRUEBA ROCKDRILL/?page=trabajador&opcion=modificar&id=${id_trabajador.value}`, {
    type: 'post',
    data: datos,
  }).done(listar())
}
function eliminar(id) {
  $.ajax(`http://localhost/PRUEBA ROCKDRILL/?page=trabajador&opcion=eliminar&id=${id}`, {
    dataType: 'json',
    contentType: 'application/json',
    cache: false
  })
    .done(listar());
}

function insertar() {

  if(validarNumeroDocumento()){
    alert("Numero Documento Repetido");
    return false
  }

  if(!validarDocumentoIdentidad()){
    return false
  }

  if(calcularEdad(fecha_nacimiento.value) < 18){
    alert("el trabajador debe ser mayor de edad");
    return false
  }

  let datos ={
    nombreTrabajador : nombre_trabajador.value,
    apellidoPaterno : apellido_paterno.value,
    apellidoMaterno : apellido_materno.value,
    tipoDocumentoIdentidad : tipo_documento_identidad.value,
    numeroDocumentoIdentidad : numero_documento_identidad.value,
    sexo : $('input[name="sexo"]:checked').val(),
    fechaNacimiento : fecha_nacimiento.value,
    departamento : departamento.value,
    provincia : provincia.value,
    distrito : distrito.value,
    direccionExacta : direccionExacta.value,
  }

  $.ajax(`http://localhost/PRUEBA ROCKDRILL/?page=trabajador&opcion=insertar`, {
    type: 'post',
    data: datos,
  }).done(listar())
}

function validarNumeroDocumento (){
  console.log("vali");
  console.log(numero_documento_identidad.value);
  $.ajax(`http://localhost/PRUEBA ROCKDRILL/?page=trabajador&opcion=validarNumeroDocumento&id=${numero_documento_identidad.value}`, {
    dataType: 'json',
    contentType: 'application/json',
    cache: false
  })
    .done(function (response){
      console.log(response);
    });
}

function listar() {
  $(".filaTrabajador").remove()

  $.ajax(`http://localhost/PRUEBA ROCKDRILL/?page=trabajador&opcion=listar`, {
    dataType: 'json',
    contentType: 'application/json',
    cache: false
  })
    .done(function (response) {
      let contador = 1;
      var html;
      $.each(response, function (index, element) {
        html = '<TR class="filaTrabajador">' ;
        html += '<TD>'+contador+'</TD>';
        html += '<TD>'+element.nombre+'</TD>';
        html += '<TD>'+element.apellidoPaterno+' '+element.apellidoMaterno+'</TD>';
        html += '<TD>'+element.tipoDocumento+'</TD>';
        html += '<TD>'+element.numeroDocumento+'</TD>';
        html += '<TD>'+element.sexo+'</TD>';
        html += '<TD>'+element.fechaNacimiento+'</TD>';
        html += '<TD>'+element.departamento+'</TD>';
        html += '<TD>'+element.distrito+'</TD>';
        html += '<TD><button type="submit" class="btn btn-warning" onclick="editar('+element.id+');">E</button></TD>'
        html += '<TD><button type="submit" class="btn btn-danger" onclick="eliminar('+element.id+');">X</button></TD>'
        html += '</TR>'
        $('.tableBody').append(html);
        contador += 1
      });
    });
}

listar()