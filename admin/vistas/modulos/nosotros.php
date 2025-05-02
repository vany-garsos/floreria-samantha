                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Administrar seccion nosotros</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Nosotros</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Imagen</th>
                                            <th>¿Quienes somos?</th>
                                            <th>Mision</th>
                                            <th>Vision</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Imagen</th>
                                            <th>¿Quienes somos?</th>
                                            <th>Mision</th>
                                            <th>Vision</th>
                                            <th>Editar</th>            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $item = null;
                                        $campo = null;

                                        $valores = ControladorNosotros::ctrMostrarNosotros($item, $campo);
                                        foreach ($valores as $valor):
                                        ?>
                                            <tr>
                                                <td><?= $valor->id ?></td>
                                                <td><img src="<?= $valor->foto ?>" width="150px"></td>
                                                <td><?= $valor->somos ?></td>
                                                <td><?= $valor->mision ?></td>
                                                <td><?= $valor->vision ?></td>
                                                <td><button class="btn btn-warning btnEditarNosotros" idNosotros="<?= $valor->id ?>" data-toggle="modal" data-target="#modalEditarNosotros">
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

                <!-- MODAL EDITAR NOSOTROS -->

                <div class="modal fade" id="modalEditarNosotros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar seccion nosotros</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">❌</span>
                                    </button>
                                </div>
                                <!-- TERMINA CABEZA MODAL -->

                                <!-- CUERPO MODAL -->
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <!-- ENTRAD D LA CABEZERA -->
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="editarsomos" id="editarsomos" value="">
                                            <input type="hidden" name="editarid" id="editarid" value="">
                                        </div>
                                         <!-- ENTRADA DE VISION -->
                                         <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarvision" id="editarvision" value="">
                                        </div>
                                        <!-- ENTRADA DE MISION -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarmision" id="editarmision" value="">
                                        </div>
                                        <!-- ENTRADA EDITAR FOTO -->
                                        <div class="col-sm-6">
                                            <input type="file" class="nuevafotolugar form-control form-control-user mt-3" name="editarnuevaFoto">
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
                                 $editarValor = new ControladorNosotros();
                                 $editarValor-> ctrEditarNosotros();
                                 ?>
                            </form>
                            <?php

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL EDITAR USUARIO -->