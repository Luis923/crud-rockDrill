<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./src/index.css">
  <title>Document</title>
</head>

<body class="bg-dark">
  <div class="container my-5 bg-secondary">
    <div class="row">
      <div class="col">
        <h1 class="text-center">PLANILLA DE TRABAJADORES</h1>
        <form class="row my-4">
          <div class="col-3 mb-3 d-none">
            <label for="idTrabajador" class="form-label">ID</label>
            <input type="text" class="form-control" id="idTrabajador" aria-describedby="">
          </div>
          <div class="col-3 mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" aria-describedby="" pattern="[a-zA-Z]{2,20}">
            <div id="emailHelp" class="form-text">Solo letras</div>
          </div>
          <div class="col-3 mb-3">
            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="apellidoPaterno" aria-describedby="" pattern="[a-zA-Z]{2,20}">
            <div id="emailHelp" class="form-text">Solo letras</div>
          </div>
          <div class="col-3 mb-3">
            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="apellidoMaterno" aria-describedby="" pattern="[a-zA-Z]{2,20}">
            <div id="emailHelp" class="form-text">Solo letras</div>
          </div>
          <div class="col-3 mb-3">
            <label for="tipoDocumentoIdentidad" class="form-label">Tipo de Documento de Identidad</label>
            <select id="tipoDocumentoIdentidad" class="form-select">
              <option value="RUC">RUC</option>
              <option value="DNI">DNI</option>
              <option value="Pasaporte">Pasaporte</option>
            </select>
          </div>
          <div class="col-3 mb-3">
            <label for="numeroDocumentoIdentidad" class="form-label">Numero</label>
            <input type="number" class="form-control" id="numeroDocumentoIdentidad" aria-describedby="" pattern="/^([0-9])*$/">
            <div id="emailHelp" class="form-text">Solo numeros</div>
          </div>
          <div class="col-3">
            <div class="form-check">
              <p>Sexo:</p>
              <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="M">
              <label class="form-check-label" for="flexRadioDefault1">
                Masculino
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="F">
              <label class="form-check-label" for="flexRadioDefault2">
                Femenino
              </label>
            </div>
          </div>
          <div class="col-3 mb-3">
            <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" aria-describedby="">
          </div>
          <div class="col-3 mb-3">
            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="departamento" aria-describedby="" pattern="[a-zA-Z]{2,20}">
            <div id="emailHelp" class="form-text">Solo letras</div>
          </div>
          <div class="col-3 mb-3">
            <label for="provincia" class="form-label">Provincia</label>
            <input type="text" class="form-control" id="provincia" aria-describedby="" pattern="[a-zA-Z]{2,20}">
            <div id="emailHelp" class="form-text">Solo letras</div>
          </div>
          <div class="col-3 mb-3">
            <label for="distrito" class="form-label">Distrito</label>
            <input type="text" class="form-control" id="distrito" aria-describedby="" pattern="[a-zA-Z]{2,20}">
            <div id="emailHelp" class="form-text">Solo letras</div>
          </div>
          <div class="col-3 mb-3 form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="direccionExacta" pattern="[a-zA-Z]{2,100}"></textarea>
            <label for="direccionExacta">Direccion Exacta</label>
          </div>
          <div class="row mb-3">
            <div class="col">
              <div  class="btn btn-primary" href="javascript:;" onclick="insertar();">Registrar</div>
              <div  class="btn btn-info" href="javascript:;" onclick="modificar();">Modificar</div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row tabla">
      <div class="col">
      <TABLE class='table'>
        <THEAD class='table-dark'>
        <TR>
        <TH>N°</TH>
        <TH>Nombre</TH>
        <TH>Apellidos</TH>
        <TH>Tipo Doc.</TH>
        <TH>Numero Doc.</TH>
        <TH>Sexo</TH>
        <TH>Fecha Nacimiento</TH>
        <TH>Depart.</TH>
        <TH>Distrito</TH>
        <TH>Editar</TH>
        <TH>Eliminar</TH>
        </TR>
        </THEAD>
        <TBODY class="tableBody">

        </TBODY>
        </TABLE>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="./src/index.js"></script>
</body>

</html>