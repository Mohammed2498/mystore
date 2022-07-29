<x-front-layout title="Login">
    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Register</h2>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <label for="name">
                                Name
                                <span class="required">*</span>
                            </label>
                            <input name="name" type="text" class="form-input form-wide" id="name"
                                required="">
                            <label for="email">
                                Email address
                                <span class="required">*</span>
                            </label>
                            <input name="email" type="email" class="form-input form-wide" id="email"
                                required="">
                            <label for="username">
                                Username
                                <span class="required">*</span>
                            </label>
                            <input name="username" type="text" class="form-input form-wide" id="username"
                                required="">
                            <label for="password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input name="password" type="password" class="form-input form-wide" id="password"
                                required="">
                            <label for="password_confirmation">
                                Confirm Password
                                <span class="required">*</span>
                            </label>
                            <input name="password_confirmation" type="password" class="form-input form-wide"
                                id="password_confirmation" required="">
                            <div class="form-footer">
                                <div class="custom-control custom-checkbox mb-0">
                                    <input name="remember" type="checkbox" class="custom-control-input"
                                        id="remember_me">
                                    <label class="custom-control-label mb-0" for="remember_me">Remember
                                        me</label>
                                </div>
                                <a href="forgot-password.html"
                                    class="forget-password text-dark form-footer-right">Forgot
                                    Password?</a>
                            </div>
                            <button type="submit" class="btn btn-dark btn-md w-100">
                                Register
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-front-layout>
