<title>Payment System</title>
@extends('nav')


@section('content')

<div class="col-sm-12">
    <br>
    <h3 class="display-5 text-center">Online Banking Detail</h3>    
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
                <th>Transaction ID</th>
                <th>Bank Type</th>
                <th>Account Number</th>
                <th>Paid Amount</th>
                <th colspan="2" class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($onlinebanking as $row )
            <tr> 
                    <td>{{$row['transaction_id']}}</td>
                    <td>{{$row['bank_type']}}</td>
                    <td>{{$row['acc_num']}}</td>
                    <td>{{$row['paid_amount']}}</td>
                </tr>
                @endforeach
        </tbody>
      </table>
    
</div>
          
@endsection
