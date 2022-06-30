<!doctype html>
<html lang="en">
  <head>
    <title>Product upload form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section class="section">
        <div class="row">
          <div class="col-lg-10 mx-lg-5">
            <div class="card mt-3 mx-auto">
              <div class="card-body">
                <h5 class="card-title display-3 text-center">Product Form</h5>

               
                <form
                  class="row g-3 needs-validation"
                  action="./productforminput.php"
                  method="post"
                  enctype="multipart/form-data"
                  novalidate
                >
                  <div class="form-group col-12">
                    <label for="rollno">Product ID</label>
                    <input
                      type="number"
                      class="form-control"
                      id="inputPassword4"
                      placeholder="Product_id"
                      name="product_id"
                      required
                      minlength="5"
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="name">Product Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="inputEmail4"
                      placeholder="Product_Name"
                      name="product_name"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  </div>
                  <div class="form-group col-12">
                    <label for="name">Product Price</label>
                    <input
                      type="number"
                      class="form-control"
                      id="inputEmail4"
                      placeholder="Product_price"
                      name="Product_price"
                      maxlength="14"
                      required
                    />
                    <div class="invalid-feedback">
                      Please enter register number.
                    </div>
                  </div>
                  <div class="form-group col-12">
                    <label for="dob">Product color</label>
                    <input
                      type="text"
                      class="form-control"
                      id="inputPassword4"
                      placeholder="Product-Color"
                      name="Product_type_id"
                      required
                    />
                    
                


                  <div class="col-12">
                    <input class="btn btn-primary" type="submit" name="submit" value="submit">
                      
                    
                  </div>
                </form>
                <!-- End Custom Styled Validation -->
              </div>
            </div>
          </div>
        </div>
      </section></body>
</html>