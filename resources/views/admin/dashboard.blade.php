@extends('admin.layout.app')
@section('title', 'Merchant Dashboard')

@section('content')
<style>
    .stat-card {
    border-radius: 10px;
    border: 1px solid var(--border-color, #e0e0e0);
    background: #fff;
    position: relative;
    height: 130px;
}

.stat-icon {
    width: 35px;
    height: 35px;
    border-radius: 10px;
    border: 1px solid #ddd;
    position: absolute;
    top: 16px;
    left: 16px;
    background: #f8f9fa;
}

.stat-heading {
    position: absolute;
    top: 67px;
    left: 16px;
    font-size: 13px;
    font-weight: 500;
    color: #555;
}

.stat-value {
    position: absolute;
    top: 89px;
    left: 16px;
    font-size: 22px;
    font-weight: 600;
    color: #111;
}

.stat-label {
    position: absolute;
    top: 30px;
    right: 16px;
    font-size: 11px;
    color: #888;
}

.stat-change {
    position: absolute;
    top: 96px;
    right: 16px;
    border-radius: 3px;
    padding: 4px 6px;
    font-size: 11px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 4px;
}

.stat-change.positive {
    background: rgba(0, 200, 83, 0.1);
    color: #00c853;
}

.stat-change.negative {
    background: rgba(244, 67, 54, 0.1);
    color: #f44336;
}

</style>
<div class="main-content" id="mainContent">
        <!-- Top Header -->
        <div class="top-header">
            <div class="header-left">
                <button class="menu-toggle" id="menuToggle">
                    <i class="bi bi-list"></i>
                </button>
                <h1 class="welcome-text">WELCOME MERCHANT!</h1>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search transaction...">
                </div>
                <div class="notification">
                    <div class="notification-icon">
                        <i class="bi bi-bell"></i>
                        <span class="notification-badge">
                            <span class="noti-counter">1</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="dashboard-content">
            <div class="dashboard-header">
                <h2 class="dashboard-title">DASHBOARD</h2>
                <div class="time-filter">
                    <button class="time-btn">Last 7 Days</button>
                    <button class="time-btn">Last 14 Days</button>
                    <button class="time-btn">Last 21 Days</button>
                    <button class="time-btn active">Last 30 Days</button>
                </div>
            </div>

            <div class="row g-3 mb-4">
    <!-- Card Template Example -->
    <div class="col-md-3 col-sm-6">
        <div class="card stat-card position-relative p-3">

            <!-- Icon -->
            <div class="stat-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-shop fs-5 text-primary"></i>
            </div>

            <!-- Heading -->
            <div class="stat-heading">Total Active Merchant</div>

            <!-- Quantity -->
            <div class="stat-value">2.8k</div>

            <!-- Percentage badge -->
            <div class="stat-change positive">
                <i class="bi bi-arrow-up"></i> +2.5%
            </div>

            <!-- Label -->
            <div class="stat-label">Last 30 Days</div>
        </div>
    </div>

    <!-- Total Transaction Today -->
    <div class="col-md-3 col-sm-6">
        <div class="card stat-card position-relative p-3">
            <div class="stat-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-cash-coin fs-5 text-success"></i>
            </div>
            <div class="stat-heading">Total Transaction Today</div>
            <div class="stat-value">18.3k</div>
            <div class="stat-change positive">
                <i class="bi bi-arrow-up"></i> +1.5%
            </div>
            <div class="stat-label">Last 30 Days</div>
        </div>
    </div>

    <!-- Fraud Alert Count -->
    <div class="col-md-3 col-sm-6">
        <div class="card stat-card position-relative p-3">
            <div class="stat-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-exclamation-triangle fs-5 text-warning"></i>
            </div>
            <div class="stat-heading">Fraud Alert Count</div>
            <div class="stat-value">23</div>
            <div class="stat-change positive">
                <i class="bi bi-arrow-up"></i> +5%
            </div>
            <div class="stat-label">Last 30 Days</div>
        </div>
    </div>

    <!-- Pending Approvals -->
    <div class="col-md-3 col-sm-6">
        <div class="card stat-card position-relative p-3">
            <div class="stat-icon d-flex align-items-center justify-content-center">
                <i class="bi bi-hourglass-split fs-5 text-danger"></i>
            </div>
            <div class="stat-heading">Pending Approvals</div>
            <div class="stat-value">47</div>
            <div class="stat-change negative">
                <i class="bi bi-arrow-down"></i> -7.5%
            </div>
            <div class="stat-label">Last 30 Days</div>
        </div>
    </div>
</div>


            <div class="row g-3">
                <!-- Recent Transactions -->
                <div class="col-lg-8">
                    <div class="card transactions-card">
                        <div class="transactions-header">
                            <h3 class="section-title">Recent Transactions</h3>
                            <a href="#" class="view-all-link">View All</a>
                        </div>

                        <div class="table-responsive">
                            <table class="transactions-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>DATE</th>
                                        <th>AMOUNT</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#TXN001</td>
                                        <td>Jan 24 2025</td>
                                        <td>GMD 450.00</td>
                                        <td><span class="status-badge status-completed">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>#TXN001</td>
                                        <td>Jan 24 2025</td>
                                        <td>GMD 450.00</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#TXN001</td>
                                        <td>Jan 24 2025</td>
                                        <td>GMD 450.00</td>
                                        <td><span class="status-badge status-completed">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>#TXN001</td>
                                        <td>Jan 24 2025</td>
                                        <td>GMD 450.00</td>
                                        <td><span class="status-badge status-completed">Completed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="col-lg-4">
                    <div class="card quick-actions">
                        <div class="summary-header">Quick Actions</div>

                        <div class="action-item">
                            <div class="action-icon">
                                <i class="bi bi-receipt"></i>
                            </div>
                            <span class="action-text">Create Invoices</span>
                        </div>

                        <div class="action-item">
                            <div class="action-icon">
                                <i class="bi bi-qr-code"></i>
                            </div>
                            <span class="action-text">Generate QR</span>
                        </div>

                        <div class="action-item">
                            <div class="action-icon">
                                <i class="bi bi-wallet2"></i>
                            </div>
                            <span class="action-text">Disburse Funds</span>
                        </div>

                        <div class="action-item">
                            <div class="action-icon">
                                <i class="bi bi-download"></i>
                            </div>
                            <span class="action-text">Download Statements</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection