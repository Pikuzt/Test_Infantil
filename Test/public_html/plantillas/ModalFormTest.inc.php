<button class="btn btn-info center-block" data-toggle="modal" data-target="#formularioEsc"  data-backdrop="static" data-keyboard="false">
    Registrar 
</button> 

<div class="modal fade" id="formularioEsc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="col-md-12 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            INFORMACION PARA APLICAR TEST:
                        </h3>
                    </div>  
                    <div class="panel-body">
                        <form role="form" id="contacto_frm" name="contacto_frm" method="post" action="#">

                            <div class="form-group col-lg-4">
                                <label>Fecha de  Aplicacion: </label>
                                <input type="datetime" onkeypress=" return soloLetras(event)" class="form-control" name="nombre" id="nombre" value="25/octubre/2016">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Fuente: </label>
                                <input type="text" onkeypress=" return soloLetras(event)"  class="form-control" name="apellidos" id="director" value="beto">
                            </div>
                            <div class="form-group col-lg-4 center-block">
                                <label>Nombre especialista:</label>
                                <input type="text" onkeypress=" return soloLetras(event)" class="form-control" name="calle" id="calle" value="NOE PEREZ">
                            </div>
                            <div class="form-group col-lg-6 center-block">
                                <label>Nombre alumno: </label>
                                
                                <select class="form-control">
						  <option><font><font>JESUS PEREZ PINO </font></font></option>
						  <option><font><font>MANUEL MANUEL HERNANDEZ</font></font></option>
						  
						</select>
                                
                                
                                
                            </div>
                            <div class="form-group col-lg-6 center-block">
                                <label>Nombre escuela:</label>
                                <input type="text" class="form-control" name="numero" id="numero" value="MIGUEL HIDALGO">
                            </div>
                            



                            <div class="form-group col-lg-4 center-block modal-footer">
                                
                                <button type="submit" id="enviar" class="btn btn-default btn-primary center-block" name="enviar"  data-backdrop="static" data-keyboard="false">Empezar</button>

                            </div>                            
                            <div class="form-group col-lg-4 center-block modal-footer">                                 
                                <a class="btn btn-default btn-primary center-block" href="Especialista.php" role="button">Aplicar</a>
                            </div>
                            
                            <div class="form-group col-lg-4 center-block modal-footer">
                                <button type="close" class="btn btn-default btn-primary center-block">Cancelar </button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
