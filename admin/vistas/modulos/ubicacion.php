                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Administrar Ubicación</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detalles de la ubicación y horarios</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre negocio</th>
                                            <th>Dirección</th>
                                            <th>Telefono</th>
                                            <th>Horario</th>
                                            <th>URL mapa</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre negocio</th>
                                            <th>Dirección</th>
                                            <th>Telefono</th>
                                            <th>Horario</th>
                                            <th>URL mapa</th>
                                            <th>Editar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $item = null;
                                        $campo = null;

                                        $ubicaciones = ControladorUbicaciones::ctrMostrarUbicaciones($item, $campo);
                                        foreach ($ubicaciones as $ubicacion):
                                        ?>
                                            <tr>
                                                <td><?= $ubicacion->id ?></td>
                                                <td><?= $ubicacion->nombre_negocio ?></td>
                                                <td><?= $ubicacion->direccion ?></td>
                                                <td><?= $ubicacion->telefono ?></td>
                                                <td><?= $ubicacion->horario ?></td>
                                                <td><?= $ubicacion->urlmapa ?></td>
                                                <td><button class="btn btn-warning btnEditarUbicacion" idUbicacion="<?= $ubicacion->id ?>" data-toggle="modal" data-target="#modalEditarUbicacion">
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

                <!-- MODAL EDITAR UBICACION -->

                <div class="modal fade" id="modalEditarUbicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Ubicacion</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">❌</span>
                                    </button>
                                </div>
                                <!-- TERMINA CABEZA MODAL -->

                                <!-- CUERPO MODAL -->
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <!-- ENTRAD DEL TITULO -->
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" name="editarnombre_negocio" id="editarnombre_negocio" value="">
                                            <input type="hidden" name="editarid" id="editarid" value="">
                                        </div>
                                        <!-- ENTRADA DE DIRECCION -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editardireccion" id="editardireccion" value="">
                                        </div>
                                         <!-- ENTRADA DEL TELEFONO -->
                                         <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editartelefono" id="editartelefono" value="">
                                        </div>
                                         <!-- ENTRADA DEL HORARIO -->
                                         <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarhorario" id="editarhorario" value="">
                                        </div>
                                         <!-- ENTRADA DEL URL DEL MAPA -->
                                         <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarurlmapa" id="editarurlmapa" value="">
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
                                 $editarUbicacion = new ControladorUbicaciones();
                                 $editarUbicacion-> ctrEditarUbicacion();
                                 ?>
                            </form>
                            <?php

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL EDITAR UBICACION -->