@extends('layouts.layout')

@section('content')
<div class="notification">
    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
            <div class="tile">
                <div class="tile is-parent is-vertical">
                    <span class="tile is-clickable is-child notification is-primary has-text-centered is-tile-container" onclick="location.href='/'">
                        <p class="title" style="margin: 5%"></p>
                    </span>
                </div>
                <div class="tile is-parent">
                    <span class="tile is-clickable is-child notification is-info is-tile-container" onclick="location.href='/'">
                        <p style="margin: 5%" class="title"></p>
                    </span>
                </div>
            </div>
        </div>
        <div class="tile is-parent">
            <span class="tile is-clickable is-child notification is-success is-tile-container" onclick="location.href='#'">
                <p style="margin: 5%" class="title"></p>
            </span>
        </div>
    </div>
</div>
@endsection