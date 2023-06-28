<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario</title>
</head>
<body>
    <?php 
      include("menu.php");
    ?>  
    <section class="grid-section mt-4" id="promociones">
      <div class="container mb-5">
        <div class="row gy-3">
          <div class="col-md-4">
            <div class="card border border-primary text-center">
              <div class="card-body">
                <h5 class="card-title">Estudiante</h5>
                <p class="card-text">Tienen un descuento</p>
                <h5 class="card-title">80%</h5>
                <p class="card-text text-black-50">* presentar documentación</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border border-info text-center">
              <div class="card-body">
                <h5 class="card-title">Trainee</h5>
                <p class="card-text">Tienen un descuento</p>
                <h5 class="card-title">50%</h5>
                <p class="card-text text-black-50">* presentar documentación</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border border-warning text-center">
              <div class="card-body">
                <h5 class="card-title">Junior</h5>
                <p class="card-text">Tienen un descuento</p>
                <h5 class="card-title">15%</h5>
                <p class="card-text text-black-50">* presentar documentación</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <a name="formulario"></a>
      <div class="container d-flex align-items-center flex-column">
        <div class="container text-center my-3">
          <h6 class="text-black-50">VENTA</h6>
          <h2>VALOR DE TICKET: $200</h2>
        </div>
        <form action="datosCompra.php" id="formulario" method="post" class="needs-validation" novalidate>
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
              <p id="errorNombre" class="text-danger"></p>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
              <p id="errorApellido" class="text-danger"></p>
            </div>
          </div>
          <div class="row mt-3 mb-3">
            <div class="col-12">
              <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required>
              <p id="errorCorreo" class="text-danger"></p>
            </div>
          </div>
          <div class="row">
            <div class="col-6" id="grupo__cantidad">
              <label for="Cantidad" class="form-label">Cantidad</label>
              <input type="text" class="form-control" id="Cantidad" name="cantidad" placeholder="Cantidad" required>
              <p id="errorCantidad" class="text-danger"></p>
            </div>
            <div class="col-6">
              <label for="categorias">Categoría</label>              
                <select class="form-select mt-2" id="categorias" name="categoria" required>
                  <option selected disabled value="" required>Seleccione una</option>
                  <option value="Estudiante">Estudiante</option>
                  <option value="Trainee">Trainee</option>
                  <option value="Junior">Junior</option>
                  <option value="Sin descuento">Sin descuento</option>
                </select>
                <div class="invalid-feedback">
                  Por favor seleccione una categoría.
                </div>             
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12 my-3 p-3 bg-dark text-white rounded" id="total">
              Total a pagar: $0
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <button type="button" class="btn btn-danger col-12 my-3 p-2" id="borrar" onclick="limpiarFormulario()">Borrar</button>
            </div>
            <div class="col-6">
              <button type="button" class="btn btn-primary col-12 my-3 p-2" onclick="calcularPrecioTotal()">Resumen</button>
            </div>
          </div>
          <div class="row">
            <div class="my-3">
              <button type="submit" id="enviar" class="btn btn-success p-2 col-12">Enviar</button>
            </div>
          </div>      
        </form>
      </div>
    </section>
    <?php
      include("footer.php");
    ?>
    <script>

      //Valida que los campos del formulario estén cargados
      (() => {
        'use strict'
        
        const forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity() || !campos.nombre || !campos.apellido || !campos.correo || !campos.cantidad) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      })()

      //Expresiones regulares para validar los campos
      const expresiones = {
            nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
            apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
            correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
            cantidad: /^\d{1,1000}$/
      }
      const formulario = document.getElementById("formulario");
      const inputs = document.querySelectorAll('#formulario input'); //Todos los campos del formulario
      const textos = document.querySelectorAll('#formulario p'); //Los textos de validaciones del formulario
      const borrar = document.getElementById("borrar");

      //Objeto cuyas propiedades son los campos del formulario, servirá para validar el mismo
      const campos = {
        nombre: false,
        apellido: false,
        correo: false,
        cantidad: false,
      }

      //Limpia el formulario 
      function limpiarFormulario(){
        const form = document.getElementById("formulario");
        form.reset();
        document.getElementById("total").innerHTML = 'Total a pagar: $0';
      }

      
      function validarFormulario(e){
        switch (e.target.name){
          case "nombre":
            if(!expresiones.nombre.test(e.target.value)){
              console.log("Nombre no válido");
              document.getElementById("errorNombre").innerHTML = "Por favor escriba un nombre válido.";
              document.getElementById("nombre").classList.add('border-danger');
              campos['nombre'] = false;
            }else{
              console.log("Es válido");
              document.getElementById('nombre').classList.remove('border-danger');
              document.getElementById("nombre").classList.add('border-success');
              document.getElementById("errorNombre").innerHTML = "";
              campos['nombre'] = true;
            }
          break;
          case "apellido":
            if(!expresiones.nombre.test(e.target.value)){
                console.log("Apellido no válido");
                document.getElementById("errorApellido").innerHTML = "Por favor escriba un apellido válido.";
                document.getElementById("apellido").classList.add('border-danger');
                campos['apellido'] = false;
              }else{
                console.log("Es válido");
                document.getElementById('apellido').classList.remove('border-danger');
                document.getElementById("apellido").classList.add('border-success');
                document.getElementById("errorApellido").innerHTML = "";
                campos['apellido'] = true;
              }
          break; 
          case "correo":
            if(!expresiones.correo.test(e.target.value)){
                console.log("Correo no válido");
                document.getElementById("errorCorreo").innerHTML = "Por favor escriba un correo válido.";
                document.getElementById("correo").classList.add('border-danger');
                campos['correo'] = false;
              }else{
                console.log("Es válido");
                document.getElementById('correo').classList.remove('border-danger');
                document.getElementById("correo").classList.add('border-success');
                document.getElementById("errorCorreo").innerHTML = "";
                campos['correo'] = true;
              }
          break; 
          case "cantidad":
          if(!expresiones.cantidad.test(e.target.value)){
              console.log("Cantidad no válida");
              document.getElementById("errorCantidad").innerHTML = "Por favor escriba una cantidad válida.";
              document.getElementById("Cantidad").classList.add('border-danger');
              campos['cantidad'] = false;
            }else{
              console.log("Es válido");
              document.getElementById('Cantidad').classList.remove('border-danger');
              document.getElementById("Cantidad").classList.add('border-success');
              document.getElementById("errorCantidad").innerHTML = "";
              campos['cantidad'] = true;
            }
          break;   
        }
      }

      //Recorre el array 'inputs' ejecutando la correspondiente función en cada elemento
      inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
      })
      inputs.forEach((input) => {
        input.addEventListener('blur', validarFormulario);
      })



      function calcularPrecioTotal(){
        //captura los datos de cantidad y categoría que le pasa el usuario
        const cantidad = document.getElementById("Cantidad");
        const categoria = document.querySelector("#categorias");

        //Sentencias condicionales que preguntan el tipo de categoria para hacer su respectivo descuento
        if(categoria.value == "Estudiante"){
          document.getElementById("total").innerHTML = 'Total a pagar: $' + (cantidad.value*200 - cantidad.value*200*80/100);
        }
        if(categoria.value == "Trainee"){
          document.getElementById("total").innerHTML = 'Total a pagar: $' + (cantidad.value*200 - cantidad.value*200*50/100);
        }
        if(categoria.value == "Junior"){
          document.getElementById("total").innerHTML = 'Total a pagar: $' + (cantidad.value*200 - cantidad.value*200*15/100);
        }
        if(categoria.value == "Sin descuento"){
          document.getElementById("total").innerHTML = 'Total a pagar: $' + cantidad.value*200;
        }
      }
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>