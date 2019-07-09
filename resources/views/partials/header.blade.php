
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href ng-click="state.Page = 'index'">Brand</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href ng-click="state.Page = 'userSignIn'">User Signin</a></li>
            <li><a href ng-click="state.Page = 'usersignup' ">User Signup</a></li>
            <li><a href ng-click="state.Page = 'adminsignup' ">Admin Signup</a></li>
            <li><a href ng-click="state.Page = 'adminsignin'">Admin Signin</a></li>
            <li><a href ng-click="state.Page = 'addProduct'">Add Product</a></li>
            <li>
                <a href ng-click="state.Page = 'table'">
                    <span class="badge">@{{ cart ? cart.totalQty : 0 }}</span>
                    Show Cart<i class="fab fa-opencart"></i>
                </a>
            </li>
            <li><a href ng-click="clear()">Clear Cart</a></li>
        </ul>
    </div>
</nav>