@extends('admin.layout.app')
@section('title', 'Merchant Dashboard')

@section('content')

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
                <!-- Amount Balance Card -->
                <div class="col-md-6 col-sm-12">
                    <div class="card balance-card">
                        <div class="balance-header">Amount Balance</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="wallet-item">
                                <div class="wallet-label">
                                    <i class="bi bi-wallet2"></i>
                                    <span>GMD Wallet</span>
                                    <span style="font-size: 11px; color: var(--text-muted);">Last 30 Days</span>
                                </div>
                                <div>
                                    <span class="wallet-amount">45.2k</span>
                                    <span class="change-indicator positive">
                                        <i class="bi bi-arrow-up"></i> +2.5%
                                    </span>
                                </div>
                            </div>

                            <div class="wallet-item">
                                <div class="wallet-label">
                                    <i class="bi bi-building"></i>
                                    <span>In Transpora</span>
                                    <span style="font-size: 11px; color: var(--text-muted);">Last 30 Days</span>
                                </div>
                                <div>
                                    <span class="wallet-amount">$2.8k</span>
                                    <span class="change-indicator positive">
                                        <i class="bi bi-arrow-up"></i> +2.5%
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="action-buttons">
                            <button class="btn-topup">Top Up</button>
                            <button class="btn-withdraw">
                                <i class="bi bi-download"></i> Withdraw
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Today's Summary Card -->
                <div class="col-md-6">
                    <div class="card summary-card">
                        <div class="summary-header">Today's Summary</div>

                        <div class="row g-3">
                            <div class="col-6">
                                <div class="summary-item">
                                    <div class="summary-label">Sales Today</div>
                                    <div class="summary-value">8.4k<span class="summary-unit">GMD</span></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="summary-item">
                                    <div class="summary-label">Transactions</div>
                                    <div class="summary-value">47</div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mt-3">
                            <div class="col-6">
                                <div class="summary-item">
                                    <div class="summary-label">Pending Invoices</div>
                                    <div class="summary-value">12</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="summary-item">
                                    <div class="summary-label">Success Rate</div>
                                    <div class="summary-value">98.2%</div>
                                </div>
                            </div>
                        </div>
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