@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(\Auth::check())
                        You are logged in! <i class="fa fa-smile-o"></i>
                    @else
                        You are not logged in! <i class="fa fa-frown-o"></i>
                    @endif
                </div>
            </div>

            @if(\Auth::check())
                <div class="panel panel-default">
                    <div class="panel-heading">Notifications</div>
                    <ul class="list-group">
                        @foreach(\Auth::user()->getNotifications() as $notification)
                        <li class="list-group-item">
                            {{ $notification->text }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
