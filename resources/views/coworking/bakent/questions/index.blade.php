@extends('coworking.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-question-circle icon-gradient bg-warm-flame">
                </i>
            </div>
            <div>
                Preguntas y Respuestas
            </div>
        </div>
        <div class="ibox-tools" style="margin-left: auto;">
            <a href="{{ url('admin/preguntas-respuetas/create') }}">
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
                <table class="table table-striped table-bordered table-hover dataTables-example">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Pregunta
                            </th>
                            <th>
                                Respuesta
                            </th>
                            <th>
                                Order
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
                        @forelse ($questions as $item)
                        <tr class="gradeX">
                            <td>
                                 {{@$item->id}}
                            </td>
                            <td>
                                {{  @$item->question }}
                            </td>
                             <td>
                                {{  @$item->answer }}
                            </td>
                             <td>
                                {{  @$item->order }}
                            </td>
                             <td>
                                {{  @$item->status }}
                            </td>
                            <td>
                                <a href="{{ url('admin/preguntas-respuetas/' . @$item->id . '/edit') }}">
                                    <button class="btn btn-primary btn-xs" type="submit">
                                        Actualizar
                                    </button>
                                </a>
                                /
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'url' => ['admin/preguntas-respuetas', @$item->id],
                                    'style' => 'display:inline',
                                    'onsubmit' => 'return confirm("Confirma que desea eliminar la categoria")',
                                ]) !!}
                                {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @empty
                        <p>
                            No hay Preguntas
                        </p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


