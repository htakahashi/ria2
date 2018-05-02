@extends('layouts.master')
@section('content')

                <div class="title m-b-md">
                    Products
                </div>

                <div class="products">
                    <div class="row">
                    <div class="col-sm-4">
                        <img src="../img/apple.jpg">
                        <h2>Apple Airhead</h2>
                        <h5>Apple, the tangiest of the bunch!</h5>
                        <h4>$10.00</h4>
                        <a class="btn btn-default" href="/checkout?pid=1" role="button" id="button">Purchase</a>
                    </div>
                        <div class="col-sm-4">
                            <img src="../img/cherry.jpg">
                            <h2>Cherry Airhead</h2>
                            <h5>Cherry Airheads, the classic that never gets old!</h5>
                            <h4>$10.00</h4>
                            <a class="btn btn-default" href="/checkout?pid=2" role="button" id="button">Purchase</a>
                        </div>
                        <div class="col-sm-4">
                            <img src="../img/mystery.jpg">
                            <h2>Mystery Airhead</h2>
                            <h5>Want a mystery? this airhead will trick you everytime!</h5>
                            <h4>$10.00</h4>
                            <a class="btn btn-default" href="/checkout?pid=3" role="button" id="button">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
@stop