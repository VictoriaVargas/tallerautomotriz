<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Clientes/</span>Crear Nuevo Cliente</h4>
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Formulario de Cliente</h5>
                </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">RUT</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-credit-car"></i></span>
                              <input type="text" name="rut" class="form-control" id="basic-icon-default-fullname" placeholder="" aria-describedby="basic-icon-default-fullname2"/>
                            </div>
                        </div>
                    </div>
                    <!-- Inicia Input de Cliente -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nombre</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" name="nombre" id="basic-icon-default-fullname2" class="form-control" placeholder=""  aria-describedby="basic-icon-default-fullname2" required/>
                            </div>
                        </div>
                    </div>
                    <!-- Termina Input de Cliente -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Comuna</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-landmark"></i></span>
                              <select class="form-select" name="comuna" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option></option>
                                <option value="1">Algarrobo</option>
                                <option value="2">Alhué</option>
                                <option value="3">Ancud</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Direccion</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-receipt"></i></span>
                                <input type="text" name="direccion" id="basic-icon-default-fullname2" class="form-control" placeholder=""  aria-describedby="basic-icon-default-fullname2"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="email" name="email" id="basic-icon-default-email" class="form-control" placeholder="@example.com" aria-label="john.doe" aria-describedby="basic-icon-default-email2"/>
                            </div>
                            <div class="form-text">Escribe un correo electrónico válido</div>
                        </div>
                    </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-phone">Número de Teléfono</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                            <input type="text" name="telefono" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2"/>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button class="btn btn-primary">Crear Registro</button>
                    </div>
                    <?php 
                        $save = new ControladorClientes();
                        $save -> ctrCrearCliente();
                    ?>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
