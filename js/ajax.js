function activarCoche(str) { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert('El coche con numero de placa ' + str + '  fue activado')
            }
        };
        xmlhttp.open("GET","coches.php?opcion=activar&placa="+str,true);
        xmlhttp.send();
}

function actualizarPass() { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        var pass = document.getElementById('pass').value;
        var newpass = document.getElementById('newpass').value
        if (pass == newpass) {
            alert(pass)
        /*xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert('El coche con numero de placa ' + str + '  fue activado')
            }
        };
        xmlhttp.open("GET","coches.php?opcion=activar&placa="+str,true);
        xmlhttp.send();*/
        }else {
            alert('Las contraseñas no coinciden')
        }   
}