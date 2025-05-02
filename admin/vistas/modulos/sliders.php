                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Administrar Sliders</h1>
                    <button class="btn btn-primary mb-3" data-toggle="modal"
                        data-target="#modalAgregarSliders">
                        Agregar Slider
                    </button>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Sliders</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Sliders</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Sliders</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $item = null;
                                        $campo = null;

                                        $sliders = ControladorSliders::ctrMostrarSliders($item, $campo);
                                        foreach ($sliders as $slider):
                                        ?>
                                            <tr>
                                                <td><?= $slider->id ?></td>
                                                <td><img src="<?= $slider->slider1 ?>" width="350px"></td>
                                
                                                <td><button class="btn btn-warning btnEditarSlider" idSlider="<?= $slider->id ?>" data-toggle="modal" data-target="#modalEditarSlider">
                                                        Editar
                                                    </button></td>
                                                <td><button class="btn btn-danger btnEliminarSlider" idSlider="<?= $slider->id ?>">Eliminar </button></td>
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

                <!-- MODAL AGREGAR sliders -->

                <div class="modal fade" id="modalAgregarSliders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Slider</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <!-- TERMINA CABEZA MODAL -->

                                <!-- CUERPO MODAL -->
                                <div class="modal-body">
                                    <div class="form-group row">
                                       
                                        <!-- ENTRADA IMAGEN SLIDER 1 -->
                                        <div class="col-sm-6 mt-3">
                                            <input type="file" class="fotoSlider1 form-control form-control-user" name="slider1"
                                                placeholder="Sube el slider">
                                                <p>Peso maximo de la foto 4MB</p>
                                                <img src="vistas/img/usuarios/default/anonimo.png" class="img-thumbail previsualizar1" width="100px">
                                        </div> 

                                    </div>
                                </div>
                                <!-- TERMINA CUERPO DEL MODAL -->

                                <!-- PIE DEL MODAL -->
                                <div class="modal-footer">
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Salir</button>
                                    <button class="btn btn-success" type="submit">Guardar Slider</button>
                                </div>
                                <!-- TERMINA PIE DEL MODAL -->
                            </form>
                            <?php
                            $crearSlider = new ControladorSliders();
                            $crearSlider->ctrCrearSliders();

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL AGREGAR USUARIO -->

                <!-- MODAL EDITAR SLIDER -->

                <div class="modal fade" id="modalEditarSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Slider</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">❌</span>
                                    </button>
                                </div>
                                <!-- TERMINA CABEZA MODAL -->

                                <!-- CUERPO MODAL -->
                                <div class="modal-body">
                                    <div class="form-group row">
                                       
                                        <!-- ENTRADA EDITAR FOTO -->
                                        <div class="col-sm-6">
                                            <input type="file" class="fotoSlider1 form-control form-control-user mt-3" name="editarnuevoslider">
                                                <p>Peso maximo de la foto 4MB</p>
                                                <img src="vistas/img/usuarios/default/anonimo.png" class="img-thumbail previsualizar1" width="100px">
                                                <input type="hidden" name="fotoactual" id="slider1">
                                                <input type="hidden" name="editarid" id="editarid">
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
                                 $editarSlider = new ControladorSliders();
                                 $editarSlider-> ctrEditarSliders();
                                 ?>
                            </form>
                            <?php

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL EDITAR USUARIO -->