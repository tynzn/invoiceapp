<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createInvoice">
    Create Invoice
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="createInvoice" tabindex="-1" role="dialog" aria-labelledby="invoicelabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="invoicelabel">Create School Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
          <div class="modal-body ">
              <form method="POST" action="{{ route('invoice.store') }}" class="form-group" id="creatInvoice">
                @csrf
                  <label class="justify-content-center">Customer's Name
                      <input type="text" class="form-control" name="Name" required > 
                  </label>
                 
                  <div class="row">
                      <label for=""class="col-md-6 "> Phone Number
                          <input type="text"class="form-control" name="phoneNumber" required > 
                      </label>
                     
                   </div>
                   <div class="row">
                      <label for=""class="col-md-6 ">Address
                          <input type="text" class="form-control"name="Address"required > 
                      </label>
                      <label for=""class="col-md-6 ">Product
                          <input type="text"class="form-control" name="Product" > 
                      </label>
                      <label for=""class="col-md-6 ">Price
                        <input type="number"class="form-control" name="Price" > 
                    </label>

                      <label class="col-md-6"> Quantity
                        <select name="Quantity" id="" class="form-control " type="number" required>
                            <option value="" name="">Select one</option>
                            <option value="1" name="1">1</option>
                            <option value="2" name="2">2</option>
                            <option value="3" name="3">3</option>
                            <option value="4" name="4">4</option>
                            <option value="5" name="5">5</option>
                        </select>
                    </label>
                    <!--
                    <label for=""class="col-md-6 ">Total Price
                        <input type="Number"class="form-control" name="totalPrice" > 
                    </label>
                  -->
                  </div>
  
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">CREATE</button>
              </form>
  
              
          </div>
        </div>
      </div>
    </div>
  </div>