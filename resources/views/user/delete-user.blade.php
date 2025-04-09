<x-dash-layout>
    <div class="container">
        <div class="page-inner">
            {{--BreadCrumb Section--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Elements</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h3>Are You Want Ro Remove {{$user->first_name}}?</h3>
                                <form action="{{route('delete-user',$user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-lg btn-danger">DELETE</button>
                                    <a href="{{route('show-all-users')}}" class="btn btn-lg btn-warning">Back</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-dash-layout>
