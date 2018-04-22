@extends('layouts.layout')

@section('content')
  <div id="main">
    <div class="inner overflowH">
        <div class="col-md-8">
          @php
          foreach ($purchases as $purchase) {
            echo '<div class="card bottom20">';
              echo '<div class="card-header">Order Summary</div>';
              echo '<div class="card-body">';
                echo $purchase->fname . ' ' . $purchase->lname . '<br />';
                echo $purchase->address . ' ' . $purchase->city . ' ' . $purchase->state . ' ' . $purchase->zip . '<br />';
                echo $purchase->product;
              echo '</div>';
            echo '</div>';
          }
          @endphp
        </div>
    </div>
</div>
@endsection
