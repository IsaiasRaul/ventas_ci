<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categoria
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/categorias/add" class="btn btn-primary btn-flat" ><span class="fa fa-plus"></span>
                        Agregar Categoria
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(!empty($categorias)):
                                      foreach($categorias as $categorias):?>
                                        <tr>
                                            <td><?php echo $categorias->id;?></td>
                                            <td><?php echo $categorias->nombre;?></td>
                                            <td><?php echo $categorias->descripcion;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-overlay" value="<?php echo $categorias->id;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url()?>mantenimiento/categorias/edit/<?php echo $categorias->id; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="#" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php endforeach;
                                endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="modal-overlay">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="overlay d-flex justify-content-center align-items-center">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div>
        <div class="modal-header">
            <h4 class="modal-title">Información de la categoria</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->