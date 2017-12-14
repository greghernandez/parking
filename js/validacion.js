$().ready(function() {
   $("#form-to-valid").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 4
            },
            apellidos: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 10
            },
            pass_user: {
                required: true,
                minlength: 10
            },
            valPassword: {
                required: true,
                minlength: 10,
                equalTo: "#password"
            },
            edad: {
                number: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            correo: {
                required: true,
                email: true
            },
            telefono: {
                required: true,
                minlength: 9,
                maxlength: 10
            },
            tarjeta: {
                required: true,
                maxlength: 16,
                minlength: 16
            },
            cvv: {
                required: true,
                maxlength: 3,
                minlength: 3
            },
            estado: {
                required: true
            },
            municipio: {
                required: true
            },
            direccion: {
                required: true
            },
            cp: {
                required: true,
                maxlength: 5,
                minlength: 5
            },
            rfc: {
                required: true,
                maxlength: 13,
                minlength: 12
            },
            checkBox: {
                required: true
            },
            radioButton: {
                required: true
            },
            placa: {
                required: true,
                maxlength: 9,
                minlength: 9
            },
            modelo: {
                required: true
            },
            color: {
                required: true
            },
            fecha: {
                required: true,
                minlength: 4,
                maxlength: 4
            }
        },
        messages: {
            nombre: {
                required: "<span class='errors-class'>Ingrese su nombre</span>",
                minlength: "<span class='errors-class'>El nombre debe tener a lo menos 4 caracteres</span>"
            },
            apellidos: {
                required: "<span class='errors-class'>Ingrese sus apellidos</span>",
                minlength: "<span class='errors-class'>El nombre debe tener a lo menos 5 caracteres</span>"
            },
            password: {
                required: "<span class='errors-class'>Ingrese una contraseña</span>",
                minlength: "<span class='errors-class'>La contraseña debe tener a lo menos 10 caracteres</span>"
            },
            pass_user: {
                required: "<span class='errors-class'>Ingrese una contraseña</span>",
                minlength: "<span class='errors-class'>La contraseña debe tener a lo menos 10 caracteres</span>"
            },
            valPassword: {
                required: "<span class='errors-class'>Ingrese una contraseña</span>",
                minlength: "<span class='errors-class'>La contraseña debe tener a lo menos 10 caracteres</span>",
                equalTo: "<span class='errors-class'>Las contraeñas no coinciden</span>"
            },
            edad: {
                number: "<span class='errors-class'>La edad debe estar expresada en números</span>",
                minlength: "<span class='errors-class'>La edad debe de contener a lo menos 2 digitos</span>"
            },
            email: {
                required: "<span class='errors-class'>Debe ingresar un Email</span>",
                email: "<span class='errors-class'>Debe ingresar un correo valido</span>"
            },
            correo: {
                required: "<span class='errors-class'>Debe ingresar un Email</span>",
                email: "<span class='errors-class'>Debe ingresar un correo valido</span>"
            },
            telefono: {
                required: "<span class='errors-class'>Debe ingresar un teléfono de 10 dígitos</span>",
                minlength: "<span class='errors-class'>El teléfono tiene que tener 10 dígitos</span>",
                maxlength: "<span class='errors-class'>El teléfono tiene que tener 10 dígitos</span>"           
            },
            tarjeta: {
                required: "<span class='errors-class'>Debes proporcionar un numero de tarjeta</span>",
                minlength: "<span class='errors-class'>Debes ingresar 16 dígitos</span>",
                maxlength: "<span class='errors-class'>Debes ingresar 16 dígitos</span>"

            },
            cvv: {
                required: "<span class='errors-class'>Debes proporcionar un cvv de 3 dígitos</span>",
                minlength: "<span class='errors-class'>Debes ingresar un cvv de 3 dígitos</span>",
                maxlength: "<span class='errors-class'>Debes ingresar 3 cvv dígitos</span>"

            },
            estado: {
                required: "<span class='errors-class'>Escribe el estado al que perteneces</span>"
            },
            municipio: {
                required: "<span class='errors-class'>Escribe el municipio al que perteneces</span>"
            },
            direccion: {
                required: "<span class='errors-class'>Debes introducir una dirección</span>"
            },
            cp: {
                required: "<span class='errors-class'>Escribe tu código postal</span>",
                minlength: "<span class='errors-class'>El código postal esta conformado por 5 dígitos</span>",
                maxlength: "<span class='errors-class'>El código postal esta conformado por 5 dígitos</span>"
            },
            rfc: {
                required: "<span class='errors-class'>Escribe tu RFC</span>",
                minlength: "<span class='errors-class'>El RFC esta conformado por lo menos por 12 dígitos</span>",
                maxlength: "<span class='errors-class'>El RFC esta conformado hasta por 13 dígitos</span>"
            },
            x: {
                required: "<span class='errors-class'>Debe seleccionar una fecha</span>"
            },
            checkBox: {
                required: "<span class='errors-class'>Marque la casilla</span>"
            },
            radioButton: {
                required: "<span class='errors-class'>Seleccione una opción</span>"
            },
            placa: {
                required: "<span class='errors-class'>Debe ingresar una placa</span>",
                minlength: "<span class='errors-class'>La placa debe tener 9 caracteres</span>",
                maxlength: "<span class='errors-class'>La placa debe tener 9 caracteres</span>"
            },
            modelo: {
                required: "<span class='errors-class'>Ingrese el modelo del coche</span>"
            },
            color: {
                required: "<span class='errors-class'>Ingrese el color de su coche</span>"
            },
            fecha: {
                required: "<span class='errors-class'>Ingrese el color de su coche</span>",
                minlength: "<span class='errors-class'>Ingrese el año del modelo de su coche (4 dígitos)</span>",
                maxlength: "<span class='errors-class'>Ingrese el año del modelo de su coche (4 dígitos)</span>"
            }
            
        }
   });
//Validación de formulario coche
  
});