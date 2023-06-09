<style>
    img{
        max-width: 100%;
        border-radius: 15px;
    }
</style>
<div class="container">
    <p class="h3">Notas</p>
    @if (count($notas) > 0)
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>fecha_publicacion</th>
                    <th>visitas</th>
                    <th>status</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                </td>
                    <td class="align-middle">{{$nota->titulo}}</td>
                    <td class="align-middle">{{$nota->fecha_publicacion}}</td>
                    <td class="align-middle">{{$nota->visitas}}</td>
                    <td class="align-middle">{{$nota->status}}</td>
                    <td class="align-middle"><a class="btn btn-primary" href="{{route('notas.edit', ['id' => $nota->id])}}"> <i class="mdi mdi-pencil"></i> Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>