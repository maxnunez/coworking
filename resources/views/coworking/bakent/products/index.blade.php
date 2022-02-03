@extends('coworking.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-store icon-gradient bg-warm-flame"></i>
            </div>
            <div>
                Productos y Servicios
            </div>
        </div>
        <div class="ibox-tools" style="margin-left: auto;">
            <a href="{{ url('admin/productos-servicios/create') }}">
                <button class="btn btn-primary btn-xs" type="button">
                    <i class="fa fa-plus-circle">
                    </i>
                    Nuevo
                </button>
            </a>
        </div>
    </div>
</div>
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover  dataTables-example">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Titulo
                            </th>
                            <th>
                                Resumen
                            </th>
                            <th>
                                Imagen
                            </th>
                            <th>
                                Contenido
                            </th>
                            <th>
                                Precio
                            </th>
                            <th>
                                Usuario
                            </th>
                            <th>
                                Estado
                            </th>
                            <th>
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $item)
                        <tr class="gradeX">
                            <td>
                                {{@$item->id}}
                            </td>
                            <td>
                                {{  @$item->title }}
                            </td>
                             <td>
                                {{  @$item->abstract }}
                            </td>
                             <td>
                                {{  @$item->title }}
                            </td>
                             <td>
                                {!! @$item->content !!}
                            </td>
                             <td>
                                {{  @$item->amount }}
                            </td>
                             <td>
                                {{  @$item->user->full_name }}
                            </td>
                            <td>
                                {{  @$item->status }}
                            </td>
                            <td>
                                <a href="{{ url('admin/productos-servicios/' . @$item->id . '/edit') }}">
                                    <button class="btn btn-primary btn-xs" type="submit">
                                        Actualizar
                                    </button>
                                </a>
                                /
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'url' => ['admin/productos-servicios', @$item->id],
                                    'style' => 'display:inline',
                                    'onsubmit' => 'return confirm("Confirma que desea eliminar el producto")',
                                ]) !!}
                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @empty
                        <p>
                            No hay Noticias
                        </p>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
