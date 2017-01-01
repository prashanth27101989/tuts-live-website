@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    @can('edit_topics')
                        <span>User Can Edit the Topic</span>
                    @endcan
                    @can('create_topic')
                        <span>User Can Create a Topic</span>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
