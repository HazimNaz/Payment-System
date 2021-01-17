<title>Payment System</title>
@extends('nav')


@section('content')

<div class="col-sm-12">
    <br>
    <h3 class="display-5 text-center">Credit Card Detail</h3>    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
    @endif
      <table class="table table-striped">
        <thead>
            <tr>
                <th>Payment ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Paid Amount</th>
                <th>Card Number</th>
                <th>Card CVC</th>
                <th>Card Exp Month</th>
                <th>Card Exp Year</th>
                <th colspan="2" class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($creditcard as $row )
            <tr>
                  
                    <td>{{$row['payment_id']}}</td>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['email']}}</td>
                    <td>{{$row['paid_amount']}}</td>
                    <td>{{$row['card_number']}}</td>
                    <td>{{$row['card_cvc']}}</td>
                    <td>{{$row['card_exp_month']}}</td>
                    <td>{{$row['card_exp_year']}}</td>
                </tr>
                @endforeach
        </tbody>
      </table>
    
</div>
          
@endsection
