<div id="login-page">
    <div class="container">

        <form class="form-login" action="Escuela.php">
            <h2 class="form-login-heading">Iniciar Sección</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Usuario:" autofocus>
                <br>
                <input type="password" class="form-control" placeholder="Contraseña:">
                <label class="checkbox">
                    <span class="pull-right">
                        <a data-toggle="modal" href="login.html#myModal"> Olvide Contraseña.</a>

                    </span>
                </label>
                <button class="btn btn-theme btn-block"  href="Escuela.php"   type="submit"><i class="fa fa-lock"></i> Iniciar</button>
                <hr>


                <div class="registration">
                    <br/>

                </div>

            </div>

            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Olvido Contraseña</h4>
                        </div>
                        <div class="modal-body">
                            <p>Poner Email para enviar acuse:</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="button">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->

        </form>	 


    </div>
</div>




    
    
