<!-- cREACION DE LA TABLA -->
<section id="main-content">
    <section class="wrapper">


        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>Lista de las Escuelas Registradas:</h4><hr>
                    <!-- aqui empieza el buscador -->
                    <div class="row">                  

                        <div class="col-md-6 center-block">
                            <div id="dataTables-example_filter" class="dataTables_filter">
                                <label>
                                    <font>Buscar:</font>                              
                                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
                                </label>
                            </div>
                        </div>

                       

                    </div> <!-- aqui termina el buscador -->
                    <!-- Lista -->
                    <table class="table table-striped table-advance table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Nombre de Test a Aplicar:</th>                                 
                                
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a>CUESTIONARIO DE DETECCIÓN DE NIÑOS CON ALTAS CAPACIDADES (3 - 4 AÑOS)</a></td>
                                
                                <td>

                                   
                                    <div ><?php include_once 'plantillas/ModalFormTest.inc.php'?></div>
                                    
                                </td>
                            </tr>

                        </tbody>                                 
                    </table>

                </div>
            </div>
        </div>

    </section>
</section>
