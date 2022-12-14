<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $sweepscake->name }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <p>
            <h2 class="text-xl mt-4">The Sweepscake</h2>
            </p>

            <div class="mt-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-sweepscake-detail-card :sweepscake="$sweepscake"/>
            </div>

            <p>
            <h2 class="text-xl mt-4">Your Bakers</h2>
            </p>

            <div class=" mt-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($bakers->count())
                    <div class="lg:grid lg:grid-cols-2">
                        @foreach ($bakers as $baker)
                            <x-baker-detail-card :baker="$baker"/>
                        @endforeach
                    </div>
                @else
                    <p class="text-center">You have no bakers for this sweepscake.</p>
                @endif
            </div>

            <p>
            <h2 class="text-xl mt-4">Everone's Bakers</h2>
            </p>

            <ul>
                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                User
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Baker
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Age
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Job
                            </th>
                            <th scope="col" class="py-3 px-6">
                                from
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($sweepscakeUserBakers as $sub)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $sub->user->name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $sub->baker->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $sub->baker->age }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $sub->baker->job }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $sub->baker->from }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </ul>

        </div>
    </div>

</x-app-layout>
