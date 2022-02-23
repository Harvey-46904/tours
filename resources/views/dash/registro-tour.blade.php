@extends('dash.dashboard')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                        <div class="header">
                                <h4 class="title">AÑADIR NUEVO TOUR</h4>
                                <p class="category">Añadir aquí la información para el tour que será publicado en el portal web Special Vans</p>
                        </div>

                        <form class="header">
                            
                            <div class="form-group">
                                <label>Destino Tour</label>
                                <input type="text" class="form-control" id="destino_tour" name="destino_tour" placeholder="(Bogotá, Medellín, Cali, Armenia, etc...)">
                            </div>
                            <div class="form-group">
                                <label>Precio</label>
                                <input type="number" class="form-control" id="precio_tour" name="precio_tour" placeholder="Ingresar Precio del Tour">
                            </div>
                            <div class="form-group">
                            <label>FOTO</label>
                            <input type="file" class="form-control-file" id="foto_tour" name="foto_tour">
                            </div>
                            <div class="form-group">
                            <label>TIPO DE TRANSPORTE</label>
                            <select class="form-control" id="tipo_transporte" name="tipo_transporte">
                            <option selected disabled>Seleccione una opción</option>
                            <option>AEREO</option>
                            <option>TERRESTRE</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label>ACOMODACIÓN</label>
                            <select class="form-control" id="select_acomodacion" name="select_acomodacion">
                            <option selected disabled>Seleccione una opción</option>
                            <option>HABITACIÓN MÚLTIPLE</option>
                            <option>HABITACIÓN SENCILLA</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>NOMBRE HOTEL HOSPEDAJE</label>
                                <input type="text" class="form-control" id="nombre_hotel" name="nombre_hotel" placeholder="Hotel Donde Se Hospedarán Los Turistas">
                            </div>
                            <div class="form-group">
                                <label>No. de DÍAS</label>
                                <input type="number" class="form-control" id="num_dias" name="num_dias" placeholder="No. de Días del Tour">
                            </div>
                            <div class="form-group">
                                <label>No. de NOCHES</label>
                                <input type="number" class="form-control" id="num_noches" name="num_noches" placeholder="No. de Noches del Tour">
                            </div>
                            <div class="form-group">
                                <label>TIPO ALIMENTACIÓN</label>
                                <input type="text" class="form-control" id="tipo_alimentacion" name="tipo_alimentacion" placeholder="(Todo Incluido, Tipo Buffete, etc.">
                            </div>
                            <div class="form-group">
                            <label>SEGURO HOTELERO</label>
                            <select class="form-control" id="select_seguro_hotelero" name="select_seguro_hotelero">
                            <option selected disabled>Seleccione una opción</option>
                            <option>SI</option>
                            <option>NO</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label>SEGURO DE VIAJE</label>
                            <select class="form-control" id="select_seguro_viaje" name="select_seguro_viaje">
                            <option selected disabled>Seleccione una opción</option>
                            <option>SI</option>
                            <option>NO</option>
                            </select>
                            </div>
                            <div align=center>
                            <button type="submit" class="btn btn-primary">AÑADIR TOUR</button>
                            </div>
                            
                        </form>
                        <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection