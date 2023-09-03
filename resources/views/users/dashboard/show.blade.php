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

                            {{-- Include transaction history --}}
                            @if ($transactions->isEmpty())
                                <p>No transactions available.</p>
                            @else
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Transaction Number</th>
                                        <th>Currency</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Timestamp</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($transactions->sortBy('timestamp') as $transaction)
                                        <tr>
                                            <td>{{ $transaction->number }}</td>
                                            <td>{{ $transaction->currency }}</td>
                                            <td>{{ $transaction->type }}</td>
                                            <td>{{ $transaction->amount }}</td>
                                            <td>{{ $transaction->timestamp }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
