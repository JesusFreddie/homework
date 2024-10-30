@extends("layouts.app")
@section("content")
    <div class="w-full flex justify-between items-center">
        <h1 class="text-3xl font-bold py-5">Reports</h1>
    </div>
        <div class="flex justify-between">
            <div class="flex flex-col gap-5 flex-wrap justify-between w-full">
                @foreach ($reports as $report)
                    <div class="flex flex-col p-4 border-2 mb-5 gap-3">
                        <p>
                            <a href="{{route('report.show',$report->id)}}">
                                {{ $report->number }}
                            </a>
                        </p>
                        <p>Описание: {{ $report['description'] }}</p>
                        <form method="POST" action="{{route('report.destroy', $report->id)}}">
                            @method('delete')
                            @csrf
                            <input class="cursor-pointer w-20 bg-red-200 border-red-900 border-2 text-red-900" type="submit" value="Удалить">
                        </form>
                    </div>
                @endforeach
            </div>
            <div id="default-modal" tabindex="-1" aria-hidden="true" class="min-w-16">
                <div class="relative p-4 w-full max-w-2xl max-h-full min-w-16">
                    <!-- Modal content -->
                    <div class="">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Создание отчета
                            </h3>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5 space-y-4 min-w-16" method="POST" action="{{route('report.store')}}">
                            @csrf
                            <div class="flex flex-col min-w-[500px]">
                                <div>
                                    <label for="number" class="block mb-2 text-sm font-medium text-black-900">Номер отчета</label>
                                    <input name="number" type="text" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Номер" required />
                                </div>
                                <div>
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Описание</label>
                                    <textarea name="description" type="text" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Описание" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Создать</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection()
