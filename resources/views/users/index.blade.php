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

                <thead>
                    <tr style="font-weight: bold">
                        <td> Name </td>
                        <td> Email </td>
                        <td> Role </td>
                        @if(Auth::user()->role_id < 3)
                        <td> Action </td>
                        @endif
                    </tr>

                </thead>
                </tbody>
                   @foreach($users as $user)
                                <tr>
                                    <td style="font-weight:bold;">  <a href="{{ route('users.show',['id'=>$user->id] ) }}">{{$user->name}} </a> </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->role['name']}} </td>
                                    <td> 
                                    @if(Auth::user()->role_id < 3)
                                        <a href="#">Edit</a> 

                                        @if(Auth::user()->role_id == 1)
                                        |
                                        <a href="#">Delete</a>
                                        @endif
                                        
                                     @endif

                                     </td>
                                </tr>
                                
                     @endforeach   
                     </tbody>    
                        </table>

                </div>
            </div>
        </div>
    </div>
    </div>


@endsection