<?php 
class ControladorClientes{
    static public function ctrCrearCliente(){
        if(isset($_POST["nombre"])){
            $tabla = "clientes";
            /* Formato de RUT 8 numeros  , - , letra "k" unicamente o numero del 0 al 9 */
            /* Aquí va la validación del RUT */

                    

            /* Arreglo en donde se guarda la informacion de los inputs */
            $datos = Array(
                "rut"=>$_POST["rut"],
                "comuna"=>$_POST["comuna"],
                "nombre"=>$_POST["nombre"],
                "direccion"=>$_POST["direccion"],
                "email"=>$_POST["email"],
                "telefono"=>$_POST["telefono"]
            );
            /* Ejecucion del script de inserción a la base de datos */
            $respuesta = ModeloClientes::mdlCrearCliente($tabla, $datos);
            /* Validaciones de insercion y errores en la insercion */
            if($respuesta == "ok"){
                echo 
                    '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Cliente creado exitosamente.",
                            showConfirmButton: true, 
                            confirmButtonText: "Cerrar",
                            closeOnConfirm : false
                        }).then((result)=>{
                            if(result.value){
                                window.location = "crearcliente";
                            }
                        });
                    </script>';
                //Funcionalidad Correo
            }else{
                echo '<script>
                        Swal.fire({
                            title: "Error al crear el cliente.",
                            icon: "error",
                            showConfirmButton: true, 
                            confirmButtonText: "Cerrar",
                            closeOnConfirm : false
                        }).then((result)=>{
                            
                                if(result.value){
                                    window.location = "crearcliente";
                                }
                        });
                        
                    </script>';
            } 
        }
    }
}