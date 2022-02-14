@extends('layouts.app')
@section('title', 'Denlie Design - Small Business & Dance Website Design')
@section('content')


    <div style="background: #1c1a27;">
        @include('nav')
    </div>
    <div class="" style="min-height: 100vh; width: 100%;">
        <div class="container">
            <div class="d-flex justify-content-center my-4">
                <img src="/images/denlie-logo-super-cropped.png" alt="denlie logo" style="height: 200px; width: auto;">
            </div>
            <div class="row">
                <div class="col-sm">
                    <p class="font-a mb-0 ml-3" style="color: #43D3ED;">$129/mo</p>
                    <h1 class="text-center font-a text-uppercase mb-3">Hosting & Maintenance</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Web Hosting</li>
                        <li class="list-group-item">Back-End Set Up & Management</li>
                        <li class="list-group-item">Domain</li>
                        <li class="list-group-item">Virtual Private Server</li>
                        <li class="list-group-item">Transport Layer Security (SSL)</li>
                        <li class="list-group-item">Professional Email</li>
                    </ul>
                </div>
                <div class="col-sm">
                    <div id="paypal-button-container-P-0GW491567K692914SMIEXC5A"></div>
                    <script src="https://www.paypal.com/sdk/js?client-id=AfeW5TGvbbpyO4ux0ayFxQklEIFYFvx8aUGvaqKfy2Oa_QpPsX45SUU8RWloJeB6Y7DbGsfnjxEos8hn&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
                    <script>
                        paypal.Buttons({
                            style: {
                                shape: 'rect',
                                color: 'gold',
                                layout: 'vertical',
                                label: 'subscribe'
                            },
                            createSubscription: function(data, actions) {
                                return actions.subscription.create({
                                    /* Creates the subscription */
                                    plan_id: 'P-0GW491567K692914SMIEXC5A'
                                });
                            },
                            onApprove: function(data, actions) {
                                alert(data.subscriptionID); // You can add optional success message for the subscriber here
                            }
                        }).render('#paypal-button-container-P-0GW491567K692914SMIEXC5A'); // Renders the PayPal button
                    </script>
                </div>
            </div>

        </div>
    </div>

@endsection
