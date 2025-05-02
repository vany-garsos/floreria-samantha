                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Administrar Logo</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Logo</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Logo</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Logo</th>
                                            <th>Editar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $item = null;
                                        $campo = null;

                                        $logos = ControladorLogos::ctrMostrarLogos($item, $campo);
                                        foreach ($logos as $logo):
                                        ?>
                                            <tr>
                                                <td><?= $logo->id ?></td>
                                                <td><img src="<?= $logo->foto ?>" width="200px"></td>
                                                <td><button class="btn btn-warning btnEditarLogo" idLogo="<?= $logo->id ?>" data-toggle="modal" data-target="#modalEditarLogo">
                                                        Editar
                                                    </button></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->


                <!-- INICIAN LOS MODALES -->

                <!-- MODAL EDITAR LOGO -->

                <div class="modal fade" id="modalEditarLogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar logo</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">❌</span>
                                    </button>
                                </div>
                                <!-- TERMINA CABEZA MODAL -->

                                <!-- CUERPO MODAL -->
                                <div class="modal-body">
                                    <div class="form-group row">
    
                                        <!-- ENTRADA EDITAR LOGO -->
                                        <div class="col-sm-6">
                                            <input type="hidden" name="editarid" id="editarid" value="">
                                            <input type="file" class="nuevafotologo form-control form-control-user mt-3" name="editarnuevaFoto">
                                                <p>Peso maximo de la foto 2MB</p>
                                                <img src="vistas/img/usuarios/default/anonimo.png" class="img-thumbail previsualizar" width="100px">
                                                <input type="hidden" name="fotoactual" id="fotoactual">
                                        </div>
                                         
                                    </div>
                                </div>
                                <!-- TERMINA CUERPO DEL MODAL -->

                                <!-- PIE DEL MODAL -->
                                <div class="modal-footer">
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Salir</button>
                                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                                </div>
                                <!-- TERMINA PIE DEL MODAL -->
                                 <?php
                                 $editarLogo = new ControladorLogos();
                                 $editarLogo-> ctrEditarLogos();
                                 ?>
                            </form>
                            <?php

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL EDITAR USUARIO -->