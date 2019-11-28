@extends('layouts.layout')

@section('content')
<div class="content-body">
    <div class="columns">
        <div class="column">
            <div class="box quick-stats has-background-primary has-text-white">
                <div class="quick-stats-icon">
                    <span class="icon is-large">
                        <i class="fa fa-3x fa-users"></i>
                    </span>
                </div>
                <div class="quick-stats-content">
                    <h3 class="title is-4">Clientes</h3>
                    <div class="inlinesparkline-bar"></div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="box quick-stats has-background-info has-text-white">
                <div class="quick-stats-icon">
                    <span class="icon is-large">
                        <i class="fa fa-3x fa-server"></i>
                    </span>
                </div>
                <div class="quick-stats-content">
                    <h3 class="title is-4">Productos</h3>
                    <div class="inlinesparkline-bar"></div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="box quick-stats has-background-danger has-text-white">
                <div class="quick-stats-icon">
                    <span class="icon is-large">
                        <i class="fa fa-3x fa-bar-chart"></i>
                    </span>
                </div>
                <div class="quick-stats-content">
                    <h3 class="title is-4">Ventas</h3>
                    <div class="inlinesparkline-line"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-content">
                    <p class="title is-4">Productos</p>
                    <canvas id="chart1"></canvas>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="card-content">
                    <p class="title is-4">Ventas</p>
                    <canvas id="chart2"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection