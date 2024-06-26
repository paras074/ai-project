@extends("layouts.admin")

@section("content")
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Manage Industries</h5>
                            <p class="card-text">Add, edit, or delete industries.</p>
                            <a href="{{ route('industries.index') }}" class="btn btn-primary">Go to Industries</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Manage Categories</h5>
                            <p class="card-text">Add, edit, or delete categories.</p>
                            <a href="{{ route('categories.index') }}" class="btn btn-primary">Go to Categories</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Manage Subcategories</h5>
                            <p class="card-text">Add, edit, or delete subcategories.</p>
                            <a href="{{ route('subcategories.index') }}" class="btn btn-primary">Go to Subcategories</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Manage Products</h5>
                            <p class="card-text">Add, edit, or delete products.</p>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Go to Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf <!-- CSRF token -->
</form>

<!-- Bootstrap JS and any additional scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
