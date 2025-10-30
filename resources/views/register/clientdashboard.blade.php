<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard - The Kicukiro Heights</title>
    <style>
        /* ===== BASE STYLES ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #2C3E50;
        }
        
        .container {
            width: 95%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* ===== NAVBAR ===== */
        .navbar {
            background-color: #2C3E50;
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #D4AF37;
            text-decoration: none;
        }
        
        .navbar-nav {
            display: flex;
            list-style: none;
        }
        
        .nav-item {
            margin-left: 1.5rem;
        }
        
        .nav-link {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .nav-link:hover {
            color: #D4AF37;
        }
        
        /* ===== DASHBOARD CONTENT ===== */
        .dashboard-content {
            padding: 2rem 0;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            overflow: hidden;
        }
        
        .card-header {
            background-color: #f1f1f1;
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }
        
        .card-header h5 {
            font-size: 1.2rem;
            color: #2C3E50;
            margin: 0;
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .table th, .table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
        
        .bg-success {
            background-color: #28a745;
            color: white;
        }
        
        .bg-secondary {
            background-color: #6c757d;
            color: white;
        }
        
        .alert {
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        
        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }
        
        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: all 0.3s;
            text-decoration: none;
        }
        
        .btn-primary {
            color: #fff;
            background-color: #D4AF37;
            border-color: #D4AF37;
        }
        
        .btn-primary:hover {
            background-color: #c9a227;
            border-color: #c9a227;
        }
        
        .btn-outline-secondary {
            color: #6c757d;
            background-color: transparent;
            border-color: #6c757d;
        }
        
        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }
        
        .btn-outline-danger {
            color: #dc3545;
            background-color: transparent;
            border-color: #dc3545;
        }
        
        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
        
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        
        .w-100 {
            width: 100%;
        }
        
        .mb-2 {
            margin-bottom: 0.5rem;
        }
        
        .mb-3 {
            margin-bottom: 1rem;
        }
        
        .mb-4 {
            margin-bottom: 1.5rem;
        }
        
        .py-4 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        
        .list-group {
            list-style: none;
        }
        
        .list-group-item {
            padding: 0.75rem 1.25rem;
            border: 1px solid rgba(0,0,0,0.125);
        }
        
        .list-unstyled {
            list-style: none;
        }
        
        .text-center {
            text-align: center;
        }
        
        /* ===== GRID SYSTEM ===== */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        
        .col-md-4, .col-md-6, .col-md-8 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media (min-width: 768px) {
            .col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-md-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container navbar-container">
            <a href="/customer/dashboard" class="navbar-brand">THE KICUKIRO HEIGHTS</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/customer/dashboard" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="/customer/bookings" class="nav-link">My Bookings</a>
                </li>
                <li class="nav-item">
                    <a href="/customer/profile" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="container dashboard-content">
        <!-- Success message placeholder -->
        <div class="alert alert-success" style="display: none;">
            <!-- This would show success messages in a real app -->
        </div>

        <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Welcome, {{ Auth::user()->name }}</h5>
                </div>
                <div class="card-body">
                    <p>Thank you for choosing The Kicukiro Heights. We hope you enjoy your stay with us.</p>
                        
                    <div class="alert alert-info">
                        <?php
                        $kigaliTime = \Carbon\Carbon::now('Africa/Kigali')->format('l, F j, Y g:i A');
                        echo "<strong>Current time in Kigali:</strong> <span id='kigali-time'>$kigaliTime</span>";
                        ?>
                     </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Your Upcoming Bookings</h5>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Booking #</th>
                                    <th>Room Type</th>
                                    <th>Guests</th>
                                    <th>Special Requests</th>
                                    <th>Check-In</th>
                                    <th>Check-Out</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach($books as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->roomtype }}</td>
                                        <td>{{ $data->guest}}</td>
                                        <td>{{ $data->request}}</td>
                                        <td>{{ $data->checkin }}</td>
                                        <td>{{ $data->checkout }}</td>
                                        <td>
                                            @if($data->status == 'confirmed')
                                            <span class="badge bg-success">Confirmed</span>
                                            @else
                                            <span class="badge bg-secondary">{{ ucfirst($data->status) }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                </div>
                </div>
            </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5>Hotel Services</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">24/7 Room Service</li>
                            <li class="list-group-item">Infinity Pool (Level 10)</li>
                            <li class="list-group-item">Spa & Wellness Center</li>
                            <li class="list-group-item">Business Lounge</li>
                            <li class="list-group-item">Tesla Shuttle Service</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h5>Quick Actions</h5>
                    </div>
                    <div class="card-body">
                        <a href="/customer/bookings" class="btn btn-primary w-100 mb-2">View All Bookings</a>
                        <a href="/customer/profile" class="btn btn-outline-secondary w-100 mb-2">Update Profile</a>
                        <a href="/logout" class="btn btn-outline-danger w-100">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>