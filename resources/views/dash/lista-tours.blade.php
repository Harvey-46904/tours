@extends('dash.dashboard')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">LISTA DE TOURS (Actualmente publicados).</h4>
                                <p class="category">Lista de tours publicados, desde aquí podrá editar o eliminar un tour en específico.</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>No.</th>
                                    	<th>DESTINO</th>
                                        <th>PRECIO</th>
                                    	<th>TIPO TRANSPORTE</th>
                                    	<th>ACOMODACIÓN</th>
                                    	<th>HOTEL</th>
                                        <th>NO. DÍAS</th>
                                        <th>NO. NOCHES</th>
                                        <th>ALIMENTACIÓN</th>
                                        <th>SEGURO HOTELERO</th>
                                        <th>SEGURO VIAJE</th>
                                        <th>OPCIONES</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Medellín</td>
                                            <td>525.000</td>
                                        	<td>Aereo</td>
                                        	<td>Habitación Sencilla</td>
                                        	<td>Hotel Medallo</td>
                                            <td>4</td>
                                            <td>3</td>
                                            <td>Tipo Buffette</td>
                                            <td>Si</td>
                                            <td>Si</td>
                                            <td>☺ | ☻</td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Bogotá</td>
                                            <td>299.000</td>
                                        	<td>Aereo</td>
                                        	<td>Habitación Sencilla</td>
                                        	<td>Hotel Dan Carlton</td>
                                            <td>6</td>
                                            <td>5</td>
                                            <td>Tipo Buffette</td>
                                            <td>Si</td>
                                            <td>Si</td>
                                            <td>☺ | ☻</td>
                                        </tr>
                                        <tbody>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Cali</td>
                                            <td>349.000</td>
                                        	<td>Terrestre</td>
                                        	<td>Habitación Sencilla</td>
                                        	<td>Hotel del Cielo</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>Full Restaurante</td>
                                            <td>Si</td>
                                            <td>Si</td>
                                            <td>☺ | ☻</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection