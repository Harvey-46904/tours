@extends('dash.dashboard')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                        <div class="header">
                                <h4 class="title">MODIFICAR TOUR</h4>
                                <p class="category">Modifique o actualice la información de un tour publicado.</p>
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table with Hover</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
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