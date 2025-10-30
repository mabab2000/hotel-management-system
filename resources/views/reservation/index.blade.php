<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking list - The Kicukiro Heights</title>
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
            margin: 2rem auto;
            padding: 0 15px;
        }
        
        /* ===== HEADER ===== */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e0e6ed;
        }
        
        .header h1 {
            font-size: 1.8rem;
            color: #2C3E50;
        }
        
        .header-actions {
            display: flex;
            gap: 1rem;
        }
        
        /* ===== FILTERS ===== */
        .filters {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .filter-group {
            flex: 1;
            min-width: 200px;
        }
        
        .filter-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .filter-group input, 
        .filter-group select {
            width: 100%;
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        
        .filter-group input:focus, 
        .filter-group select:focus {
            outline: none;
            border-color: #D4AF37;
        }
        
        /* ===== RESERVATION TABLE ===== */
        .reservation-table {
            width: 100%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        
        .table-header {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            background-color: #2C3E50;
            color: white;
            padding: 1rem;
            font-weight: 500;
        }
        
        .table-row {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            padding: 1rem;
            border-bottom: 1px solid #e0e6ed;
            align-items: center;
        }
        
        .table-row:last-child {
            border-bottom: none;
        }
        
        .table-row:hover {
            background-color: #f8f9fa;
        }
        
        .status {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            border-radius: 0.25rem;
            text-align: center;
        }
        
        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .status-checked-in {
            background-color: #cce5ff;
            color: #004085;
        }
        
        .status-checked-out {
            background-color: #e2e3e5;
            color: #383d41;
        }
        
        /* ===== PAGINATION ===== */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 0.5rem;
        }
        
        .page-item {
            list-style: none;
        }
        
        .page-link {
            display: block;
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #2C3E50;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .page-link:hover {
            background-color: #f1f1f1;
        }
        
        .page-link.active {
            background-color: #D4AF37;
            color: white;
            border-color: #D4AF37;
        }
        
        /* ===== BUTTONS ===== */
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s;
            border: 1px solid transparent;
        }
        
        .btn-primary {
            background-color: #D4AF37;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #c9a227;
        }
        
        .btn-outline {
            background-color: transparent;
            border-color: #D4AF37;
            color: #D4AF37;
        }
        
        .btn-outline:hover {
            background-color: #D4AF37;
            color: white;
        }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .table-header, .table-row {
                grid-template-columns: 1fr 1fr;
                gap: 0.5rem;
            }
            
            .table-header span, .table-row > div {
                grid-column: span 1;
            }
            
            .table-header span:nth-child(n+3),
            .table-row > div:nth-child(n+3) {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Booking list</h1>
            <div class="header-actions">
                <button class="btn btn-outline">Export</button>
                <button class="btn btn-primary">+ New Booking</button>
            </div>
        </div>
        
        <!-- Filters -->
        <div class="filters">
            <div class="filter-group">
                <label for="search">Research</label>
                <input type="text" id="search" placeholder="Name, email...">
            </div>
            <div class="filter-group">
                <label for="room-type">Roomtype</label>
                <select id="room-type">
                    <option value="">Tous les types</option>
                    <option value="presidential">Suite Présidentielle</option>
                    <option value="executive">Suite Exécutive</option>
                    <option value="deluxe">Chambre Deluxe</option>
                    <option value="studio">Studio</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="status">Status</label>
                <select id="status">
                    <option value="">All status</option>
                    <option value="confirmed">confirmed</option>
                    <option value="pending">En attente</option>
                    <option value="cancelled">cancelled</option>
                    <option value="checked-in">Check-in</option>
                    <option value="checked-out">Check-out</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="date-range">Period</label>
                <input type="date" id="date-range">
            </div>
        </div>
        
        <!-- Reservation Table -->
        <div class="reservation-table">
            <!-- Table Header -->
            <div class="table-header">
                <span>Name</span>
                <span>Email</span>
                <span>telephone</span>
                <span>roomtype</span>
                <span>Dates</span>
                <span>status</span>
            </div>
            
            <!-- Table Rows -->
            <div class="table-row">
                <div>Jean Dupont</div>
                <div>jean.dupont@example.com</div>
                <div>+250 78 123 4567</div>
                <div>Presidential Suite</div>
                <div>15/06 - 20/06/2023</div>
                <div><span class="status status-confirmed">confirmed</span></div>
            </div>
            
            <div class="table-row">
                <div>Marie Lambert</div>
                <div>marie.lambert@example.com</div>
                <div>+250 78 234 5678</div>
                <div>Suite Exécutive</div>
                <div>18/06 - 22/06/2023</div>
                <div><span class="status status-checked-in">Check-in</span></div>
            </div>
            
            <div class="table-row">
                <div>Paul Kagame</div>
                <div>paul.kagame@example.com</div>
                <div>+250 78 345 6789</div>
                <div>Chambre Deluxe</div>
                <div>10/06 - 15/06/2023</div>
                <div><span class="status status-checked-out">Check-out</span></div>
            </div>
            
            <div class="table-row">
                <div>Alice Mukamana</div>
                <div>alice.m@example.com</div>
                <div>+250 78 456 7890</div>
                <div>Studio</div>
                <div>25/06 - 30/06/2023</div>
                <div><span class="status status-pending">pending</span></div>
            </div>
            
            <div class="table-row">
                <div>David Smith</div>
                <div>david.smith@example.com</div>
                <div>+250 78 567 8901</div>
                <div>Presidential Suite</div>
                <div>05/07 - 10/07/2023</div>
                <div><span class="status status-cancelled">cancelled</span></div>
            </div>
        </div>
        
        <!-- Pagination -->
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link">Previous</a></li>
            <li class="page-item"><a href="#" class="page-link active">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
    </div>
</body>
</html>