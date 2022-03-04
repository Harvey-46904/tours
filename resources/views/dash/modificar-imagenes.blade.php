@extends('dash.dashboard')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                        <div class="header">
                                <h4 class="title">MODIFICAR IMAGEN GALERÍA</h4>
                                <p class="category">Modificar la imagen publicada en la galería del portal web Special Vans</p>
                        </div>

                        <form class="header">
                        <div class="form-group">
                                <label>TÍTULO IMAGEN</label>
                                <input type="text" class="form-control" id="title-img-gallery" name="title-img-gallery" placeholder="Añadir Título (Promoción, Oferta, etc.)">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlFile1">IMAGEN / FOTO</label>
                            <input type="file" class="form-control-file" id="img-gallery" name="img-gallery">
                            </div>
                            <div class="form-group">
                                <label>DESCRIPCIÓN IMAGEN</label>
                                <input type="text" class="form-control" id="desc-img-gallery" name="desc-img-gallery" placeholder="Añadir Descripción">
                            </div>
                            <div align=center>
                            <button type="submit" class="btn btn-primary">MODIFICAR IMAGEN</button>
                            </div>
                            
                        </form>
                        <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection