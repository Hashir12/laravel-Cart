@extends('layouts.master')
@section('title')
    Shopping Cart Laravel Angular
@endsection

@section('content')
    {{--Add To Cart--}}


    <div ng-show="state.Page == 'table'">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Item Name</th>
                <th scope="col">Total Number</th>
                <th scope="col">Item Price</th>
                <th scope="col">Price</th>
                <th scope="col">Add Item</th>
                <th scope="col">Remove Item</th>
                <th scope="col">Clear item</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="item in cart.items">
                <td>@{{ item.id }}</td>
                <td>@{{ item.title }}</td>
                <td>@{{ item.qty }}</td>
                <td>@{{ item.price }}</td>
                <td>@{{ item.price * item.qty }}</td>
                <td><a href ng-click="addToCart(item.id)">Add Item </a><i class="fas fa-cart-plus"></i></td>
                <td><a href ng-click="less(item.id)">Less Item</a> <i class="fas fa-minus"></i></td>
                <td><a href ng-click="removeItem(item.id)">Remove Item</a> <i class="fas fa-trash"></i></td>
            </tr>
            </tbody>
        </table>

        <div>
            <strong>Total Bill : @{{cart.totalPrice}}</strong>
        </div>
    </div>

    {{--Admin Signin--}}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" ng-show="state.Page == 'adminsignin'">
                <h3 align="center">Admin Signin</h3>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    {{--Admin Signup--}}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" ng-show="state.Page == 'adminsignup'">
                <h3 align="center">Admin Signup</h3>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    {{--User Signup--}}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" ng-show="state.Page == 'usersignup'">
                <h3 align="center">User Signup</h3>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    {{--User Signin--}}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" ng-show="state.Page == 'userSignIn'">
                <h3 align="center">User Signin</h3>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    {{--Add Product--}}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" ng-show="state.Page == 'addProduct'">
                <h3 align="center">Add Product</h3>
                <div class="form-group">
                    <label for="">Car Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Car Price</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    {{--Menu--}}
    <div class="row">
        <div class="col-sm-6 col-md-4" ng-repeat="product in products">
            <div class="thumbnail" ng-show="state.Page == 'index'">
                <img src="@{{ product.imagePath }}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>@{{ product.title }}</h3>
                    <p><strong>Description: </strong>@{{ product.description }}</p>
                    <p><strong>Price: </strong>@{{ product.price | currency : "Rs " }}</p>
                    <button class="btn btn-success" ng-click="addToCart(product.id)">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
@endsection
