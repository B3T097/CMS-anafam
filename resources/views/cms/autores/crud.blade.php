<div class="card border border-light-subtle border-4 rounded-4">
    <h3 class="card-header">
        Nuevo Autor
    </h3>
    <div class="card-body">
        <form class="row g-3 needs-validation was-validated" novalidate="" action="{{ route('newAutor') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($autor))  
            <input type="hidden" name="id" id="id" value="{{$autor->id}}">
            @endif
            <div class="row mt-2">
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre </label>
                        <input class="form-control" id="nombre" name="nombre" type="text" required @if(isset($autor)) value="{{$autor->nombre}}" @endif>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="correo">Correo </label>
                        <input class="form-control" id="correo" name="correo" type="email" placeholder="name@example.com" required @if(isset($autor)) value="{{$autor->correo}}" @endif>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="grado_academico">Grado Academico </label>
                        <input class="form-control" id="grado_academico" name="grado_academico" type="text" required @if(isset($autor)) value="{{$autor->grado_academico}}" @endif>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="nacionalidad">Nacionalidad </label>
                        <input class="form-control" id="nacionalidad" name="nacionalidad" type="text" required @if(isset($autor)) value="{{$autor->nacionalidad}}" @endif>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-facebook"></i></span>
                            <span class="input-group-text" id="url-facebook">https://www.facebook.com/</span>
                            <input type="text" class="form-control" id="facebook" name="facebook" aria-describedby="url-facebook legend-facebook" required @if(isset($autor)) value="{{$autor->facebook}}" @endif>
                        </div>
                        <div class="form-text" id="legend-facebook">Copie y pegue la liga de su perfil de facebook.</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">linkedin</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="mdi mdi-linkedin"></i></span>
                            <span class="input-group-text" id="url-linkedin"> https://www.linkedin.com/in/</span>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" aria-describedby="url-linkedin legend-linkedin" required @if(isset($autor)) value="{{$autor->linkedin}}" @endif>
                        </div>
                        <div class="form-text" id="legend-linkedin">Copie y pegue la liga de su perfil de linkedin.</div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label class="form-label" for="twitter">Twitter </label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="mdi mdi-twitter"></i></span>
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Username" required @if(isset($autor)) value="{{$autor->twitter}}" @endif>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label" for="imagen">Foto</label>
                        <input class="form-control" id="imagen" name="imagen" type="file" accept=".jpg, .png, .jpeg" required>
                        @if(isset($autor)) 
                        <img src="{{Storage::url($autor->imagen)}}" alt="imagen" class="img-fluid img-thumbnail">
                        @endif
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="d-flex justify-content-end align-items-center h-100">
                       <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>