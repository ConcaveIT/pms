
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: {{ config('app.name', 'WorkBot') }}:: Admin Dashboard</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<style>
    .bg-transparent {
        background: #000;
        box-shadow: 0px 0px 37px 11px #000;
        border-radius: 12px;
    }
</style>

<div style="background:url('images/black-bulb.jpg')no-repeat" class="theme-indigo">

    <!-- main body area -->
    <div class="main p-2 py-3 p-xl-5 ">
        
        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">

                    <div class="col-lg-12 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-transparent text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4" action="{{ route('login') }}" method="post">
								@csrf
                                <div class="col-12 text-center mb-1 mb-lg-5">
                                    <h1 class="text-primary">WorkBot</h1>
                                    <span>Let's Better manage your Work!</span>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">{{ __('Email Address') }}</label>
                                        <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"   value="{{ old('email') }}" placeholder="name@example.com" required>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
									</div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
										@if (Route::has('password.request'))
											<div class="form-label">
												<span class="d-flex justify-content-between align-items-center">
													{{ __('Password') }}
													<a class="text-primary" href="{{ route('password.request') }}">{{ __('Forgot Password') }} ?</a>
												</span>
											</div>
										@endif
                                        <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="***************" required>
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror

									</div>
                                </div>
                                
								<div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexCheckDefault">
											{{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>


                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-primary lift text-uppercase" alt="signin" >{{ __('Sign In') }}</button>
                                </div>

                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
</body>
</html>