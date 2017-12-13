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
            telefono: {
                required: true,
                minlength: 9,
                maxlength: 10
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
            checkBox: {
                required: true
            },
            radioButton: {
                required: true
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
            telefono: {
                required: "<span class='errors-class'>Debe ingresar un teléfono de 10 dígitos</span>",
                minlength: "<span class='errors-class'>El teléfono tiene que tener 10 dígitos</span>",
                maxlength: "<span class='errors-class'>El teléfono tiene que tener 10 dígitos</span>"           
            },
            tarjeta: {
                required: "<span class='errors-class'>Tarjeta</span>"
            },
            fecha: {
                required: "<span class='errors-class'>Debe seleccionar una fecha</span>"
            },
            checkBox: {
                required: "<span class='errors-class'>Marque la casilla</span>"
            },
            radioButton: {
                required: "<span class='errors-class'>Seleccione una opción</span>"
            }
            
        }
   });  
});