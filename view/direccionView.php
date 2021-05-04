{{> header}}
<section class="contenedor-login">
        <article>
            <img class="logoBlanco" id="logoBlanco" src="../public/img/logoBlanco.svg"
                 alt="">
            <div class="text-login">
                <h2>Aplication Login Page</h2>
                <p>Login or register from here to access.</p>
            </div>
        </article>
        <article>
        <form action='/Register/addUser' method='post' id="formRegister">
        </div>
                <div class="grupo-login">
                    <input type='text' name='calleRegister' id='calleRegister' autocomplete='off' required>
                    <label for='calleRegister'>Calle</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjCalleRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='numeroRegister' id='numeroRegister' autocomplete='off' required>
                    <label for='numeroRegister'>Número</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjNumeroRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='localidadRegister' id='localidadRegister' autocomplete='off' required>
                    <label for='localidadRegister'>Localidad</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjLocalidadRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='provinciaRegister' id='provinciaRegister' autocomplete='off' required>
                    <label for='provinciaRegister'>Provincia</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjProvinciaRegister"></small>
                </div>
                <div class="grupo-login">
                    <input type='text' name='paisRegister' id='paisRegister' autocomplete='off' required>
                    <label for='paisRegister'>País</label>
                    <span class="input-bar"></span>
                    <small class="mensajeError" id="msjPaisRegister"></small>
                </div>
                
                <div class='contenedor-submit'>
                    <input type='submit' class="input-submit" id="inputRegister" value='Enviar' >
                </div>
            </form>
        </article>
    </section>

{{> footer}}





