<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? $title : config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            :root {
                color-scheme: light;
                --clinic-bg: #f1f5f9;
                --clinic-surface: #ffffff;
                --clinic-raised: #f8fafc;
                --clinic-border: #cbd5e1;
                --clinic-text: #0f172a;
                --clinic-muted: #475569;
                --clinic-accent: #0284c7;
                --clinic-accent-hover: #0369a1;
            }

            body {
                min-height: 100vh;
                background: var(--clinic-bg) !important;
                color: var(--clinic-text);
            }

            .main-container {
                width: min(100% - 2rem, 1200px);
                max-width: 1200px;
                margin: 2rem auto;
            }

            .navbar.bg-primary {
                position: relative;
                z-index: 10;
                min-height: 76px;
                background: #ffffff !important;
                border-bottom: 1px solid #cbd5e1;
                box-shadow: 0 4px 16px rgb(15 23 42 / 8%);
            }

            .clinic-topbar .navbar-brand,
            .clinic-topbar .clinic-topbar-brand-copy {
                color: #0f172a !important;
                font-weight: 700;
            }

            .clinic-topbar-brand {
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                letter-spacing: 0.01em;
            }

            .clinic-brand-mark {
                display: inline-grid;
                width: 2.5rem;
                height: 2.5rem;
                place-items: center;
                color: #e0f2fe;
                background: linear-gradient(145deg, #0ea5e9, #0369a1);
                border: 1px solid rgb(125 211 252 / 45%);
                border-radius: 0.8rem;
                box-shadow: 0 5px 16px rgb(14 165 233 / 28%);
            }

            .clinic-topbar-subtitle {
                display: block;
                margin-top: 0.1rem;
                color: #475569 !important;
                font-size: 0.7rem;
                font-weight: 500;
                letter-spacing: 0.12em;
                text-transform: uppercase;
            }

            .clinic-topbar-context {
                margin-left: 1.5rem;
                padding-left: 1.5rem;
                color: #334155;
                border-left: 1px solid #cbd5e1;
                font-size: 0.875rem;
            }

            .clinic-topbar-link {
                display: inline-flex;
                min-height: 2.5rem;
                align-items: center;
                justify-content: center;
                gap: 0.5rem;
                padding: 0.5rem 0.85rem;
                color: #0f172a !important;
                border: 1px solid #cbd5e1;
                border-radius: 0.6rem;
                background: #ffffff;
                font-size: 0.875rem;
                font-weight: 600;
                text-decoration: none;
                transition: background-color 150ms ease, border-color 150ms ease, transform 150ms ease;
            }

            .clinic-topbar-link:hover {
                color: #075985 !important;
                border-color: #7dd3fc;
                background: #f0f9ff;
                transform: translateY(-1px);
            }

            .clinic-topbar-link-active {
                color: #075985 !important;
                border-color: #38bdf8;
                background: #e0f2fe;
                box-shadow: inset 0 -2px 0 #0284c7;
            }

            .clinic-topbar-link-primary {
                color: #ffffff !important;
                border-color: #0284c7;
                background: #0284c7;
                box-shadow: 0 3px 12px rgb(2 132 199 / 20%);
            }

            .clinic-topbar-link-primary:hover {
                color: #ffffff !important;
                border-color: #0369a1;
                background: #0369a1;
            }

            .clinic-topbar-link svg {
                color: currentColor;
            }

            .clinic-topbar .clinic-brand-mark {
                color: #fff;
                background: linear-gradient(145deg, #0ea5e9, #0369a1);
                border-color: #7dd3fc;
                box-shadow: 0 5px 18px rgb(14 165 233 / 24%);
            }

            .clinic-sidebar-brand-mark {
                display: inline-grid;
                width: 2.5rem;
                height: 2.5rem;
                flex: 0 0 auto;
                place-items: center;
                color: #ffffff;
                background: linear-gradient(145deg, #0ea5e9, #0369a1);
                border: 1px solid #7dd3fc;
                border-radius: 0.8rem;
                box-shadow: 0 5px 16px rgb(14 165 233 / 18%);
            }

            .clinic-sidebar .clinic-nav-link {
                display: flex;
                min-height: 2.6rem;
                align-items: center;
                gap: 0.75rem;
                padding: 0.55rem 0.75rem;
                border: 1px solid transparent;
                border-radius: 0.65rem;
                color: #334155;
                font-size: 0.9rem;
                font-weight: 500;
                transition: color 150ms ease, background-color 150ms ease, border-color 150ms ease;
            }

            .clinic-sidebar .clinic-nav-link:hover {
                color: #0f172a;
                background: #f1f5f9;
                border-color: #cbd5e1;
            }

            .clinic-sidebar .clinic-nav-link.clinic-active-link {
                color: #075985 !important;
                background: #e0f2fe;
                border-color: #7dd3fc;
                box-shadow: inset 3px 0 0 #0284c7;
            }

            .clinic-nav-icon {
                width: 1.15rem;
                height: 1.15rem;
                flex: 0 0 auto;
                color: #64748b;
            }

            .clinic-nav-link:hover .clinic-nav-icon,
            .clinic-nav-link.clinic-active-link .clinic-nav-icon {
                color: #0284c7;
            }

            .clinic-sidebar .clinic-nav-item {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                padding: 0.5rem 0.75rem;
                color: #475569;
                font-size: 0.875rem;
            }

            .clinic-sidebar section h2 {
                display: flex;
                align-items: center;
                gap: 0.55rem;
                margin-bottom: 0.25rem;
                padding: 0 0.75rem;
                color: #475569 !important;
                font-size: 0.68rem;
                letter-spacing: 0.13em;
            }

            .clinic-section-icon {
                width: 0.95rem;
                height: 0.95rem;
                color: #0284c7;
            }

            .clinic-sidebar .clinic-mobile-toggle {
                color: #334155;
                border: 1px solid #cbd5e1;
                background: #f8fafc;
            }

            .clinic-sidebar .clinic-mobile-toggle:hover {
                color: #075985;
                border-color: #38bdf8;
                background: #e0f2fe;
            }

            .clinic-topbar-link:focus-visible,
            .clinic-sidebar .clinic-nav-link:focus-visible,
            .clinic-sidebar .clinic-mobile-toggle:focus-visible {
                outline: 3px solid #7dd3fc;
                outline-offset: 2px;
            }

            @media (max-width: 639.98px) {
                .clinic-topbar-context {
                    display: none;
                }

                .clinic-topbar-brand-copy {
                    font-size: 0.95rem;
                }

                .clinic-topbar-subtitle {
                    font-size: 0.6rem;
                }

                .clinic-topbar-link {
                    min-height: 2.35rem;
                    gap: 0.35rem;
                    padding: 0.4rem 0.55rem;
                    font-size: 0.75rem;
                }
            }

            .card,
            .card-body {
                color: var(--clinic-text);
                background: var(--clinic-surface);
                border: 1px solid var(--clinic-border);
                border-radius: 12px;
                box-shadow: 0 8px 24px rgb(15 23 42 / 6%);
            }

            h1, h2, h3, h4, h5, h6,
            .fw-bold, .fw-semibold {
                color: var(--clinic-text);
            }

            .text-muted {
                color: var(--clinic-muted) !important;
            }

            .text-primary {
                color: #0369a1 !important;
            }

            .text-danger {
                color: #fca5a5 !important;
            }

            .btn-primary {
                --bs-btn-bg: var(--clinic-accent);
                --bs-btn-border-color: var(--clinic-accent);
                --bs-btn-hover-bg: var(--clinic-accent-hover);
                --bs-btn-hover-border-color: var(--clinic-accent-hover);
                --bs-btn-active-bg: var(--clinic-accent-hover);
                --bs-btn-active-border-color: var(--clinic-accent-hover);
                --bs-btn-color: #ffffff;
                --bs-btn-hover-color: #fff;
                --bs-btn-active-color: #fff;
                font-weight: 600;
            }

            .btn-outline-secondary {
                --bs-btn-color: #334155;
                --bs-btn-border-color: var(--clinic-border);
                --bs-btn-hover-bg: #e2e8f0;
                --bs-btn-hover-border-color: #94a3b8;
                --bs-btn-hover-color: #0f172a;
                --bs-btn-active-bg: #e2e8f0;
                --bs-btn-active-color: #0f172a;
            }

            .btn-outline-primary,
            .btn-outline-info {
                --bs-btn-color: #0369a1;
                --bs-btn-border-color: #0284c7;
                --bs-btn-hover-bg: #0369a1;
                --bs-btn-hover-border-color: #0369a1;
                --bs-btn-hover-color: #fff;
            }

            .form-control,
            .form-select {
                color: #0f172a;
                background-color: #ffffff;
                border-color: #cbd5e1;
            }

            .form-control::placeholder {
                color: #64748b;
                opacity: 1;
            }

            .form-control:focus,
            .form-select:focus {
                color: #0f172a;
                background-color: #ffffff;
                border-color: var(--clinic-accent);
                box-shadow: 0 0 0 0.25rem rgb(14 165 233 / 25%);
            }

            .form-select option {
                color: #0f172a;
                background: #ffffff;
            }

            .form-label {
                color: #334155;
                font-weight: 500;
            }

            .table {
                --bs-table-color: var(--clinic-muted);
                --bs-table-bg: transparent;
                --bs-table-border-color: var(--clinic-border);
                --bs-table-hover-color: var(--clinic-text);
                --bs-table-hover-bg: rgb(51 65 85 / 55%);
                margin-bottom: 0;
            }

            .table > :not(caption) > * > * {
                color: #334155;
                background: transparent;
                border-bottom-color: var(--clinic-border);
            }

            .table thead th {
                color: #0f172a;
                background: #f1f5f9;
                font-size: 0.8rem;
                font-weight: 600;
                letter-spacing: 0.04em;
                text-transform: uppercase;
            }

            .table-hover > tbody > tr:hover > * {
                color: #0f172a;
                background: #f1f5f9;
            }

            .pagination {
                --bs-pagination-color: #334155;
                --bs-pagination-bg: #ffffff;
                --bs-pagination-border-color: #cbd5e1;
                --bs-pagination-hover-color: #0f172a;
                --bs-pagination-hover-bg: #f1f5f9;
                --bs-pagination-hover-border-color: #94a3b8;
                --bs-pagination-focus-color: #0f172a;
                --bs-pagination-focus-bg: #f1f5f9;
                --bs-pagination-active-color: #ffffff;
                --bs-pagination-active-bg: var(--clinic-accent);
                --bs-pagination-active-border-color: var(--clinic-accent);
                --bs-pagination-disabled-color: #94a3b8;
                --bs-pagination-disabled-bg: #ffffff;
                --bs-pagination-disabled-border-color: #cbd5e1;
            }

            .alert-success {
                --bs-alert-color: #166534;
                --bs-alert-bg: #f0fdf4;
                --bs-alert-border-color: #86efac;
            }

            .alert-danger {
                --bs-alert-color: #991b1b;
                --bs-alert-bg: #fef2f2;
                --bs-alert-border-color: #fca5a5;
            }

            .btn-close {
                filter: none;
            }

            .clinic-sidebar {
                color: #0f172a;
                background: #ffffff;
                border-color: #cbd5e1 !important;
            }

            .clinic-sidebar .text-gray-800,
            .clinic-sidebar .text-gray-200,
            .clinic-sidebar .text-gray-500,
            .clinic-sidebar .text-gray-400 {
                color: #334155 !important;
            }

            .clinic-sidebar a {
                color: #334155;
                text-decoration: none;
            }

            .clinic-sidebar a:hover {
                color: #0f172a;
            }

            .clinic-sidebar .clinic-active-link {
                color: #075985 !important;
                background: #e0f2fe;
            }

            .clinic-sidebar section h2 {
                color: #475569 !important;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen sm:flex">
            <livewire:layout.navigation />

            <div class="flex min-w-0 flex-1 flex-col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary clinic-topbar" aria-label="Main navigation">
                    <div class="container-fluid">
                        <a class="navbar-brand clinic-topbar-brand" href="{{ route('dashboard') }}">
                            <span class="clinic-brand-mark" aria-hidden="true">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14M5 12h14" />
                                </svg>
                            </span>
                            <span class="clinic-topbar-brand-copy">
                                Clinic Management
                                <span class="clinic-topbar-subtitle">Care, coordinated</span>
                            </span>
                        </a>
                        <span class="clinic-topbar-context">
                            {{ request()->routeIs('patients.*') ? 'Patient care' : 'Workspace' }}
                        </span>
                        <div class="ms-auto d-flex gap-2">
                            <a href="{{ route('patients.index') }}" @class(['clinic-topbar-link', 'clinic-topbar-link-active' => request()->routeIs('patients.index')]) @if (request()->routeIs('patients.index')) aria-current="page" @endif>
                                <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                <span>Patients</span>
                            </a>
                            <a href="{{ route('patients.create') }}" class="clinic-topbar-link clinic-topbar-link-primary">
                                <svg aria-hidden="true" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14M5 12h14" />
                                </svg>
                                <span>Register</span>
                            </a>
                        </div>
                    </div>
                </nav>

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main class="flex-1">
                    <div class="container main-container">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>Please correct the following errors:</strong>
                                <ul class="mb-0 mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
