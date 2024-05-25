@extends('layouts.master')
@section('content')
    <div class="flex flex-col max-w-screen-xl justify-end pt-12 mx-auto relative z-0 overflow-x-clip">
        <img src="/assets/graphics/about us.svg" class="sm:h-[500px] characters -z-50 sm:-mb-[26px] -mb-3" alt="">
    </div>
    <div class="bg-dark_1">
        <div class="text-center  text-light_1 max-w-screen-xl mx-auto py-8">
            <h1 class="text-5xl mb-4 font-almaria ">نبذة About Us</h1>
            <p class="text-xl font-madani sm:text-center text-justify mx-6 sm:mx-0">{{ $home->about_us_body }}</p>
        </div>
    </div>
    {{-- Accordion --}}
    <div class=" max-w-screen-xl justify-end py-12 sm:mx-auto mx-6">
        <h1 class="text-5xl mb-4 font-almaria text-center "> أسئلة FAQs</h1>

        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span class="font-madani">{{ $home->about_Q_1 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 bg-sahem_pr-50 border-gray-200   ">
                    <p class="mb-2 text-gray-500  ">{{ $home->about_A_1 }}</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span class="font-madani">{{ $home->about_Q_2 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 bg-sahem_pr-50  border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{ $home->about_A_2 }}</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">{{ $home->about_Q_3 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{ $home->about_A_3 }}</p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">{{ $home->about_Q_4 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{ $home->about_A_4 }}</p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">{{ $home->about_Q_5 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{ $home->about_A_5 }}</p>

                </div>
            </div>

            <h2 id="accordion-collapse-heading-6">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">{{ $home->about_Q_6 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{$home->about_A_6}}</p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-7">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">{{ $home->about_Q_7 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{$home->about_A_7}}
                    </p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-8">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                    aria-controls="accordion-collapse-body-8">
                    <span class="font-madani">{{ $home->about_Q_8 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{$home->about_A_8}}
                    </p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-9">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                    aria-controls="accordion-collapse-body-9">
                    <span class="font-madani">{{ $home->about_Q_9 }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">{{$home->about_A_9}}
                    </p>

                </div>
            </div>
        </div>

    </div>
@endsection
