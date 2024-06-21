@extends('layouts.main')

@section('container')

<div class="content-wrapper">

    <section class="content">   
        <div class="col-sm-6 p-2">
            <h2>STOCK PURCHASE</h2>
        </div>             

        <!--form-->
        <section class="content">
            
                            <!-- card table -->
                            <section class="content">
                                <div class="container-fluid">
                                <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="card" style="margin-top: 15px">
                                        <div class="card-header">
                                          <div class="d-flex justify-content-between align-items-center">
                                            <div class="input-group" style="width: 300px">
                                              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                              <div class="input-group-append">
                                                <button class="btn btn-sidebar">
                                                  <i class="fas fa-search fa-fw"></i>
                                                  
                                                </button>
                                              </div>
                                            </div>
                                            <!-- button add item -->
                                            
                                          </div>
                                        </div>

                                        <!-- table... -->   
                                        <div class="card-body">
                                            <div class="table-responsive">
                                              <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th style="width: 10px">No</th>
                                                    <th>Date</th>
                                                    <th>Part</th>
                                                    <th>Price</th>
                                                  </tr>
                                                </thead>
                                          
                                                <tbody>
                                                  <tr>
                                                    <td>1.</td>
                                                    <td>order</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                                    
                                    </div>
        </section>

@endsection