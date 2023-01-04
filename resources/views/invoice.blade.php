<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Asyk Hotel Reservation</title>

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
        p {
            font-size: 22px;
        }

        .invoice {
            box-shadow: 0 0 0 !important;
        }

        @media print {
            body {
                margin-top: 64px;
            }

            .noPrint {
                display: none;
            }
        }

    </style>
</head>

<body style="background-color: white !important;">
    <div class="text-center noPrint pt-4 pb-4">
        <div class="mb-lg-0" style="display: inline-block">
            <a href="/booking" class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</a>
        </div>
        <button class="btn btn-warning btn-icon icon-left" onclick="window.print()" class="invoice-print"><i
                class="fas fa-print"></i> Print</button>
    </div>

    <div class="invoice" style="margin-bottom: 0px">
        <div class="invoice-print">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-title">
                        <h2>Asyk Hotel | Reservation Ticket</h2>
                        <div class="invoice-number">Order #{{ $reservation->id }}</div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p>
                                <strong>Reserver:</strong><br>
                                Name: {{ $reservation->reserver->name }}<br>
                                E-mail: {{ $reservation->email }}<br>
                                Phone: {{ $reservation->phone }}<br>
                            </p>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <p>
                                <strong>Informations:</strong><br>
                                Guest: {{ $reservation->guest }} <br>
                                Date: {{ $reservation->created_at }}<br>
                                Notes: {{ $reservation->notes }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <p class="section-title">Order Summary</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-md">
                            <tbody>
                                <tr style="font-size:18px">
                                    <th data-width="40" style="width: 40px;">#</th>
                                    <th>Room</th>
                                    <th class="text-center">Price/Night</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Check In</th>
                                    <th class="text-center">Check Out</th>
                                    <th class="text-right">Totals</th>
                                </tr>
                                <tr style="font-size:18px">
                                    <td>1</td>
                                    <td>{{ $reservation->room->name }}</td>
                                    <td class="text-center">
                                        {{ 'Rp' . number_format($reservation->room->price, 0, ',', '.') }}</td>
                                    <td class="text-center">{{ $reservation->room_amount }}</td>
                                    <td class="text-center">{{ $reservation->check_in }}</td>
                                    <td class="text-center">{{ $reservation->check_out }}</td>
                                    <td class="text-right">
                                        @if ($reservation->check_in->diffInDays($reservation->check_out) == 0)
                                            {{ 'Rp' . number_format($reservation->room->price * $reservation->room_amount * 1, 0, ',', '.') }}
                                        @else
                                            {{ 'Rp' .
                                                number_format(
                                                    $reservation->room->price *
                                                        $reservation->room_amount *
                                                        $reservation->check_in->diffInDays($reservation->check_out),
                                                    0,
                                                    ',',
                                                    '.',
                                                ) }}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8">
                            <p class="section-title"><strong>Important!</strong></p>
                            <p class="section-lead">Please come to the hotel 30 Minutes before making your check in
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
