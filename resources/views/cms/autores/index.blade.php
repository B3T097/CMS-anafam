<style>
    img{
        max-width: 100%;
    }
</style>
<div class="container">
    <p class="h3">Autores</p>
    {{-- {{dd($autores)}} --}}
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th class="">Nombre</th>
                    <th>Correo</th>
                    {{-- <th>imagen</th> --}}
                    {{-- <th>grado_academico</th> --}}
                    {{-- <th>Nacionalidad</th> --}}
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Linkedin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autores as $autor)
                <tr>
                    <td class="align-middle">{{$autor->nombre}}</td>
                    <td class="align-middle">{{$autor->correo}}</td>
                    {{-- <td class="align-middle"><img src="{{ $autor->imagen }}" alt="" srcset=""></td> --}}
                    {{-- <td class="align-middle">{{$autor->grado_academico}}</td> --}}
                    {{-- <td class="align-middle">{{$autor->nacionalidad}}</td> --}}
                    <td class="align-middle"><a href="https://www.facebook.com/{{$autor->facebook}}" target="_blank" style="width: max-content;" class="ms-auto me-auto input-group-text"><i class="mdi mdi-facebook"></i></a></td>
                    <td class="align-middle"><a href="https://twitter.com/{{$autor->twitter}}" target="_blank" style="width: max-content;" class="ms-auto me-auto input-group-text"><i class="mdi mdi-twitter"></i></a></td>
                    <td class="align-middle"><a href="https://www.linkedin.com/in/{{$autor->linkedin}}" target="_blank" style="width: max-content;" class="ms-auto me-auto input-group-text"><i class="mdi mdi-linkedin"></i></a></td>
                    <td class="align-middle"><a class="btn btn-primary" href="{{route('autores.edit', ['id' => $autor->id])}}"> <i class="mdi mdi-pencil"></i> Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>