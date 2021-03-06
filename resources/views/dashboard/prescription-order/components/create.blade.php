<div class="card">
    <div class="card-header bg-info">
        <h3 class="card-title text-white">Order Place From Prescription</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">

            <div class="col-md-10 offset-md-1 mb-3 ">
                <img src="{{asset('/public/prescriptions/'.$orderDetails->prescription_image)}}" alt="{{$orderDetails->prescription_image}}" class="img-fluid">
            </div>

            <div class="col-lg-12">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="category">Category</label>
                                    <select class="form-control select2bs4" id="category" name="category"
                                        data-width="100%">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="product">Product</label>
                                    <select class="form-control select2bs4" id="product" name="product"
                                        data-width="100%">
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="quantity">Quantity</label>
                                    <input min="1" value="1" type="number" id="quantity" name="quantity"
                                        class="form-control" />
                                </div>

                                <div class="col-lg-2 pt-4">
                                    <label for="btn_add_product">&nbsp;</label>
                                    <button id="btn_add_product" type="button" class="btn bg-primary btn-sm text-white">
                                        <i class="fas fa-cart-plus"></i>
                                        Add Product
                                    </button>
                                </div>

                                <div class="col-lg-2 pt-4">
                                    <label for="btn_next_step">&nbsp;</label>
                                    <button id="btn_next_step" type="button" class="btn bg-success btn-sm text-white">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        Process Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12">
                <table class="table table-responsive bg-white w-100 d-block d-md-table table-sm" id="orderTable">
                    <thead>
                        <tr class="text-center bg-info  text-white">
                            <th>Serial</th>
                            <th>Category</th>
                            <th>Product Name</th>
                            <th>Rate</th>
                            <th>Quantity</th>
                            <th>MRP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>


{{--@if (auth()->guest())--}}

{{--@else--}}

{{--@endif--}}
