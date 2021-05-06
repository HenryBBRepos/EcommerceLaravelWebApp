@extends('admin.layout.app')

@section('content')

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">


   <div class="row">
         <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
         @csrf
    <!-- Form Advance -->
    <div class="col s12 m12 l12">
      <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Upload Product to E-commerce Platform</h4>
          <form>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="product_name" name="product_name" type="text">
                <label for="product_name">Product Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="product_description" name="product_description" type="text">
                <label for="product_description">Product Description</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col m6 s12">
                <select  name="product_category"> 
                  <option value="" disabled selected>Product Category</option>
                  <option value="Home Furniture">Home Furniture</option>
                  <option value="Home Furniture">Computer & Accessories</option>

                  <option value="Work Station">Work Station</option>

                  <option value="Office Equipment Accessories">Office Equipment Accessories</option>

                  <option value="Adhensives">Adhensives</option>

                  <option value="Pads & Papers">Pads & Papers</option>

                  <option value="Presentations">Presentations</option>
                </select>
                <label>Categories</label>
              </div>
              <div class="row">
              <div class="input-field col m6 s12">
                <input id="current_price" name="current_price" type="number">
                <label for="current_price">Current Price</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="previous_price" name="previous_price" type="number">
                <label for="previous_price">Previous Price</label>
              </div>
            </div>
            
            </div>
            <div class="row">
              <div class="col m6 s12 file-field input-field">
                <div class="btn float-right">
                  <span>File</span>
                  <input type="file" name="product_image">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" name="product_image" type="text">
                </div>
              </div>
              
            </div>
            
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit">Submit
                    <i class="material-icons right">send</i>
                  </button>
               </div>
            </div>
          </form>
        </div>
      </div>
    </div>

</form>
  </div>






        </div>
      </div>
    </div>
    <!-- END: Page Main-->
@endsection