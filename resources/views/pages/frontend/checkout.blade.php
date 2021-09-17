@extends('layouts.checkout')

@section('title')
    Checkout 
@endsection

@section('content')
<main>    
    <section class="section-details-header">
    </section>

    <!-- breadcrumb -->
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- content pada sisi kiri -->
            <div class="row">
                <div class="col-lg-8 pl-0">
                    <div class="card card-details">
                        <h1>Who is Going?</h1>
                        <p>Trip to Ubud, Bali, Indonesia</p>
                        
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="" alt="" height="60"></td>
                                            <td class="align-middle">Angga</td>
                                            <td class="align-middle">CN</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="">
                                                    <img src="frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="" alt="" height="60"></td>
                                            <td class="align-middle">Angga</td>
                                            <td class="align-middle">CN</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="">
                                                    <img src="frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>

                        <div class="members mt-3">
                            <h2>Add Members</h2>
                            <form action="" class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" name="inputUsername" id="inputUsername" class="form-control mb-2 mr-sm-2" placeholder="Username">
                                <label for="inputVisa" class="sr-only">Name</label>
                                    <select name="inputVisa" id="" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA">Visa</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport" placeholder="DOE Passport">
                                    </div>

                                    <button class="btn btn-add-now mb-2 px-4"> Add Now </button>
                            </form>
                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in Nomads.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Halaman Checkout -->
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">2 person</td>
                            </tr>
                            
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">$ 190,00</td>
                            </tr>
                            
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">$80,00/person</td>
                            </tr>
                            
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">$ 280,00</td>
                            </tr>

                            <tr>
                                <th width="50%">Total (+Unique Code)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue">$ 279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>

                        <hr>

                        <h2>Payment Instruction</h2>
                        <p class="payment-instruction">Please complete your payment before to 
                            continue the wonderful trip</p>
                        <div class="bank">
                            <div class="bank-items pb-3">
                                <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>0881 8829 8800
                                    <br>
                                    Bank Central Asia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-items pb-3">
                                <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>0899 8501 7888
                                    <br>
                                    Bank HSBC</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="" class="btn btn-block btn-join mt-3 py-2">I Have Made Payment</a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="text-muted">Cancel Booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="frontend/libraries/gijgo-master/dist/combined/css/gijgo.min.css">
@endpush
    

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo-master/dist/combined/js/gijgo.min.js') }}"></script>
<script>
    $('.datepicker').datepicker({
        uiLibrary : 'bootstrap4',
        icons: {
            rightIcon : '<img src="{{ url('frontend/images/ic_doe.png') }}"/>'
        }
    });
</script>
@endpush
