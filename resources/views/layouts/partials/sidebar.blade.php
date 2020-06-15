<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Master Data</li><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('customer.index') }}"> <i class="menu-icon ti-user"></i>Customer</a>
                        <a href="{{ route('product.index') }}"> <i class="menu-icon ti-package"></i>Product</a>
                        <a href="{{ route('category.index') }}"> <i class="menu-icon ti-menu-alt"></i>Category</a>
                    </li>
                    </li>
                    
                    <li class="menu-title">Transaction</li><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('transaction.index') }}"> <i class="menu-icon ti-stats-up"></i>Sales</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>