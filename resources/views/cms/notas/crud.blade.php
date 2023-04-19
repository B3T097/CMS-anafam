<div class="card border border-light-subtle border-4 rounded-4">
    <h3 class="card-header">
        Nueva nota
    </h3>
    <div class="card-body">
        <form class="row g-3 needs-validation was-validated" novalidate="" action="{{ route('newNota') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($nota))  
            <input type="hidden" name="id" id="id" value="{{$nota->id}}">
            @endif
            <div class="row mt-2">
                <div class="col-md-12 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="titulo">Titulo </label>
                        <input class="form-control" id="titulo" name="titulo" type="text" required @if(isset($nota)) value="{{$nota->titulo}}" @endif>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="url">Url </label>
                        <input class="form-control" id="url" name="url" type="text" required @if(isset($nota)) value="{{$nota->url}}" @endif>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="form-label" for="id_autor">Autor </label>
                            <select class="form-control" name="id_autor" id="id_autor" @if(isset($nota)) value="{{$nota->id_autor}}" @endif>
                                @foreach ($autores as $autor)
                                    <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="subtitulo">Subtitulos </label>
                        <textarea class="form-control" name="subtitulo" id="subtitulo" cols="30" rows="8">@if(isset($nota)) {{$nota->subtitulo}} @endif</textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="contenido">Contenido </label>
                        <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="15">@if(isset($nota)) {{$nota->contenido}} @endif</textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="descripcion">Descripcion </label>
                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5">@if(isset($nota)) {{$nota->descripcion}} @endif</textarea>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="fecha_publicacion">Fecha de publicación </label>
                        <input class="form-control" id="fecha_publicacion" name="fecha_publicacion" type="date" required value="{{ date('Y-m-d') }}" @if(isset($nota)) value="{{$nota->fecha_publicacion}}" @endif>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="fecha_nota">Fecha de la nota </label>
                        <input class="form-control" id="fecha_nota" name="fecha_nota" type="date" required value="{{date('Y-m-d')}}" @if(isset($nota)) value="{{$nota->fecha_nota}}" @endif>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label" for="imagen">Imagen Principal</label>
                        <input class="form-control" id="imagen" name="imagen" type="file" accept=".jpg, .png, .jpeg" >
                        {{-- <input class="form-control" type="text" name="name_imagen" id="name_imagen" @if(isset($nota)) value="{{$nota->imagen}}" @endif readonly> --}}
                        @if(isset($nota)) 
                        <img src="{{Storage::url($nota->imagen)}}" alt="imagen" class="img-fluid img-thumbnail">
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label class="form-label" for="status">Estatus </label>
                            <select class="form-control" name="status" id="status">
                                <option value="0" @selected(isset($nota) && $nota->status == 0)>Borrador</option>
                                <option value="1" @selected(isset($nota) && $nota->status == 1)>Activo</option>
                                <option value="2" @selected(isset($nota) && $nota->status == 2)>Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="d-flex justify-content-end align-items-center h-100">
                        <a class="btn btn-danger me-2" href="{{route('notas')}}">Calcelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        var contenido = document.getElementById('titulo');
        var url = document.getElementById('url');
        
        contenido.addEventListener('keyup', function(e) {
            url.value = URLAmigable(contenido.value);
        });
    });

    CKFinder.setupCKEditor();
    CKEDITOR.replace('contenido', {
        filebrowserUploadUrl: "{{route('ckfinder.save', ['_token' => csrf_token() ])}}"
    });
    CKEDITOR.replace('subtitulo', {
        filebrowserUploadUrl: "{{route('ckfinder.save', ['_token' => csrf_token() ])}}"
    });
</script>