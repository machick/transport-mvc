{{> headerLog}}
<main>
    
    <section class="contenedor-login">
        <article class="bienvenida">
            <div class="logo"><img class="logoBlanco" id="logoBlanco" src="../public/img/logoBlanco.png" alt="Logo">

            </div>
            <div class="titulo"><p>Ingrese o registrese para continuar.</p></div>

<!--            <div class="">-->
<!--                {{#usuarios}}-->
<!--                <h2>{{nombre}}</h2>-->
<!--                <p>Login or register from here to access.</p>-->
<!--                {{/usuarios}}-->
<!--            </div>-->
        </article>
        <article>
            <form action="/login/insertUsuario" method="post" class="formLogin" id="formLogin">
                <div class="grupo-login">
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
                    <a href="/register" class="linkRegister" id="linkRegister">Registrarse</a>
                </div>
            </form>
        </article>
    </section>
</main>
{{> footer}}
<!-- rgba(63, 103, 158, 0.5) -->