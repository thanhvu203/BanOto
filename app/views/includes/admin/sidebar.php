<section class="sidebar-wrapper">
    <div class="top-fixed-sidebar">
        <div class="logo-wrapper">
            <a href="admin/dashboard">
                <img class="img-fluid for-white" src="<?= $dataStoreCustom['logo'] ?>" alt="logo">
            </a>
        </div>
    </div>
    <nav class="sidebar-main">
        <div class="sidebar-menu">
            <ul class="sidebar-links">
                <li class="sidebar-list <?= $active == 'dashboard' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="admin/dashboard">
                        <i class="fas fa-th-large"></i>
                        <span>Home</span>
                    </a>
                </li>



                <li class="sidebar-list <?= $active == 'product' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="javascript:void(0)">
                        <i class="fas fa-sliders-h"></i>
                        <span>Danh Mục</span>
                        <div class="according-menu">
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </a>
                    <!--  -->
                    <ul class="sidebar-submenu">
                        <li>
                            <i class="fas fa-minus"></i>
                            <a href="admin/category">Tên Thương Hiệu</a>
                        </li>
                        <li>
                            <i class="fas fa-minus"></i>
                            <a href="admin/product">Sản phẩm</a>
                        </li>

                        <li>
                            <i class="fas fa-minus"></i>
                            <a href="admin/attributes">Màu Sắc</a>
                        </li>
                        <li>
                            <i class="fas fa-minus"></i>
                            <a href="admin/coupon">Vocher</a>
                        </li>
                        <li>
                            <i class="fas fa-minus"></i>
                            <a href="admin/payment-method">Hình thức thanh toán</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list <?= $active == 'brand' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="admin/brand">
                        <i class="fas fa-copyright"></i>
                        <span>Thương hiệu</span>
                    </a>
                </li>

                <li class="sidebar-list <?= $active == 'order' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="admin/order">
                        <i class="fas fa-archive"></i>
                        <span>Đơn hàng</span>
                    </a>
                </li>



                <li class="sidebar-list <?= $active == 'user' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="admin/user">
                        <i class="fas fa-user-friends"></i>
                        <span>Người dùng</span>
                    </a>
                </li>

                <li class="sidebar-list <?= $active == 'role' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="admin/role">
                        <i class="fas fa-user"></i>
                        <span>Vai trò</span>
                    </a>
                </li>

                <li class="sidebar-list <?= $active == 'news' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="admin/news">
                        <i class="fas fa-newspaper"></i>
                        <span>Tin tức</span>
                    </a>
                </li>

                <!--  -->
                <li class="sidebar-list <?= $active == 'storeCustom' ? 'active' : '' ?>">
                    <a class="sidebar-list-link " href="admin/store-custom">
                        <i class="fab fa-centos"></i>
                        <span>Setting</span>
                    </a>
                </li>


            </ul>
        </div>
    </nav>
</section>