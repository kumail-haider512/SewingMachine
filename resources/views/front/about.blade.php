@extends('layouts.master')
@section('content')
<div class="extended-container">
    <div id="container" class="container j-container">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}">About Us</a>
            </li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12">
                <h1 class="heading-title">About Us</h1>
                <p>
                    About Us This web site is owned and operated by Niko sewing Machines who are completely dedicated to your total satisfaction. If you have any suggestions or comments or if you need to contact us, please email us using the link on the store page or use the details below.
                </p>
                <p><br></p>
                <p>Our Contact details:</p><p>Niko Sewing Machines</p><p>143a High Street, Waltham Cross, Herts. EN8 7AP</p><p>Phone:02032861196</p>
                <p>Email: <a style="color: #2d2d75;" href="mailto:sales@info@nikosewingmachines.com">sales@info@nikosewingmachines.com</a>
                </p><p><br></p>
                <p><b>Opening times</b></p>
                <p>Monday 9-5pm</p>
                <p>Tuesday 9-5pm</p><p>Wednesday 9-5pm</p><p>Thursday 9-2pm</p><p>Friday 9-5pm</p><p>Saturday 9-5pm</p><p>Sunday Closed</p><p><br></p><p><br></p>
                <p>Company number: 06435970</p>
            </div>
        </div>
    </div>
</div>

@endsection