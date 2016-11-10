<!-- cREACION DE LA TABLA -->
<section id="main-content">
    <section class="wrapper">


        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>Lista de las Escuelas Registradas:</h4><hr>
                    <!-- aqui empieza el buscador -->
                    <div class="row">

                        <div class="col-md-4 center-block"><br>
                            <?php
                            include_once 'plantillas/ModalFormAlum.inc.php';
                            ?>
                        </div>

                        <div class="col-md-4 center-block">
                            <div id="dataTables-example_filter" class="dataTables_filter">
                                <label>
                                    <font>Buscar:</font>                              
                                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
                                </label>
                            </div>
                        </div>

                        <div class="col-md-4 center-block">
                            <div class="dataTables_length" id="dataTables-example_length">
                                <label><font class="">Entrada: 
                                    <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                        <option value="10"><font><font>10</font></font></option>
                                        <option value="25"><font><font>25</font></font></option>
                                        <option value="50"><font><font>50</font></font></option>
                                        <option value="100"><font><font>100</font></font></option>
                                    </select>
                                    </font>                                 

                                </label>
                            </div>                     
                        </div>

                    </div> <!-- aqui termina el buscador -->
                    <!-- Lista -->
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Nombre:</th>                                  
                                <th><i class="fa fa-bullhorn"></i> Apellidos:</th>
                                <th><i class="fa fa-bullhorn"></i> Grado Escolar:</th>
                                <th><i class="fa fa-bullhorn"></i> Nombre Maestro:</th>
                                <th><i class="fa fa-bullhorn"></i> Curp Alumno:</th>
                                <th><i class="fa fa-bookmark"></i> Edad</th>                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">Jesus </a></td>
                                <td class="hidden-phone">Perez Pino </td>
                                <td class="hidden-phone">tercero</td>
                                <td class="hidden-phone">Jose Carlos Castillo Villa</td>
                                <td class="hidden-phone">140934JPP </td>
                                <td>4</td>
                                <td>

                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>

                        </tbody>                                 
                    </table>

                </div>
            </div>
        </div>

    </section>
</section>
