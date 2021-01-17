@extends('nav')

<title>Payment System</title>

@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Payment System</title>

    <style>
        .header {
            text-align: center;
            margin: 50px;
            padding: 50px;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .option {
            text-align: center;
            margin: 60px;
        }

        .option form {
            text-align: left;
            margin: 30px;
            padding: 10px;
            background-color: rgb(106, 16, 158);
            font-size: 20px;
            text-decoration: none;
            color: black;
        }
 
    </style>
</head>

<body>
    <div class="header">
        <h1>Credit Card Payment</h1>
    <br>
    <div class="option">
 
    <!-- Payment form -->
    <form action="{{route('payment.store')}}" method='POST' >

    @csrf 
        <p>
            <label>Name</label>
            <input type="text" name="name" size="50" />
        </p>
        <p>
            <label>Email</label>
            <input type="text" name="email" size="50" />
        </p>
        <p>
            <label>Paid Amount</label>
            <input type="text" name="paid_amount" size="10" autocomplete="off" class="paid-amount" />
        </p>
        <p>
            <label>Card Number</label>
            <input type="text" name="card_number" size="20" autocomplete="off" class="card-number" />
        </p>
        <p>
            <label>CVC</label>
            <input type="text" name="card_cvc" size="4" autocomplete="off" class="card-cvc" />
        </p>
        <p>
            <label>Expiration (Month)</label>
            <input type="text" name="card_exp_month" size="2" class="card-expiry-month" />
        </p>
        <p>
            <label>Expiration (Month)</label>
            <input type="text" name="card_exp_year" size="4" class="card-expiry-year" />
        </p>
     
        <button type="submit" name="payBtn">Submit Payment</button>
    </form>

    </div>
</body>

</html>

@endsection