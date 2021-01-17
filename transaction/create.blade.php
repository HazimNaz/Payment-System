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
        <h1>Online Banking Payment</h1>
    <br>
    <div class="option">
 
    <!-- Payment form -->
    <form action="{{route('transaction.store')}}" method='POST' >
      @csrf
        <p>
            <label>Bank Type</label>
            <select id="bank_type" name="bank_type">
            <option value="Maybank">Maybank</option>
            <option value="Bank Muamalat">Bank Muamalat</option>
            <option value="CIMB Bank">CIMB Bank</option>
            <option value="Bank Rakyat">Bank Rakyat</option>
            <option value="Public Bank">Public Bank</option>
            <option value="Bank Rakyat">RHB Bank</option>
            <option value="Bank Rakyat">Hong Leong Bank</option>
            <option value="Bank Rakyat">Ambank</option>
            </select>
        
        </p> 
        <p>
            <label>Account Number</label>
            <input type="text" name="acc_num" size="50" />
        </p>
        <p>
            <label>Paid Amount</label>
            <input type="text" name="paid_amount" size="10" autocomplete="off" class="paid-amount" />
        </p> 
        <button type="submit" name="payBtn">Submit Payment</button>
    </form>

    </div>
</body>

</html>

@endsection


