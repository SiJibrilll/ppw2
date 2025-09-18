<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Buku</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            padding: 2rem;
        }

        .page-header {
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e9ecef;
        }

        .page-header h1 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .page-header p {
            color: #666;
            font-size: 1rem;
        }

        .search-filter-section {
            background: #f8f9fa;
            border-radius: 6px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid #e9ecef;
        }

        .form-control, .form-select {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 0.75rem 1rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: #495057;
            box-shadow: 0 0 0 0.2rem rgba(73, 80, 87, 0.25);
        }

        .btn-primary {
            background: #495057;
            border-color: #495057;
            border-radius: 4px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
        }

        .btn-primary:hover {
            background: #343a40;
            border-color: #343a40;
        }

        .latest-books-section {
            margin-bottom: 2rem;
        }

        .latest-books-header {
            background: #495057;
            color: white;
            padding: 1rem;
            border-radius: 6px 6px 0 0;
            margin-bottom: 0;
        }

        .book-card {
            background: white;
            border: 1px solid #e9ecef;
            border-radius: 6px;
            margin-bottom: 1rem;
            transition: box-shadow 0.15s ease-in-out;
        }

        .book-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .book-card .card-header {
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            font-weight: 500;
            color: #495057;
        }

        .table-container {
            background: white;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 2rem;
            border: 1px solid #e9ecef;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead {
            background: #495057;
            color: white;
        }

        .table thead th {
            border: none;
            padding: 1rem;
            font-weight: 500;
            font-size: 0.875rem;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-color: #e9ecef;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .price-cell {
            font-weight: 600;
            color: #495057;
        }

        .author-badge {
            background: #6c757d;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 4px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .statistics-section {
            background: #f8f9fa;
            border-radius: 6px;
            padding: 2rem;
            margin-top: 2rem;
            border: 1px solid #e9ecef;
        }

        .stat-card {
            background: white;
            border-radius: 6px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            height: 100%;
            border: 1px solid #e9ecef;
        }

        .stat-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #495057;
        }

        .stat-value {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .stat-label {
            color: #6c757d;
            font-weight: 500;
            font-size: 0.875rem;
        }

        .stat-card.total { border-left: 3px solid #495057; }
        .stat-card.sum { border-left: 3px solid #6c757d; }
        .stat-card.max { border-left: 3px solid #343a40; }
        .stat-card.min { border-left: 3px solid #adb5bd; }

        .alert-custom {
            border-radius: 4px;
            border: 1px solid transparent;
            padding: 1rem 1.5rem;
            margin: 1rem 0;
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container-fluid px-4">
        <div class="main-container fade-in">
            <!-- Page Header -->
            <div class="page-header">
                <h1><i class="fas fa-book-open me-3"></i>Sistem Manajemen Buku</h1>
                <p>Kelola koleksi buku dengan mudah dan efisien</p>
            </div>

            <!-- Search and Filter Section -->
            <div class="search-filter-section">
                <div class="row g-3">
                    <!-- Search Form -->
                    <div class="col-md-8">
                        <form method="GET" class="d-flex">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="fas fa-search text-muted"></i>
                                </span>
                                <input type="text" 
                                       name="search" 
                                       class="form-control border-start-0" 
                                       placeholder="Masukkan judul buku yang dicari..." 
                                       value="">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search me-2"></i>Cari
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Author Filter -->
                    <div class="col-md-4">
                        <form method="GET">
                            <select name="author" class="form-select" onchange="this.form.submit()">
                                <option value="">Semua Penulis</option>
                                <!-- Options will be populated by backend -->
                                <option value="Andrea Hirata">Andrea Hirata</option>
                                <option value="Tere Liye">Tere Liye</option>
                                <option value="Pramoedya Ananta Toer">Pramoedya Ananta Toer</option>
                                <option value="Dewi Lestari">Dewi Lestari</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Latest Books Section -->
            <div class="latest-books-section">
                <div class="card">
                    <div class="latest-books-header">
                        <h4 class="mb-0">
                            <i class="fas fa-star me-2"></i>5 Buku Terbaru
                        </h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <!-- Sample Latest Books - will be populated by backend -->
                             @foreach($newests as $key => $new)
                                <div class="col-md-6 col-lg-4 p-2">
                                    <div class="book-card card h-100">
                                        <div class="card-header">
                                            <small class="text-muted">Buku Terbaru #{{$key + 1 }}</small>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="card-title">{{$new->title}} </h6>
                                            <p class="card-text">
                                                <span class="author-badge"> {{$new->writer}} </span>
                                            </p>
                                            <p class="card-text price-cell">Rp {{$new->price}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Results Alert (show when search is performed) -->
            <div class="alert alert-info alert-custom d-none" id="searchAlert">
                <i class="fas fa-info-circle me-2"></i>
                <span id="searchMessage">Hasil pencarian untuk: "<strong id="searchTerm"></strong>"</span>
            </div>

            <!-- No Results Alert (show when no books found) -->
            <div class="alert alert-warning alert-custom d-none" id="noResultsAlert">
                <i class="fas fa-exclamation-triangle me-2"></i>
                Tidak ada buku yang ditemukan dengan kriteria pencarian tersebut.
            </div>

            <!-- Books Table -->
            <div class="table-container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                <i class="fas fa-hashtag me-2"></i>No
                            </th>
                            <th scope="col">
                                <i class="fas fa-book me-2"></i>Judul Buku
                            </th>
                            <th scope="col">
                                <i class="fas fa-user-edit me-2"></i>Penulis
                            </th>
                            <th scope="col">
                                <i class="fas fa-tags me-2"></i>Harga
                            </th>
                            <th scope="col">
                                <i class="fas fa-calendar me-2"></i>Tanggal Dibuat
                            </th>
                        </tr>
                    </thead>
                    <tbody id="booksTableBody">
                        <!-- Sample Data - will be populated by backend -->
                         @foreach($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td><strong>{{$book->title}} </strong></td>
                                <td><span class="author-badge">{{$book->writer}} </span></td>
                                <td class="price-cell">Rp {{$book->price}} </td>
                                <td>{{$book->created_at->format('Y-m-d')}}</td>
                            </tr>
                        @endforeach
                        
                        <!-- Empty state (show when no data) -->
                        <tr class="d-none" id="emptyState">
                            <td colspan="5">
                                <div class="empty-state">
                                    <i class="fas fa-book-open"></i>
                                    <h5>Belum ada buku tersedia</h5>
                                    <p>Silakan tambahkan buku baru untuk mulai mengelola koleksi.</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Statistics Section -->
            <div class="statistics-section">
                <h4 class="mb-4 text-center">
                    <i class="fas fa-chart-bar me-2"></i>Statistik Buku
                </h4>
                <div class="row g-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card total">
                            <div class="stat-icon">
                                <i class="fas fa-books"></i>
                            </div>
                            <div class="stat-value" id="totalBooks">{{$statistics['count']}} </div>
                            <div class="stat-label">Total Buku</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card sum">
                            <div class="stat-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div class="stat-value" id="totalPrice">Rp {{$statistics['total_price']}} </div>
                            <div class="stat-label">Total Harga</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card max">
                            <div class="stat-icon">
                                <i class="fas fa-arrow-up"></i>
                            </div>
                            <div class="stat-value" id="maxPrice">Rp {{$statistics['max']}} </div>
                            <div class="stat-label">Harga Tertinggi</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card min">
                            <div class="stat-icon">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                            <div class="stat-value" id="minPrice">Rp {{$statistics['min']}}</div>
                            <div class="stat-label">Harga Terendah</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center mt-4 text-muted">
                <p>
                    <i class="fas fa-code me-2"></i>
                    Sistem Manajemen Buku - Dibuat dengan <i class="fas fa-heart text-danger"></i>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>