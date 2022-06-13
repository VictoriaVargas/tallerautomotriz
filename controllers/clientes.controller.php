<?php 
class ControladorClientes{
    static public function ctrCrearCliente(){
        if(isset($_POST["nombre"])){
            $tabla = "clientes";
            $datos = Array(
                "rut"=>$_POST["rut"],
                "comuna"=>$_POST["comuna"],
                "nombre"=>$_POST["nombre"],
                "direccion"=>$_POST["direccion"],
                "email"=>$_POST["email"],
                "telefono"=>$_POST["telefono"]
            );
            $respuesta = ModeloClientes::mdlCrearCliente($tabla, $datos);
            if($respuesta == "ok"){
                echo 
                    '<script>
                        Swal.fire({
                            icon: "success",
                            title: "Cliente creada exitosamente.",
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