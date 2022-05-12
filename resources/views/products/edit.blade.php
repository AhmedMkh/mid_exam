@extends('layout.app')
@section('content')
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Add Product</h1>
               <div class="btn-group mr-2">
                      <a href="all_products.html" class="btn btn-outline-secondary">All Products</a>
                  </div>
          </div>
          <div class="btn-toolbar mb-2 mb-md-0">

              <div class="card-body">
                  <form method="post" action="/update/{{$product->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                      <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" name="product_name" value ={{$product->name}}/>
                      </div>
                      <div class="form-group">
                        <label for="price">Product Category :</label>
                        <select class="form-control" name="category" id="exampleFormControlSelect1"> value ={{$product->category}}
                          <option value="clothes">clothes</option>
                          <option value="food">food</option>
                          <option value="games">games</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="price">Product Price :</label>
                          <input type="text" class="form-control" name="product_price" value ={{$product->price}}/>
                      </div>
                      <div class="form-group">
                          <label for="quantity">Product Quantity:</label>
                          <input type="text" class="form-control" name="product_qty"  value ={{$product->quantity}}/>
                      </div>

                      <button type="submit" class="btn btn-primary">Add</button>
                  </form>
              </div>
          </div>
      </main>
    </div>
  </div>
@endsection
