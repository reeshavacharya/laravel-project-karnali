@extends('master')
@section("content")

<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ {{$total*0.13}}</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td><b>Total Amount</b></td>
              <td> <p style="color:green">$ {{$total+$total*0.13+10}} </p></td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter Address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="IME" name="payment"> <span>IME pay</span> <br> <br>
                  <input type="radio" value="Khalti" name="payment"> <span>Khalti</span> <br> <br>
                  <input type="radio" value="esewa" name="payment"> <span>esewa</span> <br><br>
                  <input type="radio" value="Cash on Delivery" name="payment"> <span>Cash on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-success">Buy Now</button>
              </form>
          </div>
     </div>
</div>
@endsection 