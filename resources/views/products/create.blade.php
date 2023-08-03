@extends('layout.app')
@section('title')
    Products
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <form class="form-horizontal"action="{{route('products.store')}}" method="POST"enctype="multipart/form-data">
                @csrf
                <fieldset>

                    <!-- Form Name -->
                    <legend>PRODUCTS</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_id">Name</label>
                        <div class="col-md-4">
                            <input id="name" name="name" placeholder="name" class="form-control input-md"
                                required="" type="text">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_name">Price</label>
                        <div class="col-md-4">
                            <input id="price" name="price" placeholder="Price" class="form-control input-md"
                                required="" type="number">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="product_name_fr">Quantity</label>
                        <div class="col-md-4">
                            <input id="quantity" name="quantity" placeholder="quantity"
                                class="form-control input-md" required="" type="number">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <!-- File Button -->
                            <div class="form-group mt-3 mb-3">
                                <label class="col-md-4 control-label" for="filebutton">Image</label>
                                <div class="col-md-4  mt-3">
                                    <input id="image" name="image" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-4">
                                    <input type="submit"id="submit" name="submit" class="btn btn-dark"value="submit">
                                </div>
                            </div>

                </fieldset>
            </form>

        </div>

    </div>

@endsection
