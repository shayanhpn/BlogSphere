<x-dash-layout>
    <div class="container">
        <div class="page-inner">
            {{--BreadCrumb Section--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">View User</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">FirstName</label>
                                            <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">LastName</label>
                                            <input type="text" class="form-control" name="last_name" value="{{$user->last_name}}" disabled>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" name="username" value="{{$user->username}}" disabled>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{$user->email}}" disabled>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dash-layout>
