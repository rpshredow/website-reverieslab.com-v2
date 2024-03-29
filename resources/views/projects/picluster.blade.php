@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3>Raspberry Pi 4 Cluster</h3>
                <p>I built a Raspberry Pi cluster as a cheaper way to become more familiar with cluster computing 
                    and to learn technologies such as containers like Docker, Kubernetes, Apache Hadoop, Apache Spark 
                    and Message Passing Interface (MPI).</p>
                <img src="/images/cluster5.jpg" width="750">
                <ol type="1">
                    <li>Raspberry Pi 4 - 4GB version <a href="https://www.amazon.com/gp/product/B07TC2BK1X/ref=ppx_yo_dt_b_asin_title_o05_s01?ie=UTF8&psc=1">Amazon Link</a></li>
                    <li>32GB microSD card x 5 <a href="https://www.amazon.com/gp/product/B07WJ359P6/ref=ppx_yo_dt_b_asin_title_o05_s00?ie=UTF8&psc=1">Amazon Link</a></li>
                    <li>6-Port USB Charger <a href="https://www.amazon.com/gp/product/B077G4MNXJ/ref=ppx_yo_dt_b_asin_title_o05_s02?ie=UTF8&psc=1">Amazon Link</a></li>
                    <li>USB Type C Cable x 5 <a href="https://www.amazon.com/gp/product/B01I4ZOIQY/ref=ppx_yo_dt_b_asin_title_o05_s01?ie=UTF8&psc=1">Amazon Link</a></li>
                    <li>Micro HDMI to HDMI Cable x 2 <a href="https://www.amazon.com/gp/product/B07K21HSQX/ref=ppx_yo_dt_b_asin_title_o04_s00?ie=UTF8&psc=1">Amazon Link</a></li>
                    <li>Raspberry Pi 4 Cluster Case with Fans <a href="https://www.amazon.com/gp/product/B07CTG5N3V/ref=ppx_yo_dt_b_asin_title_o03_s00?ie=UTF8&psc=1">Amazon Link</a></li>
                    <li>5-Port Gigabit Ethernet Port <a href="https://www.amazon.com/gp/product/B07QLV899F/ref=ppx_yo_dt_b_asin_title_o02_s00?ie=UTF8&psc=1">Amazon Link</a></li>
                    <li>6in Ethernet Cable x 5 <a href="https://www.amazon.com/gp/product/B00FTGETWK/ref=ppx_yo_dt_b_asin_title_o02_s00?ie=UTF8&psc=1">Amazon Link</a></li>
                </ol>
                <img src="/images/cluster1.jpg" width="750">
                <p>The USB charger puts out 60 watts which is about ~15 watts per Pi as the ethernet switch consumes only a few watts. 
                    They are connect through the USB Type-C cables.</p>
                <img src="/images/cluster2.jpg" width="750">
                <p>Only 1 cable needed to be fabricated from an old USB cable and a DC port to power the Ethernet Switch. 
                    One of the reasons the switch was chosen was because it operates on 5 volts which is the same voltage as USB operates on.</p>
                <img src="/images/cluster3.jpg" width="750">
                <p>Every Pi's SD card was loaded up with Raspbian, the Raspberry Pi OS, and assigned a name and a static IP address as well as 
                    some BASH scripts to automate SSH and issuing commands to all the nodes of the cluster.</p>
                <img src="/images/cluster4.jpg" width="750">
                <p>
                    Even though the Raspberry Pi 4 comes with wifi I chose an ethernet switch and ethernet connections to minimize latency 
                    and maximize bandwidth as much as possible for better worker and master communications. The Raspberry Pi 4 reaches actual 
                    gigabit speeds unlike previous versions. </p>
            </div>
        </div>
    </div>
</div>
@endsection