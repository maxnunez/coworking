@extends('coworking.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-user icon-gradient bg-warm-flame">
                </i>
                {{--
                <img src="{{Auth::user()->avatar()}}">
                    --}}
                </img>
            </div>
            <div>
                <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Usuarios</h5>
                        <div class="ibox-tools">
                            <a href="{{ url('admin/users/create') }}">
                                <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-plus-circle"></i>
                                    Nuevo</button>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper"
                                class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1></h1>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><span
                                                    class="search"><i class="fa fa-search"
                                                        aria-hidden="true"></i></span><input type="search" id="word"
                                                    class="form-control input-sm" placeholder=""
                                                    aria-controls="DataTables_Table_0"></label></div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover dataTable">

                                    <thead>
                                        <tr>
                                            <th onclick="to_look_for(this,'id')" class="sorting_asc">ID</th>
                                            <th onclick="to_look_for(this,'nombre')" class="sorting">Nombre</th>
                                            <th onclick="to_look_for(this,'apellido')" class="sorting">Apellido</th>
                                            <th onclick="to_look_for(this,'email')" class="sorting">Email</th>
                                            <th onclick="to_look_for(this,'razon_social')" class="sorting">Razón Social</th>
                                            <th onclick="to_look_for(this,'user_role')" class="sorting">Rol</th>
                                            <th onclick="to_look_for(this,'estado')" class="sorting">Estado</th>
                                            <th class="sorting">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showresults">
                                        @foreach ($users as $item)
                                            <tr class="gradeX">
                                                <td>{{ @$item->id }}</td>
                                                <td>{{ @$item->nombre }}</td>
                                                <td>{{ @$item->apellido }}</td>
                                                <td>{{ @$item->email }}</td>
                                                <td>{{ @$item->razon_social }}</td>
                                                <td style="text-transform: capitalize">
                                                    {{ str_replace('_', ' ', @$item->user_role) }}</td>
                                                <td>{{ @$item->estado ? 'Habilitado' : 'No Habilitado' }}</td>
                                                <td>
                                                    <a href="{{ url('admin/users/' . @$item->id . '/operations') }}">
                                                        <button type="submit" class="btn btn-success btn-xs"> Operaciones
                                                        </button>
                                                    </a>/
                                                    <a href="{{ url('admin/users/' . @$item->id . '/edit') }}">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-xs">Actualizar</button>
                                                    </a> /
                                                    {!! Form::open([
    'method' => 'DELETE',
    'url' => ['admin/users', @$item->id],
    'style' => 'display:inline',
    'onsubmit' => 'return confirm("Confirma que desea eliminar el usuario?")',
]) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                                    {!! Form::close() !!} /
                                                    <a href="{{ url('admin/users/' . @$item->id . '/archives') }}">
                                                        <button type="submit" class="btn btn-info btn-xs">Archivos</button>
                                                    </a> /
                                                    <a
                                                        href="{{ url('admin/users/' . @$item->id . '/user_requested_documents') }}">
                                                        <button type="submit" class="btn btn-warning btn-xs">
                                                            Documentación</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-left">
                                Mostrando Página actual <span
                                    class="badge badge-light text-primary">{{ @$users->currentPage() }}</span> - Total
                                <span class="badge badge-light text-danger">{{ @$users->total() }}</span> registros.
                            </div>
                            <div class="justify-content-center text-center float-right"> {!! @$users->appends(['order' => $order, 'type' => $type])->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
            pantalla de preguntas y respuestas
            @include('coworking.bakent.questions.partials.form')
        </div>
    </div>
</div>
@endsection
