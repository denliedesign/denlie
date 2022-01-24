<div class="section-gray d-flex align-items-center text-opaque pt-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('images/denlie-dance-website-design-contact.jpg') }}" alt="dance website design contact" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h1 class="display-4 text-center mt-5">Contact</h1>
                <p class="text-center">
                    Get your new small business or dance website design today!
                    <br>
                    <span class="text-muted">customdenlie@gmail.com</span>
                </p>
                <form action="{{ route('contact.store') }}" method="POST" id="formContact" class="d-flex justify-content-center">
                    <div class="form">
                        <div class="card bg-warm border border-muted text-opaque" style="width: 22rem;">
                            <div class="card-body">
                                <div class="card-text">
                                    @if(session()->has('message'))
                                        <div class="alert alert-success" role="alert">
                                            <strong>Success</strong> {{ session()->get('message') }}
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                                            <div>{{ $errors->first('name') }}</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                            <div>{{ $errors->first('email') }}</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="1234567890" value="{{ old('phone') }}" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                            <div>{{ $errors->first('phone') }}</div>
                                        </div>
                                        @csrf
                                        <div id="refer-btn-wrap" class="text-center">
                                            <a id="refer-claim" class="btn btn-info mt-2" href="#"><button type="submit">Get a Denlie Website</button></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <ion-icon name="arrow-up-circle-outline" class="icon-hover" id="up-on-top" style="font-size: 3em;" onclick="upOnTop()"></ion-icon>
        </div>
    </div>
</div>
