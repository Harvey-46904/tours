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
                                <label for="formGroupExampleInput">Destino Tour</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Precio</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlFile1">FOTO</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">TIPO DE TRANSPORTE</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>AEREO</option>
                            <option>TERRESTRE</option>
                            <option>3</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">ACOMODACIÓN</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>HABITACIÓN MÚLTIPLE</option>
                            <option>HABITACIÓN SENCILLA</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">NOMBRE HOTEL HOSPEDAJE</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">No. de DÍAS</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">No. de NOCHES</label>
                                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">ALIMENTACIÓN</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">SEGURO HOTELERO</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>SI</option>
                            <option>NO</option>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">SEGURO DE VIAJE</label>
                            <select class="form-control" id="exampleFormControlSelect1">
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