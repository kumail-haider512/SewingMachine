@extends('layouts.master')
@section('content') 

<div class="extended-container">
    <div id="container" class="container j-container">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('home')}}}">Home</a>
            </li>
            <li>
                <a href="#">Account</a>
            </li>
            <li>
                <a href="{{route('login')}}}">Login</a>
            </li>
        </ul>
        <div class="row">
            <div id="column-right" class="col-sm-3 hidden-xs side-column  ">
                <div class="box">
                    <div class="box-content list-group">
                        <ul>
                            <li>
                                <a href="#" class="list-group-item">Login</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Register</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Forgotten Password</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">My Account</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Address Book</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Wish List</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Order History</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Downloads</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Reward Points</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Returns</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Transactions</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Newsletter</a> 
                                <a href="#" class="list-group-item">GDPR Tools</a>
                            </li>
                            <li>
                                <a href="#" class="list-group-item">Recurring payments</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content" class="col-sm-9">
                <div class="row login-content">
                    <div class="col-sm-6 left">
                        <div class="well">
                            <h2 class="secondary-title">New Customer</h2>
                            <div class="login-wrap">
                                <p><strong>Register Account</strong></p>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                            </div>
                            <hr>
                            <a href="#" class="btn btn-primary button">Continue</a>
                        </div>
                    </div>
                    <div class="col-sm-6 right">
                        <div class="well">
                            <h2 class="secondary-title">Returning Customer</h2>
                            <form action="{{route('login')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="login-wrap">
                                    <p>I am a returning customer</p>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">E-Mail Address</label>
                                        <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Password</label>
                                        <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                                        <a href="#">Forgotten Password</a>
                                    </div>
                                </div>
                                <hr>
                                <input type="submit" value="Login" class="btn btn-primary button">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection