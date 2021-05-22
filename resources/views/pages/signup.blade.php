@extends('layout.app')

@section('content')

 <!-- Breadcrumb Area start -->
 <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Signup</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- checkout area start -->
            <div class="checkout-area mt-60px mb-40px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap">
                                <h3></h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>First Name</label>
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Last Name</label>
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20px">
                                            <label>Email</label>
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Phone</label>
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20px">
                                            <label>Password</label>
                                            <input type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20px">
                                            <label>Confirm Password</label>
                                            <input type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-account mb-50px">
                                    <input class="checkout-toggle2" type="checkbox" />
                                    <label>Create an account?</label>
                                </div>
                            </div>

                                <button class=" btn btn-danger btn-hover checkout-btn" type="submit">Signup</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout area end -->

@endsection