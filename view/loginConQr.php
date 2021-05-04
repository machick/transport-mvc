{{> headerLog}}
<main>


<!--        terrible hack me mande con el height 0-->

        <div style=" padding-top: 30vh; width: 80%; align-items: center; margin-left: auto;margin-right: auto;">
            <form action="/ActualizarProforma/actualizarViaje" method="post" class="formLogin" id="formLogin" >
                <div class="grupo-login">
                    <input type="hidden" value="{{idViaje}}" name="idViaje">
                    <input type="text" name="nombre" id="nombre">
                    <label for="nombre">User Name</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjNombreUsuario"></small>
                </div>
                <div class="grupo-login">
                    <input type="password" name="password" id="password">
                    <label for="password">Password</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjPassword"></small>
                </div>
                <p style="color: #f00">{{mensajeError}}</p>
                <!--                //esto ni idea q hace pero lo dejo xD-->
                <?php !empty($errorMessage) ? print($errorMessage) : ''; ?>
                <!--                fin-->
                <div class="contenedor-submit">
                    <input type="submit" value="Iniciar Sesión" id="inputLogin" class="input-submit">

                </div>
            </form>
        </div>

</main>
{{> footer}}