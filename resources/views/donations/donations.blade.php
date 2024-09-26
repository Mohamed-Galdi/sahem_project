@extends('layouts.master')
@section('content')
    {{-- Filter --}}
    <div class="m-10 w-4/5 mx-auto max-w-screen-xl ">

        <div class="flex flex-col">
            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-lg">
                <form class="">
                    <div class="relative mb-10 w-full flex  items-center justify-start rounded-md">
                        <svg class="absolute left-2 block h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" class=""></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
                        </svg>
                        <input type="name" name="donationName"
                            class="h-12 w-full cursor-text rounded-md border border-gray-100 bg-gray-100 py-4 pr-8 pl-12 shadow-sm outline-none focus:border-sahem_pr-500 focus:ring focus:ring-sahem_pr-200 focus:ring-opacity-50"
                            placeholder="إبحث بإستعمال إسم التبرع" />
                    </div>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <div class="flex flex-col">
                            <label for="manufacturer" class="text-sm font-medium text-stone-600">المتبرع</label>

                            <select id="manufacturer" name="donorName"
                                class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-sahem_pr-500 focus:ring focus:ring-sahem_pr-200 focus:ring-opacity-50">
                                <option value="" disabled selected> إختر</option>
                                @foreach ($donors as $donor)
                                    <option value="{{ $donor->name }}">{{ $donor->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="manufacturer" class="text-sm font-medium text-stone-600">المنطقة</label>

                            <select id="manufacturer" name="location"
                                class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-sahem_pr-500 focus:ring focus:ring-sahem_pr-200 focus:ring-opacity-50">
                                <option value="" disabled selected> إختر</option>
                                @foreach ($donors_locations as $location)
                                    <option value="{{ $location }}">{{ $location }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="date" class="text-sm font-medium text-stone-600">نشر إبتداء من تاريخ</label>
                            <div class="relative max-w-sm">

                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker type="text" name="createDate"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sahem_pr-500 focus:border-sahem_pr-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sahem_pr-500 dark:focus:border-sahem_pr-500"
                                    placeholder="Select date">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="date" class="text-sm font-medium text-stone-600">صالحة الى غاية</label>
                            <div class="relative max-w-sm">

                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input datepicker type="text" name="expireDate"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sahem_pr-500 focus:border-sahem_pr-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sahem_pr-500 dark:focus:border-sahem_pr-500"
                                    placeholder="Select date">
                            </div>
                        </div>
                    </div>
                    {{-- <div>
                        <input type="text" name="donationName">
                        <input type="text" name="donorName">
                        <input type="text" name="location">
                        <input type="text" name="createDate">
                        <input type="text" name="expireDate">
                    </div> --}}

                    <div class="mt-6 flex gap-3">
                        <button
                            class="rounded-lg bg-sahem_pr-600 px-8 py-2 font-medium text-white outline-none hover:opacity-80 focus:ring">بحث</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{-- ////////////////////////// --}}
    <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3  gap-12 pt-6 mb-12 px-8 mx-auto max-w-screen-xl ">
        @forelse ($donations as $donation)
            <div class="bg-white  shadow-xl hover:shadow-md rounded-xl dark:bg-gray-800  ">
                <a href={{ route('donation.show', ['donation' => $donation->id]) }} class=""><img
                        src={{ asset('storage/' . $donation->image_url) }} alt=""
                        class="object-cover w-full h-64 rounded-t-lg "></a>
                <div class="p-5">
                    <a href={{ route('donations.show', ['donation' => $donation->id]) }} class="">
                        <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-700 dark:text-gray-400">
                            {{ $donation->donation_name }}</h2>
                    </a>
                    <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! $donation->description !!}</div>
                    <a href={{ route('donation.show', ['donation' => $donation->id]) }} class=" ">

                        <button
                            class="bg-sahem_pr-500 hover:bg-sahem_pr-600 font-semibold py-3 px-5 rounded-full w-full text-light_1 ">قدم
                            طلب</button>

                    </a>

                </div>
            </div>
        @empty
        <div>
        </div>
            <div class="flex justify-center items-center my-24">
                <h2 class="text-3xl">! لا توجد تبرعات مطابقة</h2>
            </div>
        @endforelse
    </div>
    <div class="mx-auto max-w-screen-xl ">
        {{ $donations->links() }}
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
@endsection
