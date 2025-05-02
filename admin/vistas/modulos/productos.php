                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Administrar Productos</h1>
                    <button class="btn btn-primary mb-3" data-toggle="modal"
                        data-target="#modalAgregarProductos">
                        Agregar Productos
                    </button>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Productos</h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Foto</th>
                                            <th>Titulo</th>
                                            <th>Precio</th>
                                            <th>Categoria</th>
                                            <th>Tipo de flor</th>
                                            <th>Descripcion</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Id</th>
                                            <th>Foto</th>
                                            <th>Titulo</th>
                                            <th>Precio</th>
                                            <th>Categoria</th>
                                            <th>Tipo de flor</th>
                                            <th>Descripcion</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $item = null;
                                        $campo = null;

                                        $productos = ControladorProductos::ctrMostrarProductos($item, $campo);
                                        foreach ($productos as $producto):
                                        ?>
                                            <tr>
                                                <td><?= $producto->id ?></td>
                                                <td><img src="<?= $producto->foto ?>" width="80px"></td>
                                                <td><?= $producto->titulo ?></td>
                                                <td><?= $producto->precio ?></td>
                                                <td><?= $producto->categoria ?></td>
                                                <td><?= $producto->tipo ?></td>
                                                <td><?= $producto->descripcion ?></td>
                                                <td><button class="btn btn-warning btnEditarProducto" idProducto="<?= $producto->id ?>" data-toggle="modal" data-target="#modalEditarProducto">
                                                        Editar
                                                    </button></td>
                                                <td><button class="btn btn-danger btnEliminarProducto" idProducto="<?= $producto->id ?>">Eliminar </button></td>
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

                <!-- MODAL AGREGAR PRODUCTOS -->

                <div class="modal fade" id="modalAgregarProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <!-- TERMINA CABEZA MODAL -->

                                <!-- CUERPO MODAL -->
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <!-- ENTRAD DEL TITULO -->
                                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                                            <input type="text" class="form-control form-control-user" name="titulo"
                                                placeholder="Titulo">
                                        </div>
                                        <!-- ENTRADA DEL PRECIO -->
                                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                                            <input type="text" class="form-control form-control-user" name="precio"
                                                placeholder="Precio">
                                        </div>
                                        <!-- ENTRADA DE LA CATEGORIA  -->
                                        <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                                            <input type="text" class="form-control form-control-user" name="categoria"
                                                placeholder="Categoria">
                                        </div>
                                         <!-- ENTRADA DEL TIPO FLOR  -->
                                         <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                                            <input type="text" class="form-control form-control-user" name="tipo"
                                                placeholder="Tipo de flor">
                                        </div>
                                         <!-- ENTRADA DE LA DESCRIPCION  -->
                                         <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                                            <input type="text" class="form-control form-control-user" name="descripcion"
                                                placeholder="Descripcion">
                                        </div>

                                        <!-- ENTRADA IMAGEN DEL PRODUCTO -->
                                        <div class="col-sm-6 mt-3">
                                            <input type="file" class="nuevafotoproducto form-control form-control-user" name="foto"
                                                placeholder="Sube la foto de la nota">
                                                <p>Peso maximo de la foto 2MB</p>
                                                <img src="vistas/img/usuarios/default/anonimo.png" class="img-thumbail previsualizar" width="100px">
                                        </div>

                                    </div>
                                </div>
                                <!-- TERMINA CUERPO DEL MODAL -->

                                <!-- PIE DEL MODAL -->
                                <div class="modal-footer">
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Salir</button>
                                    <button class="btn btn-success" type="submit">Guardar Producto</button>
                                </div>
                                <!-- TERMINA PIE DEL MODAL -->
                            </form>
                            <?php
                            $crearProducto = new ControladorProductos();
                            $crearProducto->ctrCrearProductos();

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL AGREGAR PRODUCTOS -->

                <!-- MODAL EDITAR PRODUCTOS -->

                <div class="modal fade" id="modalEditarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form class="user" method="post" enctype="multipart/form-data">
                                <!-- CABEZA MODAL -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
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
                                            <input type="text" class="form-control form-control-user" name="editartitulo" id="editartitulo" value="">
                                            <input type="hidden" name="editarid" id="editarid" value="">
                                        </div>
                                        <!-- ENTRADA DE PRECIO -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarprecio" id="editarprecio" value="">
                                        </div>
                                        <!-- ENTRADA DE CATEGORIA -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editarcategoria" id="editarcategoria" value="">
                                        </div>
                                        <!-- ENTRADA DEL TIPO DE FLOR -->
                                        <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editartipo" id="editartipo" value="">
                                        </div>
                                         <!-- ENTRADA DE DESCRIPCION-->
                                         <div class="col-sm-12 mt-3">
                                            <input type="text" class="form-control form-control-user" name="editardescripcion" id="editardescripcion" value="">
                                        </div>
                                        <!-- ENTRADA EDITAR FOTO -->
                                        <div class="col-sm-6">
                                            <input type="file" class="nuevafotoproducto form-control form-control-user mt-3" name="editarnuevaFoto">
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
                                 $editarProducto = new ControladorProductos();
                                 $editarProducto-> ctrEditarProductos();
                                 ?>
                            </form>
                            <?php

                            ?>
                        </div>
                    </div>
                </div>
                <!-- TEMINA MODAL EDITAR USUARIO -->