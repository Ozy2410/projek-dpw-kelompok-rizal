<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ticketcard.css">
    <title>List Ticket</title>
</head>

<body>
    <x-layout>
        <body style="color: var(--bs-card-bg);padding-right: 17px;">
            <div class="d-flex flex-row">
                <div class="card" style="border-radius: 25px;border-style: none;padding-right: 25px;">
                    <div class="d-flex flex-row justify-content-between" style="background: #06555c;border-radius: 0px;border-top-left-radius: 25px;border-top-right-radius: 25px;">
                        <div>
                            <h6 style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;color: #cddae3;">Kode Booking</h6>
                            <h4 style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;color: var(--bs-body-bg);">CODE HERE</h4>
                        </div>
                        <div>
                            <h4 style="padding-top: 0px;padding-right: 30px;padding-bottom: 0px;padding-left: 30px;color: var(--bs-body-bg);">Kode Booking</h4>
                            <h4 style="padding-top: 0px;padding-right: 30px;padding-bottom: 1px;padding-left: 30px;color: var(--bs-body-bg);">CODE HERE</h4>
                        </div>
                    </div>
                    <div class="card-body" style="background: var(--bs-secondary-bg);border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;">
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                <div class="card" style="border-radius: 25px;border-style: none;padding-right: 25px;">
                    <div class="d-flex flex-row justify-content-between" style="background: #06555c;border-radius: 0px;border-top-left-radius: 25px;border-top-right-radius: 25px;">
                        <div>
                            <h6 style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;color: #cddae3;">Kode Booking</h6>
                            <h4 style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 30px;color: var(--bs-body-bg);">CODE HERE</h4>
                        </div>
                        <div>
                            <h4 style="padding-top: 0px;padding-right: 30px;padding-bottom: 0px;padding-left: 30px;color: var(--bs-body-bg);">Kode Booking</h4>
                            <h4 style="padding-top: 0px;padding-right: 30px;padding-bottom: 1px;padding-left: 30px;color: var(--bs-body-bg);">CODE HERE</h4>
                        </div>
                    </div>
                    <div class="card-body" style="background: var(--bs-secondary-bg);border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;">
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
        </body>
        @php
            for ($i = 0; $i < 10; $i++) {
                echo "";
            }
        @endphp
    </x-layout>
</body>

</html>
