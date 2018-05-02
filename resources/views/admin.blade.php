@extends('layouts.master')
@section('content')
                <div class="title m-b-md">
                    Orders!
                </div>
                <?php
                foreach($orders as $order)
                {
                    echo "<br>";
                    echo "<h3>Name: " . $order->first_name . " " . $order->last_name. "</h3>";
                    echo "<br><h3>Product: " .  $order->product_name."</h3><hr>";
                }
                ?>
                <div class="links">

                </div>
            </div>
        </div>
                @stop