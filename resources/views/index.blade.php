@extends('layouts.main')

@section('title','Eggless Company')

@section('content')
<!-- section1 -->
<div class="box1">
    <div class="custom-sizing1">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/web.png" alt="">
                            <h5 class="card-title">WEB DEVELOPMENT</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/mobile.png" alt="">
                            <h5 class="card-title">MOBILE APP DEVELOPMENT</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/setting.png" alt="">
                            <h5 class="card-title">SOFTWARE DEVELOPMENT</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/sytem.png" alt="">
                            <h5 class="card-title">PROCUREMENT SYSTEM</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card ">
                        <div class="card-body">
                            <img src="img/desing.png" alt="">
                            <h5 class="card-title">Desain</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/thesis.png" alt="">
                            <h5 class="card-title">help with thesis assignments</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- section2 -->

<div class="box2">
    <h3>Participant's say</h3>
    <div class="custom-crew">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-80 ">
                        <img src="img/faris.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <hr>
                            <h5 class="card-title">FARIS</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-80">
                        <img src="img/maul.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <hr>
                            <h5 class="card-title">FAUZAN</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-80 ">
                        <img src="img/rifat.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <hr>
                            <h5 class="card-title">RIFAT</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-80">
                        <img src="img/faras.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <hr>
                            <h5 class="card-title">FARAS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="contact">
    <h4>Contact</h4>
</div>


<!-- box3 -->
<div class="box3">
    <h3>Got a question for us?</h3>
    <p>Questions? Interested for selling product or buying in this unique platform <br> but need to understand how we
        work or need to talk?</p>
</div>

@endsection


@section('footer')
<footer class="py-5 custom-footer">
    <div class="container">
        <div>
            <div class="alamat">
                <h4>Eggless</h4>
                <p>28 market St.20193 San Fransisco<br>California Suit #201</p>
            </div>
            <!-- <div class="quiklinks">
                <h4>Quik links</h4>
                <p><a href="">How it Works</a></p>
                <p><a href="">Testimonils</a></p>
                <p><a href="">Guarantee</a></p>
                <p><a href="">Auction</a></p>
            </div> -->
        </div>
    </div>
</footer>
@endsection
