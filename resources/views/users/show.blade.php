@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"> {{Auth::user()->name}}'s Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  

                   <!-- Table -->
                   <table class="table">
                                <tr>
                                <td> Name</td>
                                <td> {{Auth::user()->name}} </td>
                                </tr>
                                <tr>
                                   <td> Email</td>
                                   <td> {{Auth::user()->email}} </td>
                                </tr>
                             <tr>
                                <td> Role</td>
                                <td> {{ $user->role['name'] }} </td>
                             </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
    </div>


@endsection