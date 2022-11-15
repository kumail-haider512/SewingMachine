@extends('layouts.master')
@section('content')
<div class="extended-container">
    <div id="container" class="container j-container">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('home')}}}">Home</a>
            </li>
            <li>
                <a href="{{route('contact')}}}">Contact Us</a>
            </li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12 contact-page">
                <h1 class="heading-title">Contact Us</h1>
                <div id="journal-cms-block-2027961425" class="journal-cms-block-33 box cms-blocks  " style="">
                    <style>
                        #journal-cms-block-2027961425 .editor-content h1,
                        #journal-cms-block-2027961425 .editor-content h2,
                        #journal-cms-block-2027961425 .editor-content h3 {
                        }

                        #journal-cms-block-2027961425 .editor-content p {
                        }
                    </style>
                    {{--<div class="blocks">
                        <div class="cms-block xs-100 sm-100 md-100 lg-100 xl-100" style="">
                            <span class="block-content block-content-top" style="">
                                <div class="editor-content" style="text-align: left">
                                    <p><iframe allowfullscreen="" frameborder="0" height="350" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9893.938947382616!2d-0.033672!3d51.687574!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbddd301a6fa75228!2sRona+Sewing+Machines!5e0!3m2!1sen!2suk!4v1497344061517" style="border:0" width="100%"></iframe></p>
                                </div>
                            </span>
                        </div>
                    </div>
                </div> --}}
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <fieldset>
                        <h2 class="secondary-title">Contact Form</h2>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-name">
                                Your Name
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="" id="input-name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-email">
                                E-Mail Address
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="email" value="" id="input-email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-enquiry">
                                Enquiry
                            </label>
                            <div class="col-sm-10">
                                <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">
                                    
                                </textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons">
                        <div class="pull-right">
                            <input class="btn btn-primary button" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
                <h2 class="secondary-title">Our Location</h2>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-3 col">
                                <strong>Niko Sewing Machines</strong>
                                <br>
                                <address>Niko Sewing Machines</address><br>info@nikosewingmachines.com
                            </div>
                            <div class="col-sm-3 col">
                                <strong>Telephone</strong><br>02032861196<br>06435970<br>
                            </div>
                            <div class="col-sm-3 col">
                                <strong>Opening Times</strong><br>Monday 9-5pm<br>Tuesday 9-5pm
                                <br>Wednesday 9-5pm<br>Thursday 9-2pm<br>Friday 9-5pm<br>Saturday 9-3pm<br>Sunday - Closed<br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div> 
@endsection
