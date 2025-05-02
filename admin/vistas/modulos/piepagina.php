                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Administrar Pie de pagina</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Pie de pagina</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Dirección</th>
                                            <th>Telefono</th>
                                            <th>Correo electronico</th>
                                            <th>Horario</th>
                                            <th>Link facebook</th>
                                            <th>Link instagram</th>
                                            <th>Link whatsApp</th>
                                            <th>frase</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Dirección</th>
                                            <th>Telefono</th>
                                            <th>Correo electronico</th>
                                            <th>Horario</th>
                                            <th>Link facebook</th>
                                            <th>Link instagram</th>
                                            <th>Link whatsApp</th>
                                            <th>frase</th>
                                            <th>Editar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $item = null;
                                        $campo = null;

                                        $pies = ControladorPies::ctrMostrarPies($item, $campo);
                                        foreach ($pies as $pie):
                                        ?>
                                            <tr>
                                                <td><?= $pie->id ?></td>
                                                <td><?= $pie->direccion ?></td>
                                                <td><?= $pie->telefono ?></td>
                                                <td><?= $pie->correo ?></td>
                                                <td><?= $pie->horario ?></td>
                                                <td><?= $pie->link_facebook ?></td>
                                                <td><?= $pie->link_instagram ?></td>
                                                <td><?= $pie->link_whatsapp ?></td>
                                                <td><?= $pie->frase ?></td>
                                                <td><button class="btn btn-warning btnEditarPie" idPie="<?= $pie->id ?>" data-toggle="modal" data-target="#modalEditarPie">
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

                <!-- MODAL EDITAR PIE DE PAGINA -->

                <div class="modal fade" id="modalEditarPie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar pie de pagina</h5>
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
                                            <input type="text" class="form-control form-control-user" name="editardireccion" id="editardireccion" value="">
                                            <input type="hidden" name="editarid" id="editarid" value="">
                                        </div>
                                        <!-- ENTRADA DE TELEFONO -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editartelefono" id="editartelefono" value="">
                                        </div>
                                        <!-- ENTRADA DE CORREO -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarcorreo" id="editarcorreo" value="">
                                        </div>
                                         <!-- ENTRADA DE HORARIO -->
                                         <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarhorario" id="editarhorario" value="">
                                        </div>
                                        <!-- ENTRADA DE FACEBOOK -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarfacebook" id="editarfacebook" value="">
                                        </div>
                                        <!-- ENTRADA DE INSTAGRAM -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarinstagram" id="editarinstagram" value="">
                                        </div>
                                        <!-- ENTRADA DE WHATSAPP -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarwhatsapp" id="editarwhatsapp" value="">
                                        </div>
                                        <!-- ENTRADA DE FRASE -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarfrase" id="editarfrase" value="">
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
                                $editarPie = new ControladorPies();
                                $editarPie->ctrEditarPies();
                                ?>
                            </form>
                            <?php

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL EDITAR USUARIO -->