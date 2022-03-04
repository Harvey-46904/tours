@extends('dash.dashboard')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                        <div class="header">
                                <h4 class="title">MODIFICAR SECCIÓN PUBLICITARIA</h4>
                                <p class="category">Modificar los elementos publicitarios publicados actualmente en el portal web Special Vans</p>
                        </div>

                        <form class="header">
                        <div class="form-group">
                                <label>Título Publicitario</label>
                                <input type="text" class="form-control" id="title-publicidad" name="title-publicidad" placeholder="Añadir Título (Promoción, Oferta, etc.)">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlFile1">IMÁGEN / FOTO</label>
                            <input type="file" class="form-control-file" id="img-publicidad" name="img-publicidad">
                            </div>
                            <div class="form-group">
                                <label>DESCRIPCIÓN</label>
                                <input type="text" class="form-control" id="desc-publicidad" name="desc-publicidad" placeholder="Añadir Descripción">
                            </div>
                            <div align=center>
                            <button type="submit" class="btn btn-primary">ACTUALIZAR SECCIÓN PUBLICITARIA</button>
                            </div>
                            
                        </form>
                        <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection