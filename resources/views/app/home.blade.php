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
                    <div class="list-group">
                        @foreach(\Auth::user()->notifications as $notification)
                        <div class="list-group-item">
                            <strong class="list-group-item-heading" data-toggle="collapse" data-target="#notification_json_{{ $notification->getKey() }}">
                                {{ $notification->text }}
                            </strong>
                            <div class="list-group-item-text collapse" id="notification_json_{{ $notification->getKey() }}">
                                <pre><code class="hljs">{{ json_print($notification) }}</code></pre>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
