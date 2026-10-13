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

<nav x-data="{ open: false }" class="border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800 sm:min-h-screen sm:w-64 sm:shrink-0 sm:border-b-0 sm:border-e">
    <div class="flex items-center justify-between px-4 py-3 sm:px-6 sm:py-6">
        <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center gap-3">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            <span class="font-semibold text-gray-800 dark:text-gray-200">Clinic Management</span>
        </a>

        <button @click="open = ! open" class="inline-flex items-center justify-center rounded-md p-2 text-gray-500 hover:bg-gray-100 focus:outline-none sm:hidden dark:hover:bg-gray-700" aria-label="Toggle navigation">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div :class="{ 'block': open, 'hidden': ! open }" class="hidden px-3 pb-4 sm:block sm:px-4">
        <div class="space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
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
                        {{ $section }}
                    </h2>
                    <ul class="mt-2 space-y-1">
                        @foreach ($items as $item)
                            <li class="rounded-md px-3 py-2 text-sm text-gray-500 dark:text-gray-400">
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </section>
            @endforeach
        </div>

        <div class="mt-6 border-t border-gray-200 pt-4 dark:border-gray-700">
            <div class="px-3">
                <div class="font-medium text-sm text-gray-800 dark:text-gray-200" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="font-medium text-xs text-gray-500">{{ auth()->user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" :active="request()->routeIs('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
            </div>
        </div>
    </div>
</nav>
