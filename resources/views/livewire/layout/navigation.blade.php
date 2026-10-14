<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

@php
    $navigationIcons = [
        'Dashboard' => 'M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z',
        'Patients' => 'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75',
        'Appointments' => 'M8 2v4M16 2v4M3 10h18M5 4h14a2 2 0 0 1 2 2v14H3V6a2 2 0 0 1 2-2z',
        'Encounters' => 'M8 3H5a2 2 0 0 0-2 2v16h18V5a2 2 0 0 0-2-2h-3M8 3a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2M8 3a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2M8 12h8M8 16h8',
        'Medical Records' => 'M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zM14 2v6h6M8 13h8M8 17h8',
        'Prescriptions' => 'M10 14 21 3M18 6l3 3M3 21l7-7M5 19l-2-2M14 10l-4-4a4 4 0 0 0-6 6l4 4a4 4 0 0 0 6-6z',
        'Laboratory' => 'M9 3h6M10 3v7l-5 8a2 2 0 0 0 2 3h10a2 2 0 0 0 2-3l-5-8V3M8 15h8',
        'Referrals' => 'M7 17 17 7M7 7h10v10M5 3H3v18h18v-2',
        'Billing' => 'M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6',
        'Pharmacy' => 'M10 14 21 3M18 6l3 3M3 21l7-7M5 19l-2-2M14 10l-4-4a4 4 0 0 0-6 6l4 4a4 4 0 0 0 6-6z',
        'Inventory' => 'M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16zM3.3 7 12 12l8.7-5M12 22V12',
        'Patient Reports' => 'M3 3v18h18M8 15l4-4 4 4 5-7',
        'Clinical Reports' => 'M3 3v18h18M8 15l4-4 4 4 5-7',
        'Financial Reports' => 'M3 3v18h18M8 15l4-4 4 4 5-7',
        'Users' => 'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75',
        'Roles & Permissions' => 'M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11zM9 12l2 2 4-4',
        'Clinic Settings' => 'M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM19.4 15a1.7 1.7 0 0 0 .34 1.88l.06.06-1.7 2.94-.08-.02a1.7 1.7 0 0 0-1.77.58l-.05.07h-3.4l-.05-.07a1.7 1.7 0 0 0-1.77-.58l-.08.02-1.7-2.94.06-.06A1.7 1.7 0 0 0 9.6 15l-.08-.04v-3.4l.08-.04a1.7 1.7 0 0 0-.34-1.88L9.2 9.58l1.7-2.94.08.02a1.7 1.7 0 0 0 1.77-.58l.05-.07h3.4l.05.07a1.7 1.7 0 0 0 1.77.58l.08-.02 1.7 2.94-.06.06A1.7 1.7 0 0 0 19.4 12l.08.04v3.4z',
        'Audit Logs' => 'M3 3v5h5M3.05 13A9 9 0 1 0 5 6.3L3 8M12 7v5l4 2',
    ];
    $sectionIcons = [
        'Patient Care' => 'M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z',
        'Clinical' => 'M9 3h6M10 3v7l-5 8a2 2 0 0 0 2 3h10a2 2 0 0 0 2-3l-5-8V3',
        'Operations' => 'M3 3v18h18M8 15l4-4 4 4 5-7',
        'Reports' => 'M3 3v18h18M8 15l4-4 4 4 5-7',
        'Administration' => 'M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM19 13.5l2 1.2-2 3.5-2.2-.8a7 7 0 0 1-2 1.2L14.5 21h-5L9 18.6a7 7 0 0 1-2-1.2l-2.2.8-2-3.5 2-1.2a7 7 0 0 1 0-2.3l-2-1.2 2-3.5 2.2.8a7 7 0 0 1 2-1.2L9.5 4h5l.3 2.4a7 7 0 0 1 2 1.2l2.2-.8 2 3.5-2 1.2a7 7 0 0 1 0 2z',
    ];
@endphp

<nav x-data="{ open: false }" class="clinic-sidebar border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800 sm:min-h-screen sm:w-64 sm:shrink-0 sm:border-b-0 sm:border-e">
    <div class="flex items-center justify-between px-4 py-3 sm:px-6 sm:py-6">
        <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center gap-3">
            <span class="clinic-sidebar-brand-mark" aria-hidden="true">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 5v14M5 12h14" />
                </svg>
            </span>
            <span class="font-semibold text-gray-800 dark:text-gray-200">Clinic Management</span>
        </a>

        <button @click="open = ! open" class="clinic-mobile-toggle inline-flex items-center justify-center rounded-md p-2 focus:outline-none sm:hidden" aria-label="Toggle navigation" :aria-expanded="open.toString()">
            <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                <path :class="{ 'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div :class="{ 'block': open, 'hidden': ! open }" class="hidden px-3 pb-4 sm:block sm:px-4">
        <div class="space-y-1">
            <a href="{{ route('dashboard') }}" wire:navigate @class(['clinic-nav-link', 'clinic-active-link' => request()->routeIs('dashboard')]) @if (request()->routeIs('dashboard')) aria-current="page" @endif>
                <svg class="clinic-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="{{ $navigationIcons['Dashboard'] }}" />
                </svg>
                <span>{{ __('Dashboard') }}</span>
            </a>
        </div>

        @php
            $navigationSections = [
                'Patient Care' => ['Patients', 'Appointments', 'Encounters', 'Medical Records'],
                'Clinical' => ['Prescriptions', 'Laboratory', 'Referrals'],
                'Operations' => ['Billing', 'Pharmacy', 'Inventory'],
                'Reports' => ['Patient Reports', 'Clinical Reports', 'Financial Reports'],
                'Administration' => ['Users', 'Roles & Permissions', 'Clinic Settings', 'Audit Logs'],
            ];
        @endphp

        <div class="mt-5 space-y-5">
            @foreach ($navigationSections as $section => $items)
                <section aria-label="{{ $section }}">
                    <h2 class="px-3 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                        <svg class="clinic-section-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="{{ $sectionIcons[$section] }}" />
                        </svg>
                        {{ $section }}
                    </h2>
                    <ul class="mt-2 space-y-1">
                        @foreach ($items as $item)
                            <li>
                                @if ($section === 'Patient Care' && $item === 'Patients')
                                    <a href="{{ route('patients.index') }}" wire:navigate @class(['clinic-nav-link', 'clinic-active-link' => request()->routeIs('patients.*')]) @if (request()->routeIs('patients.*')) aria-current="page" @endif>
                                        <svg class="clinic-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="{{ $navigationIcons[$item] }}" />
                                        </svg>
                                        <span>{{ $item }}</span>
                                    </a>
                                @else
                                    <span class="clinic-nav-item">
                                        <svg class="clinic-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="{{ $navigationIcons[$item] }}" />
                                        </svg>
                                        <span>{{ $item }}</span>
                                    </span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </section>
            @endforeach
        </div>

        <div class="mt-6 border-t border-gray-200 pt-4 dark:border-gray-700">
            <div class="flex items-center gap-3 px-3">
                <span class="grid h-9 w-9 shrink-0 place-items-center rounded-full border border-sky-400/40 bg-sky-500/15 text-sm font-semibold text-sky-200" aria-hidden="true">
                    {{ mb_strtoupper(mb_substr(auth()->user()->name, 0, 1)) }}
                </span>
                <div class="min-w-0">
                    <div class="truncate font-medium text-sm text-gray-800 dark:text-gray-200" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                    <div class="truncate font-medium text-xs text-gray-500">{{ auth()->user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="{{ route('profile') }}" wire:navigate @class(['clinic-nav-link', 'clinic-active-link' => request()->routeIs('profile')]) @if (request()->routeIs('profile')) aria-current="page" @endif>
                    <svg class="clinic-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                    </svg>
                    <span>{{ __('Profile') }}</span>
                </a>
                <button wire:click="logout" class="clinic-nav-link w-full text-start">
                    <svg class="clinic-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4M16 17l5-5-5-5M21 12H9" />
                    </svg>
                    <span>{{ __('Log Out') }}</span>
                </button>
            </div>
        </div>
    </div>
</nav>
