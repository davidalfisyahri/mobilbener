@extends('layouts.main')

@section('container')

<div class="content-wrapper">

  <section class="content">
    <div class="col-sm-6 p-2">
      <h2 class="fw-bold">SPARE PART DATA</h2>
    </div>

    <!-- card table -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="input-group" style="width: 300px">
                    <form action="{{  url('sparepartdata') }}" method="GET">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search" aria-label="search"
                          aria-describedby="button-addon2" value="{{ Request::get('search') }}">
                        <button class="btn btn-primary" type="submit" id="button-addon2">
                          <svg xmlns="http://www.w3.org/2000/svg" height="18"
                            viewBox="0 10 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path fill="#ffffff"
                              d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                          </svg>
                        </button>
                      </div>
                    </form>
                  </div>

                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <svg xmlns="http://www.w3.org/2000/svg" height="18"
                        viewBox="0 30 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#ffffff"
                          d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                      </svg> Create
                    </button>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!--input form-->
                          <section class="content">
                            <div class="card card-primary">
                              <div class="card-header">
                                <h2 class="card-title">Add Spare Part</h2>
                              </div>

                              <form action="/sparepartdata" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Name Spare Part</label>
                                    <input type="text" name="name_spart" class="form-control" id="exampleInputEmail1"
                                      placeholder="Name Spare Part" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Type</label>
                                    <input type="text" name="type" class="form-control" id="exampleInputPassword1"
                                      placeholder="Type" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Purchase Price</label>
                                    <input type="text" name="purchase_price" class="form-control" id="exampleInputPassword1"
                                      placeholder="Purchase Price" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Sell Price</label>
                                    <input type="text" name="sell_price" class="form-control" id="exampleInputPassword1"
                                      placeholder="Sell Price" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Stock</label>
                                    <input type="text" name="stock" class="form-control" id="exampleInputPassword1"
                                      placeholder="Stock" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="image" class="form-label">Image</label>
                                    <img src="" id="img-view" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    <input type="file" name="image" class="form-control" id="image">
                                  </div>
                                </div>

                                <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- table... -->
              {{-- <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th style="width: 10px ">No</th>
                        <th>Order</th>
                        <th>Code part</th>
                        <th>Name part</th>
                        <th>Image</th>
                        <th>QTY</th>
                        <th>COGS</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody class="table-group-divider">
                      @php
                      $no = 1;
                      @endphp
                      @foreach ($sparepartdata as $index => $row)
                      <tr>
                        <td class="fw-bold">{{ $index + $sparepartdata->firstItem() }}</td>
                        <td>{{ $row->order }}</td>
                        <td>{{ $row->code_part }}</td>
                        <td>{{ $row->name_part }}</td>
                        <td>
                          <img src="{{  asset('storage/'.$row->image) }}" style="width: 50px" alt="">
                        </td>
                        <td>{{ $row->qty }}</td>
                        <td>{{ $row->cogs }}</td>
                        <td>{{ $row->price }}</td>
                        <td>

                          <a href="" class="btn btn-warning " data-bs-toggle="modal"
                            data-bs-target="#exampleModal3-{{ $row->id }}"><svg xmlns="http://www.w3.org/2000/svg"
                              height="18"
                              viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                              <path fill="#ffffff"
                                d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                            </svg></a>


                          <a href="" class="btn btn-primary " data-bs-toggle="modal"
                            data-bs-target="#exampleModal2-{{ $row->id }}"><svg xmlns="http://www.w3.org/2000/svg"
                              height="18" viewBox="0 0 512 512">
                              <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                              <path fill="#ffffff"
                                d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                            </svg></a>

                          <form action="{{ url('sparepartdata/'.$row->id) }}" method="post" class="d-inline"
                            onclick="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger"><svg
                                xmlns="http://www.w3.org/2000/svg" height="18"
                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                  d="M290.7 57.4L57.4 290.7c-25 25-25 65.5 0 90.5l80 80c12 12 28.3 18.7 45.3 18.7H288h9.4H512c17.7 0 32-14.3 32-32s-14.3-32-32-32H387.9L518.6 285.3c25-25 25-65.5 0-90.5L381.3 57.4c-25-25-65.5-25-90.5 0zM297.4 416H288l-105.4 0-80-80L227.3 211.3 364.7 348.7 297.4 416z" />
                              </svg>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $sparepartdata->withQueryString()->links() }}
                </div>
              </div> --}}

              <!-- table... -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered ">
                    <tr>
                      <td>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($sparepartdata as $index => $row)
                        <div class="card">
                        <div class="card-header fw-bold">{{ $index + $sparepartdata->firstItem() }} | Created At : {{ $row->created_at }}
                        </div>
                        <div class="card-body">
                          <table class="table table-borderless">
                              <tr>
                                <td width="6%"><img src="{{  asset('storage/'.$row->image) }}" style="width: 50px" alt=""></td>
                                <td width="40%" class="fw-bold">{{ $row->name_spart }}</td>
                                <td class="text-end" >Purchase Price :</td>
                                <td ><div class="input-group input-group-sm mb-3">
                                  <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                                  <input type="text" class="form-control" aria-label="Sizing example input" value="{{ $row->purchase_price }}" aria-describedby="inputGroup-sizing-sm" disabled style="background-color: white; color: #495057;">
                              </div></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Type : {{ $row->type }}</td>
                                <td class="text-end" >Sell Price : </td>
                                <td>
                                  <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Rp</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input" value="{{ $row->sell_price }}" aria-describedby="inputGroup-sizing-sm" disabled style="background-color: white; color: #495057;">
                                </div>                                
                              </td>
                              </tr>
                              <tr>
                                <td></td>
                                <td>Stock : {{ $row->stock }}</td>
                                <td></td>
                                <td class="text-end">
                                  <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3-{{ $row->id }}"><svg xmlns="http://www.w3.org/2000/svg"
                                      height="18"
                                      viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                      <path fill="#ffffff"
                                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                    </svg> Detail</a>
        
                                  <form action="{{ url('sparepartdata/'.$row->id) }}" method="post" class="d-inline"
                                    onclick="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="18"
                                        viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com/ License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                          d="M290.7 57.4L57.4 290.7c-25 25-25 65.5 0 90.5l80 80c12 12 28.3 18.7 45.3 18.7H288h9.4H512c17.7 0 32-14.3 32-32s-14.3-32-32-32H387.9L518.6 285.3c25-25 25-65.5 0-90.5L381.3 57.4c-25-25-65.5-25-90.5 0zM297.4 416H288l-105.4 0-80-80L227.3 211.3 364.7 348.7 297.4 416z" />
                                      </svg> Delete
                                    </button>
                                  </form></td>
                              </tr>
                          </table>
                        </div>  
                      </div> 
                      @endforeach</td>
                    </tr>
                  </table>
                  {{ $sparepartdata->withQueryString()->links() }}
                </div>
              </div>


              @foreach ($sparepartdata as $detail)
              <!-- Modal -->
              <div class="modal fade" id="exampleModal3-{{ $detail->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!--detail form-->
                      <section class="content">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Detail Spare Part Data</h3>
                          </div>

                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <tr>
                                  <th>image</th>
                                  <td><img src="{{  asset('storage/' . $detail->image) }}" id="img-view"
                                    class="img-preview img-fluid mb-3 col-sm-5 d-block"></td>
                                </tr>
                                <tr>
                                  <th>Name Spare Part</th>
                                  <td>{{ $detail->name_spart }}</td>
                                </tr>
                                <tr>
                                  <th>Type</th>
                                  <td>{{ $detail->type }}</td>
                                </tr>
                                <tr>
                                  <th>Purchase Price</th>
                                  <td>{{ $detail->purchase_price }}</td>
                                </tr>
                                <tr>
                                  <th>Sell Price</th>
                                  <td>{{ $detail->sell_price }}</td>
                                </tr>
                                <tr>
                                  <th>Stock</th>
                                  <td>{{ $detail->stock }}</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>

                    </div>
                  </div>
                </div>
              </div>
              @endforeach

    </section>

    @endsection

    @push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js/PreviewImage.js') }}"></script>
    @endpush