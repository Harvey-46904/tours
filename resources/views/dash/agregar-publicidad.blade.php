@extends('dash.dashboard')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                        <div class="header">
                                <h4 class="title">AÑADIR NUEVA SECCIÓN PUBLICITARIA</h4>
                                <p class="category">Añadir aquí los elementos publicitarios que serán publicados en el portal web Special Vans</p>
                        </div>

                        <form class="header">
                        <div class="form-group">
                                <label for="formGroupExampleInput2">Título Publicitario</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Añadir Título (Promoción, Oferta, etc.)">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlFile1">IMÁGEN / FOTO</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">DESCRIPCIÓN</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Añadir Descripción">
                            </div>
                            <div align=center>
                            <button type="submit" class="btn btn-primary">AÑADIR SECCIÓN PUBLICITARIA</button>
                            </div>
                            
                        </form>
                        <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection