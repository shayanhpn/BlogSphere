<x-dash-layout>
    <div class="container">
        <div class="page-inner">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Functions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="{{route('view-user',$user->id)}}" class="btn btn-primary">View</a><button class="btn btn-danger mx-2">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$users->links()}}
            </div>
        </div>
    </div>
</x-dash-layout>
