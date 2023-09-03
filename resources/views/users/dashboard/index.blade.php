<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @foreach($userAccounts as $userAccount)
                        <div class="bg-gray-200 dark:bg-gray-700 p-4 rounded-lg mb-4">
                            <div class="font-bold">{{ $userAccount->number }}</div>
                            <div class="text-sm text-gray-600">
                                {{ $userAccount->currency }}
                                @if (array_key_exists($userAccount->currency, config('currencies')))
                                    ({{ config('currencies')[$userAccount->currency]['name'] }})
                                @endif
                            </div>
                            <div class="text-lg font-semibold text-green-600">{{ $userAccount->balance }}</div>
                            <a href="{{ route('account.transactions', ['accountId' => $userAccount->id]) }}" class="btn btn-primary">View Transaction History</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
