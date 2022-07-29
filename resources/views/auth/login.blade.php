<x-front-layout title="Login">
    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Login</h2>
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <label for="login">
                                Username or email address
                                <span class="required">*</span>
                            </label>
                            <input name="login" type="text" class="form-input form-wide" id="login"
                                required="">
                            <label for="password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input name="password" type="password" class="form-input form-wide" id="password"
                                required="">

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
                                LOGIN
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-front-layout>
