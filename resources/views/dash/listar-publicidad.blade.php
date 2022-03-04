@extends('dash.dashboard')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">LISTA SECCIONES PUBLICITARIAS (Actualmente publicadas).</h4>
                                <p class="category">Lista de secciones publicitarias, desde aquí podrá editar o eliminar una sección en específico.</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                    	<th>TÍTULO PUBLICITARIO</th>
                                        <th>IMÁGEN/FOTO</th>
                                    	<th>DESCRIPCIÓN</th>
                                        <th>OPCIONES</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Medellín</td>
                                            <td>*</td>
                                        	<td>Promoción Medellín	2x1</td>
                                            <td>
                                                <div style="display:flex">
                                                <a href="{{ url('modificar-publicidad') }}" class="btn btn-warning btn-md active" role="button" aria-pressed="true">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                
                                                <a href="{{ url('') }}" class="btn btn-danger btn-md active" role="button" aria-pressed="true">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Cali</td>
                                            <td>*</td>
                                        	<td>Plan familiar parque de la caña</td>
                                            <td>
                                                <div style="display:flex">
                                                <a href="{{ url('modificar-publicidad') }}" class="btn btn-warning btn-md active" role="button" aria-pressed="true">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                
                                                <a href="{{ url('') }}" class="btn btn-danger btn-md active" role="button" aria-pressed="true">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                </div>
                                            </td>
                                        <tbody>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Cartagena</td>
                                            <td>*</td>
                                        	<td>Promoción Cartagena Black Friday</td>
                                            <td>
                                                <div style="display:flex">
                                                <a href="{{ url('modificar-publicidad') }}" class="btn btn-warning btn-md active" role="button" aria-pressed="true">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                
                                                <a href="{{ url('') }}" class="btn btn-danger btn-md active" role="button" aria-pressed="true">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                </div>
                                            </td>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection