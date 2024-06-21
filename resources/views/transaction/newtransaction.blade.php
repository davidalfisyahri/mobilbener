@extends('layouts.main')

@section('container')

<div class="content-wrapper">

    <section class="content">   
        <div class="col-sm-6 p-2">
            <h2>TRANSACTION</h2>
        </div>             

        <!--form-->
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                <h2 class="card-title">New Transaction</h2>
                </div>
                
                <div class="card-body">
                
                <!--form-->
                <form>
                <div class="row-9">
                        <h3>Customer</h3>
                </div>
                <div class="row">
                <div class="col-sm-6">
                
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter ...">
                </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label>Handphone Number</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    </div>
                    
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputBorder">Payment</label>
                        <select class="custom-select form-control-border" id="exampleSelectBorder">
                            <option>Cash</option>
                            <option>Transfer bank</option>
                        </select>
                    </div>
                    </div>
                </div>
                
                <div class="row-9">
                    <h3>Customer Car</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        
                        <div class="form-group">
                        <label>VIN</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                        <div class="col-sm-6">
                        <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                            
                            <div class="form-group">
                            <label>Plate</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label>Brand</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                            </div>

                        <div class="row">        
                            <div class="col-sm-6">     
                            <div class="form-group">
                            <label>Year</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                            <label>Machine</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                            </div>

                        <div class="row">        
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputBorder">Transmission</label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder">
                                        <option>Matic</option>
                                        <option>Manual</option>
                                    </select>
                                </div>
                                </div>

                            <div class="col-sm-6">
                                <label for="exampleInputFile">Photo</label>
                                <div class="input-group">

                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                                </div>
                                </div>
                            </div>
                            </div>

                        <div class="row-9">
                                <h3>Operation</h3>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="exampleInputBorder">Service</label>
                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                        <option>Unknown</option>
                                        <option>Unknown</option>
                            </select>
                            </div>
                        </div>

                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputBorder">Damage</label>
                                <select class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option>Unknown</option>
                                    <option>Unknown</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputBorder">Technician</label>
                                <select class="custom-select form-control-border" id="exampleSelectBorder">
                                        <option>Andrea</option>
                                        <option>Hilmansyah</option>
                                        <option>David</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>KM</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputBorder">Spare part</label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder">
                                        <option>Unknown</option>
                                        <option>Unknown</option>
                                        <option>Unknown</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Information/Complaint</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                        
                    <div class="row-9">
                            <h3>Payment</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Sub total service payment</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Drop payment (DP)</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Total sisa bayar</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Kondisi barang service</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Service status</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Catatan teknisi (optional)</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                    </div>
                            
                        <!--button submit-->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>    
                        </div>
                </form>
                </div>
                
                </div>

        </section>

@endsection