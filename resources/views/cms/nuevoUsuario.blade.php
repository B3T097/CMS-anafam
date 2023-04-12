<div class="page">
    <p class="h1">Agregar usuario</p>
    <div class="content">
        <div class="content-form">
            {{-- was-validated --}}
            <form class="row g-3 needs-validation was-validated" novalidate="">
                @csrf
                <div class="col-md-4">
                    <label class="form-label" for="txtNombre">Nombre</label>
                    <input class="form-control" id="txtNombre" name="txtNombre" type="text" value="" required="">
                    <div class="invalid-feedback">Ingrese su nombre completo.</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="txtEmail">Correo</label>
                    <input class="form-control" id="txtEmail" name="txtEmail" type="email" value="" required="">
                    <div class="invalid-feedback">Ingrese un correo valido.</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="txtPWD">Contraseña</label>
                    <input class="form-control" id="txtPWD" name="txtPWD" type="email" value="" required="">
                    <div class="invalid-feedback">Escriba su contraseña.</div>
                </div>
                <div class="col-12 ml-0 mt-3 d-flex flex-row-reverse">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
            
            
        </div>
    </div>
</div>