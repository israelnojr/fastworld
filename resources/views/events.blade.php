@extends('layouts.frontend.app')

@section('content')
<!-- <div><h2 style="color: red;">List of Events</h2></div> -->
<section id="menu-list" class="menu-list">
        <div id="w">
            <div class="pricing-filter">
                <div class="pricing-filter-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="section-header">
                                    <h2 class="pricing-title">List of Events</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="event" id="event">
    
    <div class="bg-video">
        <video class="bg-video_content" autoplay muted loop>
            <source src="{{asset('images/bg-video.mp4')}}"type="video/mp4"/>
            <source src="img/video.webm"type="video/webm"/>
            your browser not supported
        </video>
    </div>

    <div class="box-area">
        @foreach($events as $event)
            <div class="box-card" style="margin-top: 50px;">
                <input type="checkbox" name="">
                <div class="toggle">+</div>
                <div class="imgBx"><img src=" {{asset('uploads/event/'.$event->image)}} " alt="{{$event->title}}"> </div>
                <div class="details">
                        <h2>{{$event->title}}</h2>
                    <p>{{$event->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="quotation" id="quotation">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Quotation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="{{ route('quotation.send') }}">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Select Product</label>
                            <select class="form-control" name="product">
                            <option value="" style="color:red">Select Product</option>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}" style="color:red">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Full Name</label>
                            <input type="text" class="form-control empty iconified" name="fullname"  placeholder="Full Name" value="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control empty iconified" name="email" value="" placeholder="E-mail" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Phone</label>
                            <input type="tel" class="form-control empty iconified" name="phone" placeholder="Phone" value="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Addess</label>
                            <input type="text" class="form-control empty iconified" name="address" placeholder="address" value="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Country</label>
                            <input type="text" class="form-control empty iconified" name="country" value="" placeholder="Country" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Message</label>
                            <textarea type="text" class="form-control empty iconified" name="message" value="" placeholder="message" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
</section>
@endsection