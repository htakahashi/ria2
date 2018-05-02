@extends('layouts.master')
@section('content')
                <div class="title m-b-md">
                    Thank you for your Purchase!
                </div>
                <?php
                if ($_REQUEST['pid'] == 1)
                {
                    $product = "Apple";
                    $price = "$10.00";
                }
                if ($_REQUEST['pid'] == 2)
                {
                    $product = "Cherry";
                    $price = "$10.00";
                }
                if ($_REQUEST['pid'] == 3)
                {
                    $product = "Mystery";
                    $price = "$10.00";
                }
                ?>

                <?php
                if ($_REQUEST['pid'] == 1)
                {
                echo '<div class="col-lg-4">';
                $product = "<h2>Apple Airhead</h2>";
                echo "$product<br><h4>$price</h4><br>";
                ?>
                <img style="width: 100%;" src="{{ asset('/img/apple.jpg') }}"></div>
                <?php
                }
                if ($_REQUEST['pid'] == 2)
                {
                    echo '<div class="col-lg-4">';
                    $product = "<h2>Cherry Airhead</h2>";
                    echo "$product<br>$price";
                    echo '<img style="width: 100%;" src="/img/cherry.jpg"></div>';
                }
                if ($_REQUEST['pid'] == 3)
                {
                    echo '<div class="col-lg-4">';
                    $product = "<h2>Mystery Airhead</h2>";
                    echo "$product<br>$price";
                    echo '<img style="width: 100%;" src="/img/mystery.jpg"></div>';
                }
                ?>
                <div class="links">

                </div>
            </div>
        </div>
                @stop