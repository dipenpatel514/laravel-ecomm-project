@extends('master')
@section('content')
<div class="container-fluid p-5 title-page text-white text-center">
  <h1>Order Page</h1>
</div>
<div class="container cart-detail-wrap">
    

        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total</td>
                <td>$ {{$total + 10}}</td>
              </tr>
            </tbody>
          </table>

          <form action="/orderplace" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <textarea name="address" value='' placeholder="Enter your Address" class="form-control"></textarea>
            </div>
            <div class="mb-3">
              <label for="payments" class="form-label">Payment Mehtod:</label><br><br>
              <input type="radio"  name="payment" value="Online"> <span>Online Payment</span><br><br>
              <input type="radio"   name="payment" value="EMI"> <span>EMI Payment</span><br><br>
              <input type="radio"  name="payment" value="PayOnDelivery"> <span>Payment on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
    
</div>
       

@endsection