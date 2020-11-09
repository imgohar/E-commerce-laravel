@extends('master')

@section('content')
    <div class="custom-product">
        
<div class="container">
    <table class="table">
      <tbody>
        <tr>
          <td>Amount</td>
            <td>$ {{$total}}</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$0 </td>
        </tr>
        <tr>
          <td>Delivery Charges</td>
          <td>$ 10</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td>$ {{$total + 10}}</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div>
    <form action="/orderplace" method="POST">
      @csrf
        <div class="form-group">
          <textarea name="address" class="form-control" placeholder="Enter your address"></textarea>
        </div>
        <div class="form-group">
          <label for="pwd">Payment Method:</label>
          <br>
          <input type="radio" value="cash" name="payment" id="pwd">Online Payment <br>
          <input type="radio" value="cash" name="payment" id="pwd">EMI Payment <br>
          <input type="radio" value="cash" name="payment" id="pwd">Payment on delivery <br>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
  </div>
  
    </div>
@endsection