@extends('welcome')

@section('content')



    <table id="dataTable" class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <th>{{1}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
        @endforeach
        <tr>
            <th>11</th>
            <td>jon</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>

    @endsection

@section('script')

    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
    @endsection