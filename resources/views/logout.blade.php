@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body"> 
                    <center>
                    <b>Momenteel ingelogt, uitgloggen? </b>
                    <br><br>
                        <button href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"> UITLOGGEN </a>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
