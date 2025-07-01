<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DariMata Admin - Modern Dashboard</title>
    <!-- Local Bootstrap CSS (as per your project) -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Custom Admin CSS (Embedded) -->
    <style>
        :root {
            --admin-primary-color: #0118D8;
            --admin-primary-hover-color: #0014b3;
            --admin-secondary-color: #6c757d;
            --admin-text-dark: #212529;
            --admin-text-medium: #495057;
            --admin-text-light: #adb5bd;
            --admin-bg-body: #f4f7fc;
            --admin-bg-card: #ffffff;
            --admin-border-color: #e9ecef;
            --admin-sidebar-width: 250px;
            --admin-navbar-height: 60px;
            --admin-border-radius: 0.35rem;
            --admin-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
            background-color: var(--admin-bg-body);
            color: var(--admin-text-medium);
            font-size: 0.9rem;
            line-height: 1.6;
            padding-top: var(--admin-navbar-height);
            overflow-x: hidden;
        }

        .admin-layout-wrapper {
            display: flex;
            width: 100%;
        }

        #adminSidebar {
            width: var(--admin-sidebar-width);
            min-width: var(--admin-sidebar-width);
            background: var(--admin-text-dark);
            color: var(--admin-text-light);
            position: fixed;
            top: var(--admin-navbar-height);
            left: 0;
            height: calc(100vh - var(--admin-navbar-height));
            z-index: 1000;
            overflow-y: auto;
            padding-top: 20px;
            transition: margin-left 0.3s ease-in-out;
            box-shadow: 0.25rem 0 0.5rem rgba(0, 0, 0, 0.1);
        }

        #adminSidebar .sidebar-header {
            padding: 15px 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        #adminSidebar .sidebar-header img {
            max-height: 35px;
            filter: brightness(0) invert(1);
            margin-bottom: 5px;
        }

        #adminSidebar .sidebar-header h3 {
            color: var(--admin-bg-card);
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0;
        }

        #adminSidebar ul.components {
            padding: 0;
            list-style: none;
        }

        #adminSidebar ul li a {
            padding: 10px 20px;
            font-size: 0.875rem;
            font-weight: 500;
            display: block;
            color: #ced4da;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            border-left: 4px solid transparent;
        }

        #adminSidebar ul li a:hover {
            color: var(--admin-bg-card);
            background: rgba(255, 255, 255, 0.08);
            border-left-color: var(--admin-primary-color);
        }

        #adminSidebar ul li.active>a {
            color: var(--admin-bg-card);
            background: var(--admin-primary-color);
            border-left-color: var(--admin-secondary-color);
            font-weight: 600;
        }

        #adminSidebar ul li a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            font-size: 0.95rem;
        }

        #adminSidebar::-webkit-scrollbar {
            width: 6px;
        }

        #adminSidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        #adminSidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
        }

        #adminSidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .admin-main-content-with-sidebar {
            width: 100%;
            min-height: calc(100vh - var(--admin-navbar-height));
            display: flex;
            flex-direction: column;
            margin-left: var(--admin-sidebar-width);
            transition: margin-left 0.3s ease-in-out;
            background-color: var(--admin-bg-body);
        }

        .admin-navbar {
            height: var(--admin-navbar-height);
            padding: 0 20px;
            background: var(--admin-bg-card);
            border-bottom: 1px solid var(--admin-border-color);
            box-shadow: var(--admin-box-shadow);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1020;
            display: flex;
            align-items: center;
        }

        .admin-navbar .navbar-brand {
            padding-top: 0;
            padding-bottom: 0;
        }

        .admin-navbar .navbar-brand img {
            max-height: 30px;
        }

        .admin-navbar .navbar-brand h3 {
            color: var(--admin-text-dark);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0;
            margin-left: 0.5rem;
        }

        .admin-navbar .nav-link {
            color: var(--admin-text-medium);
            font-weight: 500;
            font-size: 0.875rem;
            padding: 0.5rem 0.8rem;
        }

        .admin-navbar .nav-link:hover,
        .admin-navbar .nav-link.active {
            color: var(--admin-primary-color);
        }

        .admin-navbar .dropdown-menu {
            border: 1px solid var(--admin-border-color);
            box-shadow: var(--admin-box-shadow);
            border-radius: var(--admin-border-radius);
            margin-top: 0.5rem !important;
        }

        .admin-navbar .dropdown-item {
            font-weight: 500;
            font-size: 0.875rem;
            color: var(--admin-text-medium);
            padding: 0.5rem 1rem;
        }

        .admin-navbar .dropdown-item:hover {
            background-color: var(--admin-bg-body);
            color: var(--admin-primary-color);
        }

        .mobile-sidebar-toggler {
            color: var(--admin-text-medium);
            border: 1px solid var(--admin-border-color);
            padding: 0.3rem 0.6rem;
        }

        .mobile-sidebar-toggler:hover {
            background-color: var(--admin-bg-light);
            color: var(--admin-primary-color);
        }

        .admin-page-container {
            flex-grow: 1;
            padding: 25px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .admin-section {
            background-color: var(--admin-bg-card);
            padding: 20px 25px;
            border-radius: var(--admin-border-radius);
            box-shadow: var(--admin-box-shadow);
            margin-bottom: 2rem;
        }

        .admin-section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--admin-border-color);
        }

        .admin-section-header h2 {
            font-size: 1.15rem;
            font-weight: 600;
            color: var(--admin-text-dark);
            margin-bottom: 0;
        }

        .admin-section-header h2 i {
            margin-right: 0.6rem;
            color: var(--admin-primary-color);
            font-size: 1.1em;
        }

        .btn {
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: var(--admin-border-radius);
            transition: all 0.2s ease-in-out;
            letter-spacing: 0.5px;
        }

        .btn-admin-primary,
        .btn.btn-primary {
            color: var(--admin-bg-card) !important;
            background: var(--admin-primary-color) !important;
            border-color: var(--admin-primary-color) !important;
        }

        .btn-admin-primary:hover,
        .btn.btn-primary:hover {
            background: var(--admin-primary-hover-color) !important;
            border-color: var(--admin-primary-hover-color) !important;
            transform: translateY(-1px);
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        }

        .btn-admin-success,
        .btn.btn-success {
            background-color: #28a745 !important;
            border-color: #28a745 !important;
            color: var(--admin-bg-card) !important;
        }

        .btn-admin-success:hover,
        .btn.btn-success:hover {
            background-color: #1e7e34 !important;
            border-color: #1c7430 !important;
        }

        .btn-sm {
            padding: 0.35rem 0.75rem !important;
            font-size: 0.8rem !important;
        }

        .btn-outline-info {
            color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-outline-info:hover {
            background-color: #17a2b8;
            color: white;
        }

        .btn-outline-danger {
            color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }


        .card {
            border: 1px solid var(--admin-border-color);
            margin-bottom: 1.5rem;
            box-shadow: none;
            border-radius: var(--admin-border-radius);
        }

        .card .card-header {
            background-color: var(--admin-bg-body);
            border-bottom: 1px solid var(--admin-border-color);
            padding: 0.65rem 1rem;
            font-weight: 600;
            color: var(--admin-text-dark);
            font-size: 0.9rem;
        }

        .card .card-body {
            padding: 1rem;
        }

        .card .text-xs {
            font-size: .7rem;
        }

        .card .h5 {
            font-size: 1.25rem;
        }

        .table-responsive {
            margin-bottom: 1rem;
        }

        .table {
            border: 1px solid var(--admin-border-color);
            border-radius: var(--admin-border-radius);
            overflow: hidden;
        }

        .table-hover tbody tr:hover {
            background-color: var(--admin-bg-body);
        }

        .table th,
        .table td {
            vertical-align: middle;
            font-size: 0.85rem;
            border-top: 1px solid var(--admin-border-color);
            border-bottom: none;
            border-left: none;
            border-right: none;
            padding: 0.75rem;
        }

        .table thead th {
            font-weight: 600;
            text-transform: none;
            background-color: var(--admin-bg-body);
            border-bottom: 2px solid var(--admin-border-color);
            color: var(--admin-text-dark);
            border-top: none;
        }

        .table .badge {
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.4em 0.65em;
            border-radius: var(--admin-border-radius);
        }

        .table img {
            max-width: 40px;
            border-radius: var(--admin-border-radius);
        }

        .form-control,
        .form-control-file,
        .custom-select {
            border-radius: var(--admin-border-radius);
            border: 1px solid #ced4da;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            color: var(--admin-text-medium);
            height: auto;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .form-control {
            height: calc(1.5em + 1rem + 2px);
        }

        .form-control:focus {
            border-color: var(--admin-primary-color);
            box-shadow: 0 0 0 0.2rem rgba(1, 24, 216, .25);
            background-color: var(--admin-bg-card);
        }

        label {
            font-weight: 500;
            margin-bottom: 0.35rem;
            font-size: 0.85rem;
            color: var(--admin-text-dark);
        }

        textarea.form-control {
            height: auto;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-row {
            margin-left: -5px;
            margin-right: -5px;
        }

        /* Bootstrap 4 form-row gutter fix */
        .form-row>.col,
        .form-row>[class*="col-"] {
            padding-left: 5px;
            padding-right: 5px;
        }


        .modal-content {
            border-radius: var(--admin-border-radius);
            border: none;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            background-color: var(--admin-bg-body);
            border-bottom: 1px solid var(--admin-border-color);
            padding: 1rem 1.25rem;
        }

        .modal-header .modal-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--admin-text-dark);
        }

        .modal-header .close {
            font-size: 1.5rem;
            opacity: 0.7;
        }

        .modal-body {
            padding: 1.25rem;
            max-height: 70vh;
            overflow-y: auto;
        }

        .modal-footer {
            background-color: var(--admin-bg-body);
            border-top: 1px solid var(--admin-border-color);
            padding: 0.75rem 1.25rem;
        }

        .admin-footer {
            background-color: var(--admin-bg-card);
            padding: 15px 0;
            font-size: 0.8rem;
            text-align: center;
            color: var(--admin-text-medium);
            border-top: 1px solid var(--admin-border-color);
        }

        @media (max-width: 991.98px) {
            body {
                padding-top: var(--admin-navbar-height);
            }

            #adminSidebar {
                margin-left: calc(-1 * var(--admin-sidebar-width));
                box-shadow: none;
                z-index: 1031;
            }

            #adminSidebar.toggled {
                margin-left: 0;
                box-shadow: 0.25rem 0 0.5rem rgba(0, 0, 0, 0.1);
            }

            .admin-main-content-with-sidebar {
                margin-left: 0;
            }

            .sidebar-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1010;
            }

            .sidebar-overlay.active {
                display: block;
            }
        }

        .attribute-pair,
        .color-option-pair {
            display: flex;
            gap: 10px;
            margin-bottom: 0.5rem;
            align-items: center;
        }

        .attribute-pair .form-control,
        .color-option-pair .form-control {
            flex: 1;
        }

        .attribute-pair .btn-sm,
        .color-option-pair .btn-sm {
            flex-shrink: 0;
        }
    </style>
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light admin-navbar">
        <div class="container-fluid">
            <button class="btn btn-sm d-lg-none mobile-sidebar-toggler mr-2" type="button" id="mobileSidebarToggler"
                aria-label="Toggle sidebar">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <h3>DariMata Studio</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNavbarContent"
                aria-controls="adminNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="adminNavbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle mr-1"></i> Admin User
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownUser">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="admin-layout-wrapper">
        <!-- Sidebar -->
        <nav id="adminSidebar">
            <div class="sidebar-header d-lg-none">
                <img src="img/logo2.png" alt="Logo">
                <h3>Menu</h3>
            </div>
            <ul class="components">
                <li class="active"><a href="#dashboard-overview"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                <li><a href="#product-management"><i class="fas fa-box-open"></i>Products</a></li>
                <li><a href="#product-reviews-management"><i class="fas fa-star-half-alt"></i>Product Reviews</a></li>
                <li><a href="#cms-management"><i class="fas fa-file-alt"></i>Content Pages</a></li>
                <li><a href="#order-management"><i class="fas fa-shopping-cart"></i>Orders</a></li>
                <li><a href="#user-management"><i class="fas fa-users"></i>Users</a></li>
                <li><a href="#site-settings"><i class="fas fa-cog"></i>Site Settings</a></li>
            </ul>
        </nav>
        <div class="sidebar-overlay"></div>


        <!-- Main Content Area -->
        <div class="admin-main-content-with-sidebar">
            <div class="admin-page-container container-fluid">

                <!-- Dashboard Overview Section -->
                <section id="dashboard-overview" class="admin-section">
                    <div class="admin-section-header">
                        <h2><i class="fas fa-tachometer-alt"></i>Dashboard Overview</h2>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-admin-primary">
                            <i class="fas fa-download fa-sm"></i> Generate Report
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body text-center p-3"> <i
                                        class="fas fa-box-open fa-2x text-muted mb-2"></i>
                                    <div class="text-xs font-weight-bold text-uppercase mb-1"
                                        style="color: var(--admin-primary-color);">Total Products</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark">{{ $totalStock }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body text-center p-3"> <i
                                        class="fas fa-shopping-cart fa-2x text-muted mb-2"></i>
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #28a745;">
                                        Total Orders</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark">{{ $totalOrder }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body text-center p-3"> <i
                                        class="fas fa-users fa-2x text-muted mb-2"></i>
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #17a2b8;">
                                        Registered Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark">780</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body text-center p-3"> <i
                                        class="fas fa-hourglass-half fa-2x text-muted mb-2"></i>
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #ffc107;">
                                        Pending Orders</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark">{{ $pendingOrder }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 mb-4">
                            <div class="card">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold">Sales Overview</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"
                                        style="height: 280px; background: var(--admin-bg-light); display: flex; align-items: center; justify-content: center; border: 1px dashed var(--admin-border-color); border-radius: var(--admin-border-radius);">
                                        <img src="img/sales_overview_chart.png" alt="Sales Chart" style="width: 100%; height: 100%; object-fit: contain;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-4">
                            <div class="card">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold">Revenue Sources</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie"
                                        style="height: 280px; background: var(--admin-bg-light); display: flex; align-items: center; justify-content: center; border: 1px dashed var(--admin-border-color); border-radius: var(--admin-border-radius);">
                                        <img src="img/revenue_sources_chart.png" alt="Sales Chart" style="width: 100%; height: 100%; object-fit: contain;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Product Management Section -->
                <section id="product-management" class="admin-section">
                    <div class="admin-section-header">
                        <h2><i class="fas fa-box-open"></i>Product Management</h2>
                        <button class="btn btn-admin-primary btn-sm" data-toggle="modal" data-target="#addProductModal"
                            id="addNewProductBtn">
                            <i class="fas fa-plus fa-sm"></i> Add New Product
                        </button>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">All Products</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTableProducts" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price (Rp)</th>
                                            <th>Stock</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="img/product/FIX/boxy fit tee/CREATIVITY V2/CREATIVITY V2 - BLACK - FRONT.png" alt="Product"></td>
                                            <td>CREATIVITY V2</td>
                                            <td>Boxy Fit Tee</td>
                                            <td>169.000</td>
                                            <td>150</td>
                                            <td><span class="badge badge-success">Published</span></td>
                                            <td>
                                                <button
                                                    class="btn btn-sm btn-outline-info mr-1 py-1 px-2 edit-product-btn"
                                                    title="Edit" data-product-id="1"><i
                                                        class="fas fa-edit"></i></button>
                                                <button class="btn btn-sm btn-outline-danger py-1 px-2"
                                                    title="Delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Product table navigation" class="mt-3">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>

                <!-- Shop Page Settings Card (REVISED) -->
                <div class="card">
                    <div class="card-header" id="shoppageSHeading">
                        <h5 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                                type="button" data-toggle="collapse" data-target="#collapseShoppageS"
                                aria-expanded="false" aria-controls="collapseShoppageS">
                                Shop Page Settings & Display
                            </button>
                        </h5>
                    </div>
                    <div id="collapseShoppageS" class="collapse" aria-labelledby="shoppageSHeading"
                        data-parent="#cmsAccordion">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="shopPageBreadcrumbTitle">Shop Page Breadcrumb Title</label>
                                    <input type="text" class="form-control" id="shopPageBreadcrumbTitle"
                                        placeholder="Shop">
                                </div>
                                <hr class="my-3">

                                <h5>Filter Sidebar</h5>
                                <div class="form-group">
                                    <label for="shopFilterSidebarTitle">Filter Sidebar Title</label>
                                    <input type="text" class="form-control" id="shopFilterSidebarTitle"
                                        placeholder="FILTERS">
                                </div>

                                <div class="form-group mt-3">
                                    <label>Manage Filterable Categories</label>
                                    <div class="p-2 border rounded" style="max-height: 150px; overflow-y: auto;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filterCatAll"
                                                checked>
                                            <label class="custom-control-label" for="filterCatAll">All Products
                                                (Show/Hide this option)</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filterCatNew"
                                                checked>
                                            <label class="custom-control-label" for="filterCatNew">New Arrivals</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filterCatBest"
                                                checked>
                                            <label class="custom-control-label" for="filterCatBest">Best Sellers</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filterCatSale"
                                                checked>
                                            <label class="custom-control-label" for="filterCatSale">Sale Items</label>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-switch mt-2">
                                        <input type="checkbox" class="custom-control-input" id="enableCategoryFilter"
                                            checked>
                                        <label class="custom-control-label" for="enableCategoryFilter">Enable Categories
                                            Filter Block</label>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="shopMaxPriceSlider">Price Range Filter: Max Price for Slider
                                        (Rp)</label>
                                    <input type="number" class="form-control" id="shopMaxPriceSlider"
                                        placeholder="200000" step="10000">
                                    <div class="custom-control custom-switch mt-2">
                                        <input type="checkbox" class="custom-control-input" id="enablePriceFilter"
                                            checked>
                                        <label class="custom-control-label" for="enablePriceFilter">Enable Price Range
                                            Filter Block</label>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label>Filterable Colors (Name & Hex Code)</label>
                                    <div id="shopFilterColorsContainer">
                                        <div class="attribute-pair mb-2">
                                            <input type="text" class="form-control form-control-sm mr-2"
                                                placeholder="Color Name (e.g., Blue)">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Hex Code (e.g., #5e64d1)">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger remove-filter-color-btn"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                        <div class="attribute-pair mb-2">
                                            <input type="text" class="form-control form-control-sm mr-2"
                                                placeholder="Dark Gray">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="#404a47">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger remove-filter-color-btn"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-secondary mt-1"
                                        id="addShopFilterColor">
                                        <i class="fas fa-plus"></i> Add Filter Color
                                    </button>
                                    <div class="custom-control custom-switch mt-2">
                                        <input type="checkbox" class="custom-control-input" id="enableColorFilter"
                                            checked>
                                        <label class="custom-control-label" for="enableColorFilter">Enable Colors Filter
                                            Block</label>
                                    </div>
                                </div>
                                <hr class="my-3">

                                <h5>Sorting & Display</h5>
                                <div class="form-group">
                                    <label for="shopDefaultSortText">"Sort by:" Text Label</label>
                                    <input type="text" class="form-control" id="shopDefaultSortText"
                                        placeholder="Sort by: Featured">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Available Sort Options</label>
                                    <div class="p-2 border rounded">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sortOptFeatured"
                                                checked>
                                            <label class="custom-control-label" for="sortOptFeatured">Featured</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sortOptPriceAsc"
                                                checked>
                                            <label class="custom-control-label" for="sortOptPriceAsc">Price: Low to
                                                High</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sortOptPriceDesc"
                                                checked>
                                            <label class="custom-control-label" for="sortOptPriceDesc">Price: High to
                                                Low</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sortOptNewest"
                                                checked>
                                            <label class="custom-control-label" for="sortOptNewest">Newest
                                                Arrivals</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="shopProductsPerPage">Products Per Page (Pagination)</label>
                                    <input type="number" class="form-control" id="shopProductsPerPage" value="9" min="3"
                                        max="24" step="3">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="shopDefaultGridView">Default Product Grid View</label>
                                    <select id="shopDefaultGridView" class="form-control custom-select">
                                        <option value="3-col" selected>3 Columns per Row</option>
                                        <option value="4-col">4 Columns per Row</option>
                                    </select>
                                </div>
                                <hr class="my-3">

                                <h5>Shop Page Promotional Banner (Optional)</h5>
                                <div class="form-group">
                                    <label for="shopPromoBannerImage">Banner Image URL</label>
                                    <input type="text" class="form-control" id="shopPromoBannerImage"
                                        placeholder="e.g., img/shop-promo.jpg">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="shopPromoBannerLink">Banner Link URL</label>
                                    <input type="text" class="form-control" id="shopPromoBannerLink" placeholder="#">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="shopPromoBannerText">Banner Text/Caption</label>
                                    <textarea class="form-control" id="shopPromoBannerText" rows="2"
                                        placeholder="e.g., Mid-Season Sale! Up to 50% Off!"></textarea>
                                </div>
                                <div class="custom-control custom-switch mt-2">
                                    <input type="checkbox" class="custom-control-input" id="enableShopPromoBanner">
                                    <label class="custom-control-label" for="enableShopPromoBanner">Enable Promotional
                                        Banner</label>
                                </div>
                                <hr class="my-3">

                                <h5>"Empty State" Content</h5>
                                <div class="form-group">
                                    <label for="emptyStateTitle">"No Products Found" Title</label>
                                    <input type="text" class="form-control" id="emptyStateTitle"
                                        placeholder="No Products Found">
                                </div>
                                <div class="form-group mt-2">
                                    <label for="emptyStateMessage">"No Products Found" Message</label>
                                    <textarea class="form-control" id="emptyStateMessage" rows="2"
                                        placeholder="Try adjusting your filters or search for something else."></textarea>
                                </div>


                                <button type="submit" class="btn btn-admin-primary mt-4">Save Shop Page
                                    Settings</button>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Product Reviews Management Section -->
                <section id="product-reviews-management" class="admin-section">
                    <div class="admin-section-header">
                        <h2><i class="fas fa-star-half-alt"></i>Product Reviews</h2>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">All Reviews</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Reviewer</th>
                                            <th>Product</th>
                                            <th>Rating</th>
                                            <th style="width: 40%;">Comment</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Joe Angkasa</td>
                                            <td>Boxy Fit Tee [CREATIVITY V2]</td>
                                            <td><i class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="fas fa-star text-warning"></i><i
                                                    class="far fa-star text-warning"></i></td>
                                            <td>Mantap kak, bahannya juga enak dipakai. Next pasti beli lagi disini!!</td>
                                            <td>2025-1-26</td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-success mr-1 py-1 px-2"
                                                    title="Approve"><i class="fas fa-check"></i></button>
                                                <button class="btn btn-sm btn-outline-danger py-1 px-2"
                                                    title="Delete"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Content Management Section (Accordion) -->
                <section id="cms-management" class="admin-section">
                    <div class="admin-section-header">
                        <h2><i class="fas fa-file-alt"></i>Content Pages Management</h2>
                    </div>
                    <div class="accordion" id="cmsAccordion">

                        <div class="card">
                            <div class="card-header" id="hH">
                                <h5 class="mb-0"> <button
                                        class="btn btn-link btn-block text-left font-weight-bold text-dark"
                                        type="button" data-toggle="collapse" data-target="#cH" aria-expanded="true"
                                        aria-controls="cH"> Homepage Content </button> </h5>
                            </div>
                            <div id="cH" class="collapse show" aria-labelledby="hH" data-parent="#cmsAccordion">
                                <div class="card-body">
                                    <form>
                                        <h6>Hero Section</h6>
                                        <div class="form-group"><label>Title</label><input type="text"
                                                class="form-control"></div><button type="submit"
                                            class="btn btn-admin-primary btn-sm mt-2">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="aH">
                                <h5 class="mb-0"> <button
                                        class="btn btn-link btn-block text-left collapsed font-weight-bold text-dark"
                                        type="button" data-toggle="collapse" data-target="#cA" aria-expanded="false"
                                        aria-controls="cA"> About Us Page </button> </h5>
                            </div>
                            <div id="cA" class="collapse" aria-labelledby="aH" data-parent="#cmsAccordion">
                                <div class="card-body">
                                    <form>
                                        <h6>Main Image</h6>
                                        <div class="form-group"><label>URL</label><input type="text"
                                                class="form-control"></div><button type="submit"
                                            class="btn btn-admin-primary btn-sm mt-2">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


                <section id="order-management" class="admin-section">
                    <div class="admin-section-header">
                        <h2><i class="fas fa-shopping-cart"></i>Order Management</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted">[Order management table...]</p>
                        </div>
                    </div>
                </section>
                <section id="user-management" class="admin-section">
                    <div class="admin-section-header">
                        <h2><i class="fas fa-users"></i>User Management</h2> <button
                            class="btn btn-admin-primary btn-sm"><i class="fas fa-user-plus fa-sm"></i> Add
                            User</button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="text-muted">[User management table...]</p>
                        </div>
                    </div>
                </section>
                <section id="site-settings" class="admin-section">
                    <div class="admin-section-header">
                        <h2><i class="fas fa-cog"></i>Site Settings</h2>
                    </div>
                    <div class="card">
                        <div class="card-header">General Site Information</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group"> <label>Site Name</label> <input type="text"
                                        class="form-control"></div> <button type="submit"
                                    class="btn btn-admin-primary btn-sm mt-2">Save</button>
                            </form>
                        </div>
                    </div>
                </section>


            </div>
            <footer class="admin-footer mt-auto">
                <div class="container">
                    <span>&copy;
                        <script>document.write(new Date().getFullYear());</script> DariMata Studio Admin.
                    </span>
                </div>
            </footer>
        </div>
    </div>

    <!-- Add/Edit Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="productForm">
                        <input type="hidden" id="productId">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input type="text" class="form-control" id="productName" required>
                                </div>
                                <div class="form-group">
                                    <label for="productDetailedDescription">Detailed Description (Rich Text Editor
                                        Placeholder)</label>
                                    <textarea class="form-control" id="productDetailedDescription" rows="6"
                                        placeholder="Enter detailed product information, features, specifications..."></textarea>
                                    <small class="form-text text-muted">In a real app, this would be a WYSIWYG
                                        editor.</small>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-header">Additional Information</div>
                                    <div class="card-body" id="additionalInfoContainer">
                                        <div class="attribute-pair">
                                            <input type="text" class="form-control form-control-sm mr-2"
                                                placeholder="Attribute Name (e.g., Weight)">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Attribute Value (e.g., 0.5 kg)">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger remove-attribute-btn"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top-0">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            id="addMoreAttributeInfo">
                                            <i class="fas fa-plus"></i> Add Attribute
                                        </button>
                                    </div>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-header">Color Options</div>
                                    <div class="card-body" id="colorOptionsContainer">
                                        <div class="color-option-pair">
                                            <input type="text" class="form-control form-control-sm mr-2"
                                                placeholder="Color Name (e.g., Red)">
                                            <input type="color" class="form-control form-control-sm mr-2"
                                                style="height: calc(1.5em + 1rem + 2px); padding: .1rem .2rem;"
                                                title="Select Color">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Hex Code (e.g., #FF0000)">
                                            <button type="button"
                                                class="btn btn-sm btn-outline-danger remove-color-btn"><i
                                                    class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-top-0">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            id="addMoreColorOption">
                                            <i class="fas fa-plus"></i> Add Color Option
                                        </button>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="productPrice">Price (Rp)</label>
                                    <input type="number" class="form-control" id="productPrice" step="1000" required>
                                </div>
                                <div class="form-group">
                                    <label for="productSalePrice">Sale Price (Rp)</label>
                                    <input type="number" class="form-control" id="productSalePrice" step="1000">
                                </div>
                                <div class="form-group">
                                    <label for="productSKU">SKU</label>
                                    <input type="text" class="form-control" id="productSKU">
                                </div>
                                <div class="form-group">
                                    <label for="productStock">Stock Quantity</label>
                                    <input type="number" class="form-control" id="productStock" required>
                                </div>
                                <div class="form-group">
                                    <label for="productCategory">Category</label>
                                    <select id="productCategory" class="form-control custom-select">
                                        <option selected disabled>Choose...</option>
                                        <option value="new-arrivals">New Arrivals</option>
                                        <option value="best-sellers">Best Sellers</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="productTags">Tags (comma-separated)</label>
                                    <input type="text" class="form-control" id="productTags">
                                </div>
                                <div class="form-group">
                                    <label for="productSizes">Sizes (comma-separated)</label>
                                    <input type="text" class="form-control" id="productSizes" placeholder="S, M, L, XL">
                                </div>
                                <div class="form-group">
                                    <label for="productStatus">Status</label>
                                    <select id="productStatus" class="form-control custom-select">
                                        <option value="published" selected>Published</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="productMainImage">Main Image</label>
                                    <input type="file" class="form-control-file" id="productMainImage">
                                    <img id="mainImagePreview" src="#" alt="Main image preview"
                                        class="mt-2 img-thumbnail" style="max-height: 100px; display:none;">
                                </div>
                                <div class="form-group">
                                    <label for="productGalleryImages">Gallery Images</label>
                                    <input type="file" class="form-control-file" id="productGalleryImages" multiple>
                                    <div id="galleryPreviews" class="mt-2 d-flex flex-wrap gap-2"></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>SEO Information</h5>
                                <div class="form-group">
                                    <label for="metaTitle">Meta Title</label>
                                    <input type="text" class="form-control" id="metaTitle">
                                </div>
                                <div class="form-group">
                                    <label for="metaDescription">Meta Description</label>
                                    <textarea class="form-control" id="metaDescription" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="relatedProducts">Related Products (Placeholder - Enter IDs
                                comma-separated)</label>
                            <input type="text" class="form-control" id="relatedProducts"
                                placeholder="e.g., 101, 105, 203">
                        </div>
                        <div class="form-group mt-3">
                            <label for="productShippingInfo">Shipping Information (Product Specific)</label>
                            <textarea class="form-control" id="productShippingInfo" rows="2"
                                placeholder="e.g., Ships in 2-3 business days."></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-admin-primary btn-sm" id="saveProductChangesBtn">Save
                        Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('#addShopFilterColor').on('click', function () {
            $('#shopFilterColorsContainer').append(`
                    <div class="attribute-pair mb-2">
                        <input type="text" class="form-control form-control-sm mr-2" placeholder="Color Name">
                        <input type="text" class="form-control form-control-sm" placeholder="Hex Code (e.g., #FFFFFF)">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-filter-color-btn"><i class="fas fa-times"></i></button>
                    </div>`);
        });
        $(document).on('click', '.remove-filter-color-btn', function () {
            $(this).closest('.attribute-pair').remove();
        });


        $(document).ready(function () {
            // Active link highlighting for sidebar
            var currentHash = window.location.hash || "#dashboard-overview";
            $('#adminSidebar a').removeClass('active');
            $('#adminSidebar a[href="' + currentHash + '"]').addClass('active');

            $('#adminSidebar a').on('click', function (event) {
                $('#adminSidebar a').removeClass('active');
                $(this).addClass('active');
                if ($('#adminSidebar').hasClass('toggled')) {
                    $('#adminSidebar').removeClass('toggled');
                    $('.sidebar-overlay').removeClass('active');
                }
            });

            // Mobile sidebar toggle
            const sidebar = $('#adminSidebar');
            const overlay = $('.sidebar-overlay');
            $('#mobileSidebarToggler').on('click', function () {
                sidebar.toggleClass('toggled');
                overlay.toggleClass('active');
            });
            overlay.on('click', function () {
                sidebar.removeClass('toggled');
                overlay.removeClass('active');
            });

            // --- Product Modal Logic (Simulation) ---
            $('#addNewProductBtn').on('click', function () {
                $('#productModalLabel').text('Add New Product');
                $('#productForm')[0].reset(); // Clear form
                $('#productId').val(''); // Clear product ID
                $('#mainImagePreview').hide();
                $('#galleryPreviews').empty();
                // Reset dynamic fields if any
                $('#additionalInfoContainer').html('<div class="attribute-pair"><input type="text" class="form-control form-control-sm mr-2" placeholder="Attribute Name"><input type="text" class="form-control form-control-sm" placeholder="Attribute Value"><button type="button" class="btn btn-sm btn-outline-danger remove-attribute-btn"><i class="fas fa-times"></i></button></div>');
                $('#colorOptionsContainer').html('<div class="color-option-pair"><input type="text" class="form-control form-control-sm mr-2" placeholder="Color Name"><input type="color" class="form-control form-control-sm mr-2" style="height: calc(1.5em + 1rem + 2px); padding: .1rem .2rem;" title="Select Color"><input type="text" class="form-control form-control-sm" placeholder="Hex Code"><button type="button" class="btn btn-sm btn-outline-danger remove-color-btn"><i class="fas fa-times"></i></button></div>');
            });

            $('.edit-product-btn').on('click', function () {
                var productId = $(this).data('product-id');
                // In a real app, you'd fetch product data via AJAX using productId
                console.log("Editing product ID: " + productId);

                // Simulate loading data into the modal
                $('#productModalLabel').text('Edit Product');
                $('#productId').val(productId); // Store the ID
                $('#productName').val('Cider All Modern Fit (Loaded)');
                $('#productDetailedDescription').val('This is a detailed description for Cider All Modern Fit. It is made of high-quality cotton and is perfect for casual wear.');
                $('#productPrice').val('67000');
                $('#productSKU').val('DM-CAMF-01');
                $('#productStock').val('150');
                $('#productCategory').val('new-arrivals');
                $('#productTags').val('cider, modern, fit, cotton');
                $('#productSizes').val('S, M, L');
                $('#metaTitle').val('Cider All Modern Fit | DariMata Studio');
                $('#metaDescription').val('Shop the Cider All Modern Fit, a comfortable and stylish addition to your wardrobe.');
                $('#productShippingInfo').val('Ships within 1-2 business days.');
                $('#relatedProducts').val('102, 108');
                $('#mainImagePreview').attr('src', 'img/product/product-1.jpg').show();
                // Simulate existing attributes and colors
                $('#additionalInfoContainer').html(`
                    <div class="attribute-pair mb-2">
                        <input type="text" class="form-control form-control-sm mr-2" value="Material">
                        <input type="text" class="form-control form-control-sm" value="100% Cotton">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-attribute-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="attribute-pair">
                        <input type="text" class="form-control form-control-sm mr-2" value="Origin">
                        <input type="text" class="form-control form-control-sm" value="Indonesia">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-attribute-btn"><i class="fas fa-times"></i></button>
                    </div>`);
                $('#colorOptionsContainer').html(`
                    <div class="color-option-pair mb-2">
                        <input type="text" class="form-control form-control-sm mr-2" value="Navy Blue">
                        <input type="color" class="form-control form-control-sm mr-2" value="#001f3f" style="height: calc(1.5em + 1rem + 2px); padding: .1rem .2rem;" title="Select Color">
                        <input type="text" class="form-control form-control-sm" value="#001f3f">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-color-btn"><i class="fas fa-times"></i></button>
                    </div>`);


                $('#addProductModal').modal('show');
            });

            $('#saveProductChangesBtn').on('click', function () {
                // In a real app, you'd collect form data and send via AJAX
                var productId = $('#productId').val();
                if (productId) {
                    console.log("Updating product ID: " + productId, $('#productForm').serializeArray());
                } else {
                    console.log("Adding new product:", $('#productForm').serializeArray());
                }
                $('#addProductModal').modal('hide');
                // Potentially refresh product table or show success message
            });

            // Dynamic "Add More" for attributes
            $('#addMoreAttributeInfo').on('click', function () {
                $('#additionalInfoContainer').append(`
                    <div class="attribute-pair mt-2">
                        <input type="text" class="form-control form-control-sm mr-2" placeholder="Attribute Name">
                        <input type="text" class="form-control form-control-sm" placeholder="Attribute Value">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-attribute-btn"><i class="fas fa-times"></i></button>
                    </div>`);
            });
            $(document).on('click', '.remove-attribute-btn', function () {
                $(this).closest('.attribute-pair').remove();
            });

            // Dynamic "Add More" for colors
            $('#addMoreColorOption').on('click', function () {
                $('#colorOptionsContainer').append(`
                    <div class="color-option-pair mt-2">
                        <input type="text" class="form-control form-control-sm mr-2" placeholder="Color Name">
                        <input type="color" class="form-control form-control-sm mr-2" style="height: calc(1.5em + 1rem + 2px); padding: .1rem .2rem;" title="Select Color">
                        <input type="text" class="form-control form-control-sm" placeholder="Hex Code">
                        <button type="button" class="btn btn-sm btn-outline-danger remove-color-btn"><i class="fas fa-times"></i></button>
                    </div>`);
            });
            $(document).on('click', '.remove-color-btn', function () {
                $(this).closest('.color-option-pair').remove();
            });

            // Image Previews
            $("#productMainImage").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#mainImagePreview').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(this.files[0]);
                } else {
                    $('#mainImagePreview').hide();
                }
            });
            $("#productGalleryImages").change(function () {
                $('#galleryPreviews').empty(); // Clear previous previews
                if (this.files && this.files.length > 0) {
                    for (let i = 0; i < this.files.length; i++) {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            $('#galleryPreviews').append('<img src="' + e.target.result + '" class="img-thumbnail" style="max-height: 70px; margin-right: 5px;">');
                        }
                        reader.readAsDataURL(this.files[i]);
                    }
                }
            });

        });
    </script>
</body>

</html>