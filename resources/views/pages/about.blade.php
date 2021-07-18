@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="img mb-4" style="background-image: url(images/profile.jpg);"></div>
                <div class="desc">
                    <h2  style="color:black">Hello I'm</h2>
                    <h1 class="mb-4">Robert Shredow</h1>
                    <p style="color:black">I'm a Computer Science post grad from Eastern Washington University that does research in cloud, high performance, and heterogeneous computing especially when they apply to machine learning. Specifically using GPGPUs (general purpose graphics processing units) 
                        and FPGAs (Field Programmable Gate Arrays) to accelerate computing for scientific computing and machine learning, areas which I feel are growing signficantly and will need faster computing in the future.</p> 
                    <p style="color:black">I graduated from Eastern Washington University with a degree in Electrical Engineering in June 2015.</p>
                    <p style="color:black"> Below are my social media links, most of the code for the projects on my website can be found on my github page.</p>
                    <ul class="mt-3">
                        <li><a href="https://www.facebook.com/robert.shredow">Facebook</a></li>
                        <li><a href="https://www.instagram.com/rshredow/">Instagram</a></li>
                        <li><a href="https://www.linkedin.com/in/robert-shredow-37995393/">Linkedin</a></li>
                        <li><a href="https://github.com/rpshredow">Github</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection