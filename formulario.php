<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es-CO">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <?php 
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);//no mostrar noticias o avisos de warnings
        //esto ayudara a que no se muestre la advertencia, pero puede suceder que cuando se haga el location desde validar, se reasigne por null
        if($_GET["error"]=="si"){
            echo "<span style='color:red;font-size:2em'>Verifica tus credenciales</span>";//Asi tal cual, aparecera como una advertencia en el navegador debido a que no se ha recibido respuesta del envio de datos
        }
        ?>
        <h1>FORMULARIO DATOS GET</h1>
        <form name="validarGET" action="validar.php" method="GET" enctype="application/x-www-form-urlencoded">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" />
            <br/>
            <label for="password">password</label>
            <input type="password" id="password" name="password" />
            <br />
            <label for="masculino">M</label>
            <input type="radio" name="sexo" value="m" id="masculino">
            <label for="femenino">F</label>
            <input type="radio" name="sexo" value="f" id="femenino">
            <br />
            <input type="hidden" name="enviar-hid" value="get"><!--Input que cumple la funcion de identificar el tipo de formulario, los valores son arbitrarios -->
            <input type="button" name="enviar-get" value="ENVIAR-get" id="enviarGet">
        </form>


        <h1>FORMULARIO DATOS POST</h1>
        <form name="validarPOST" action="validar.php" method="POST" enctype="application/x-www-form-urlencoded">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" />
            <br/>
            <label for="password">password</label>
            <input type="password" id="password" name="password" />
            <br />
            <label for="masculino">M</label>
            <input type="radio" name="sexo" value="m" id="masculino">
            <label for="femenino">F</label>
            <input type="radio" name="sexo" value="f" id="femenino">
            <br />
            <input type="hidden" name="enviar-hid" value="post">
            <input type="button" name="enviar-post" value="ENVIAR-post" id="enviarPost">
        </form>
        <!--Input que cumple la funcion de identificar el tipo de formulario, los valores son arbitrarios -->

        <script defer>
            function validarDatosGet(){
                const FORM=document.forms.validarGET
                let verificar=true
                let sexo=FORM.querySelectorAll('input[name="sexo"]')
                if(FORM.nombre.value.trim()==='') {
                    alert('User required')
                    FORM.nombre.focus()
                    verificar=false
                }else if(FORM.password.value.trim()===''){
                    alert('Password required')
                    FORM.password.focus()
                    verificar=false
                }else if(!FORM.sexo[0].checked && !FORM.sexo[1].checked){
                    alert('Falto definir sexo') //Evaluado con || no funciona correctamente
                    verificar=false
                }
               
                if(verificar){
                //    document.getElementsByName('validarGET')[0].submit()
                FORM.submit()
                   
                }
            }
           document.querySelector('#enviarGet').addEventListener('click',()=>{
                validarDatosGet()
            })


            function validarDatosPost(){
                const FORM=document.forms.validarPOST
                let verificar=true
                let sexo=FORM.querySelectorAll('input[name="sexo"]')
                if(FORM.nombre.value.trim()==='') {
                    alert('User required')
                    FORM.nombre.focus()
                    verificar=false
                }else if(FORM.password.value.trim()===''){
                    alert('Password required')
                    FORM.password.focus()
                    verificar=false
                }else if(!FORM.sexo[0].checked && !FORM.sexo[1].checked){
                    alert('Falto definir sexo') //Evaluado con || no funciona correctamente
                    verificar=false
                }
               
                if(verificar){
                //    document.getElementsByName('validarGET')[0].submit()
                FORM.submit()
                   
                }
            }
           document.querySelector('#enviarPost').addEventListener('click',()=>{
                validarDatosPost()
            })
        
        </script>
    </body>
</html>
