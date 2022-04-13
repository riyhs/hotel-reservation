<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <style>
        @media print {
            .noPrint {
                display: none;
            }
        }

    </style>
</head>

<body>

    <div class="invoice" style="margin-bottom: 0px">
        <div class="invoice-print">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-title">
                        <h2>Invoice</h2>
                        <div class="invoice-number">Order #12345</div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <address>
                                <strong>Billed To:</strong><br>
                                Ujang Maman<br>
                                1234 Main<br>
                                Apt. 4B<br>
                                Bogor Barat, Indonesia
                            </address>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <address>
                                <strong>Shipped To:</strong><br>
                                Muhamad Nauval Azhar<br>
                                1234 Main<br>
                                Apt. 4B<br>
                                Bogor Barat, Indonesia
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <strong>Payment Method:</strong><br>
                                Visa ending **** 4242<br>
                                ujang@maman.com
                            </address>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <address>
                                <strong>Order Date:</strong><br>
                                September 19, 2018<br><br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="section-title">Order Summary</div>
                    <p class="section-lead">All items here cannot be deleted.</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-md">
                            <tbody>
                                <tr>
                                    <th data-width="40" style="width: 40px;">#</th>
                                    <th>Item</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Totals</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Mouse Wireless</td>
                                    <td class="text-center">$10.99</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$10.99</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Keyboard Wireless</td>
                                    <td class="text-center">$20.00</td>
                                    <td class="text-center">3</td>
                                    <td class="text-right">$60.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Headphone Blitz TDR-3000</td>
                                    <td class="text-center">$600.00</td>
                                    <td class="text-center">1</td>
                                    <td class="text-right">$600.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8">
                            <div class="section-title">Payment Method</div>
                            <p class="section-lead">The payment method that we provide is to make it easier for you to
                                pay
                                invoices.</p>
                            <div class="images">
                                <img src="assets/img/visa.png" alt="visa">
                                <img src="assets/img/jcb.png" alt="jcb">
                                <img src="assets/img/mastercard.png" alt="mastercard">
                                <img src="assets/img/paypal.png" alt="paypal">
                            </div>
                        </div>
                        <div class="col-lg-4 text-right">
                            <div class="invoice-detail-item">
                                <div class="invoice-detail-name">Subtotal</div>
                                <div class="invoice-detail-value">$670.99</div>
                            </div>
                            <div class="invoice-detail-item">
                                <div class="invoice-detail-name">Shipping</div>
                                <div class="invoice-detail-value">$15</div>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="invoice-detail-item">
                                <div class="invoice-detail-name">Total</div>
                                <div class="invoice-detail-value invoice-detail-value-lg">$685.99</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-md-right noPrint">
            <div class="float-lg-left mb-lg-0">
                <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process
                    Payment</button>
                <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
            </div>
            <button class="btn btn-warning btn-icon icon-left" onclick="window.print()" class="invoice-print"><i
                    class="fas fa-print"></i> Print</button>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
