<x-dash-layout>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Forms</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Elements</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="{{route('register-user')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="row">

                                        <div class="col-md-4 @error('first_name') has-error @enderror">
                                            <label for="">FirstName</label>
                                            <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}">
                                            @error('first_name') <small id="emailHelp" class="form-text text-danger">{{$message}}</small> @enderror
                                        </div>
                                        <div class="col-md-4 @error('last_name') has-error @enderror">
                                            <label for="">LastName</label>
                                            <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}">
                                            @error('last_name') <small id="emailHelp" class="form-text text-danger">{{$message}}</small> @enderror
                                        </div>
                                        <div class="col-md-4 @error('username') has-error @enderror">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" name="username" value="{{old('username')}}">
                                            @error('username') <small id="emailHelp" class="form-text text-danger">{{$message}}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-4 @error('email') has-error @enderror">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                            @error('email') <small id="emailHelp" class="form-text text-danger">{{$message}}</small> @enderror
                                        </div>
                                        <div class="col-md-4 @error('password') has-error @enderror">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" name="password" value="{{old('password')}}">
                                            @error('password') <small id="emailHelp" class="form-text text-danger">{{$message}}</small> @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Password Confirmation</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="card-action">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dash-layout>
