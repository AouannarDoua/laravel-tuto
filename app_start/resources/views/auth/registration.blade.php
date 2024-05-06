<x-master title="Sign in & up">
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            @csrf
            <form action="{{ route('login.post') }}" method="post" class="sign-in-form">
                @csrf
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Enter your Email@gmail.com">
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter your Password">
                    @error('password')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" class="btn solid" value="Login">
                <p class="social-text">Or sign with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f "></i></a>
                    <a href="#" class="social-icon">  <i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                    <a href="#" class="social-icon">  <i class="fab fa-linkedin-in"></i></a>
                </div>
            </form>
            @csrf
            <form action="{{ route('registration.post') }}" method="post" class="sign-up-form">
                @csrf
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Enter your Name">
                    @error('name')
                    <div  class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Enter your Email@gmail.com">
                    @error('email')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter your Password">
                    @error('password')
                    <div  class="error">{{ $message }}</div>
                    @enderror
                </div>
                
                <input type="submit" class="btn btn-success solid" value="Register">
                <p class="social-text">Or Sign up with social platforms</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here ?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                    ex ratione. Aliquid!
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Sign up
                </button>
            </div>
            <img src="{{asset('assets/images/log2.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>One of us ?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                    laboriosam ad deleniti.
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>
            </div>
            <img src="{{asset('assets/images/register.svg')}}" class="image" alt="" />
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/app.js') }}"></script>
</x-master>
