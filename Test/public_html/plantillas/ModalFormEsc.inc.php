
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
                            Introduce datos Escuela:
                        </h3>
                    </div>  
                    <div class="panel-body">
                        <form role="form" id="contacto_frm" name="contacto_frm" method="post" action="#">

                            <div class="form-group col-lg-12">
                                <label>Nombre de Escuela: </label>
                                <input type="text" onkeypress=" return soloLetras(event)" class="form-control" name="nombre" id="nombre" placeholder="ingrese nombre de la escuela ">
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Director: </label>
                                <input type="text" onkeypress=" return soloLetras(event)"  class="form-control" name="director" id="director" placeholder="Juan perez. ">
                            </div>
                            <div class="form-group col-lg-4 center-block">
                                <label>Calle:</label>
                                <input type="text" onkeypress=" return soloLetras(event)" class="form-control" name="calle" id="calle" placeholder="Hernadez Castillo .">
                            </div>
                            <div class="form-group col-lg-4 center-block">
                                <label>Colonia: </label>
                                <input type="text" onkeypress=" return soloLetras(event)" class="form-control" name="colonia" id="colonia" placeholder="limones .">
                            </div>
                            <div class="form-group col-lg-4 center-block">
                                <label>Numero:</label>
                                <input type="number" class="form-control" name="numero" id="numero" placeholder="67.">
                            </div>
                            <div class="form-group col-lg-6 center-block">
                                <label>Sector:</label>
                                <input type="text" class="form-control" name="sector" id="sector" placeholder="45.">
                            </div>
                            <div class="form-group col-lg-6 center-block">
                                <label>zona:</label>
                                <input type="text"  onkeypress=" return soloLetras(event)" class="form-control" name="zona" id="zona" placeholder="Xalapa Ver.">
                            </div>



                            <div class="form-group col-lg-4 center-block modal-footer">
                                
                                <button type="submit" id="enviar" class="btn btn-default btn-primary center-block" name="enviar"  data-backdrop="static" data-keyboard="false">Registrar</button>

                            </div>

                            <div class="form-group col-lg-4 center-block modal-footer">
                                <button type="reset" id="limpiar" name="limpiar" class="btn btn-default btn-primary center-block ">Limpiar </button>
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

        