@extends('layouts.dashboard')

@section('title')
    Store Dashboard Account Setting
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
                <div class="container-fluid">
                    <div class="dashboard-heading">
                        <h2 class="dashboard-title">My Account</h2>
                        <p class="dashboard-subtitle">Update your current profile</p>
                    </div>
                    <div class="dashboard-content">
                        <div class="row">
                            <div class="col-12">
                                <form action="">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=" " class="name">Your Name</label>
                                                        <input type="text " class="form-control" id="name " name="name " value="Anjas Mulya Putra " />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=" " class="addressTwo">Your Email</label
                                >
                                <input
                                  type="email "
                                  class="form-control"
                                  id="email "
                                  name="email "
                                  value="anjasmulyaputra@gmail.com "
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for=" " class="addressOne"
                                  >Adress 1</label
                                >
                                <input
                                  type="text "
                                  class="form-control"
                                  id="addressOne "
                                  name="addressOne "
                                  value="Setra Duta Camera "
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for=" " class="addressTwo"
                                  >Adress 2</label
                                >
                                <input
                                  type="text "
                                  class="form-control"
                                  id="addressTwo "
                                  name="addressTwo "
                                  value="Blok B2 No. 34 "
                                />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for=" " class="province">Province</label>
                                                        <select name="province " id="province " class="form-control">
                                  <option value="West Java ">West Java</option>
                                </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for=" " class="city">City</label>
                                                        <select name="city " id="city " class="form-control">
                                  <option value="Bandung ">Bandung</option>
                                </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for=" " class="postalCode">Postal Code</label
                                >
                                <input
                                  type="text "
                                  class="form-control"
                                  id="postelCode "
                                  name="postelCode "
                                  value="17414 "
                                />
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for=" " class="country">Country</label>
                                                        <input type="text " class="form-control" id="country " name="country " value="Indonesia " />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=" " class="mobile">Mobile</label>
                                                        <input type="text " class="form-control" id="mobile " name="mobile " value="+628 2020 11111 " />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col text-right">
                                                    <button type="button" class="btn btn-success px-5">
                                Save Now
                              </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection