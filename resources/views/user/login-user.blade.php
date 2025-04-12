<x-blog-layout>
<div class="d-flex flex-row justify-content-center">
    @auth
        <form action="{{route('logout')}}" method="POST">
            @csrf
            @method('POST')
            <h2>You've Been Logged In</h2>
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" class="btn btn-danger">SignOut</button>
            </div>
        </form>

    @else
        <div class="p-4">
            <div class="d-flex flex-row justify-content-center">
                <h2>Login</h2>
            </div>
            <form action="{{route('login-user')}}" method="POST">
                @csrf
                @method('POST')
                <input type="email" name="login_email" class="form-control" placeholder="Email">
                <input type="password" class="form-control my-2" name="login_password" placeholder="Password">
                <div class="d-flex flex-row justify-content-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    @endauth
</div>
</x-blog-layout>
