<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('admin.workouts.index') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('admin.dashboard')">
                        {{ __('Wellness Hub') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('profile.edit')">
                        {{ __('Edit your Profile') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('workouts.all')">
                        {{ __('All Workouts') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('admin.workouts.create')">
                        {{ __('Create a new Workouts') }}
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('admin.workouts.index')">
                        {{ __('Edit Workouts') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg fill="#a938e5" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" stroke="#a938e5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Health_application_tracking"> <path d="M408.8137,200.7684H286.4973a21.7241,21.7241,0,0,0-21.7241,21.7242V351.7955A21.7241,21.7241,0,0,0,286.4973,373.52H408.8137a21.7245,21.7245,0,0,0,21.7246-21.7243V222.4926A21.7245,21.7245,0,0,0,408.8137,200.7684Zm9.7246,151.0271a9.7354,9.7354,0,0,1-9.7246,9.7243H286.4973a9.7353,9.7353,0,0,1-9.7241-9.7243V222.4926a9.7352,9.7352,0,0,1,9.7241-9.7242H408.8137a9.7354,9.7354,0,0,1,9.7246,9.7242Z"></path> <path d="M299.6488,251.34h18.766a4.6147,4.6147,0,0,1,4.6147,4.6147V343.2a4.6144,4.6144,0,0,1-4.6144,4.6144h-18.766a4.6147,4.6147,0,0,1-4.6147-4.6147V255.9548A4.6144,4.6144,0,0,1,299.6488,251.34Z"></path> <path d="M338.2723,276.8264h18.766a4.6147,4.6147,0,0,1,4.6147,4.6147V343.2a4.6144,4.6144,0,0,1-4.6144,4.6144H338.2722a4.6143,4.6143,0,0,1-4.6143-4.6143v-61.76A4.6144,4.6144,0,0,1,338.2723,276.8264Z"></path> <path d="M376.8964,235.7738h18.7659a4.6144,4.6144,0,0,1,4.6144,4.6144V343.2a4.6144,4.6144,0,0,1-4.6144,4.6144H376.8967A4.6147,4.6147,0,0,1,372.282,343.2V240.3882a4.6144,4.6144,0,0,1,4.6144-4.6144Z"></path> <path d="M428.8245,138.4727H411.0286l-3.8418-8.6938a10.2206,10.2206,0,0,0-18.3955-.6289l-4.9053,9.3227h-15.65l-6.418-20.9878a10.2221,10.2221,0,0,0-19.8369,1.1851l-8.05,44.8984c-.0576.3238-.1465.5825-.6914.5669-.5879-.0117-.623-.269-.668-.5947l-5.7822-42.169a10.2209,10.2209,0,0,0-19.94-1.4658l-5.2363,17.9976H284.8157a6,6,0,0,0,0,12h18.1318a10.2726,10.2726,0,0,0,9.8145-7.3667l3.2744-11.2534,4.6465,33.8867a12.4773,12.4773,0,0,0,12.3086,10.9629c.0957.0019.19.0029.2851.0029a12.4712,12.4712,0,0,0,12.4668-10.4492l6.751-37.6553,4.65,15.2075a10.1656,10.1656,0,0,0,9.7754,7.2339h18.041a10.1912,10.1912,0,0,0,9.0449-5.4629l3.6914-7.0161,2.8223,6.3887a10.2271,10.2271,0,0,0,9.35,6.09h18.9551a6,6,0,0,0,0-12Z"></path> <path d="M137.91,312.0144a5.1,5.1,0,0,0-5.1,5.1v.9114a1.4249,1.4249,0,0,1-1.4228,1.4229h-7.545a5.1,5.1,0,1,0,0,10.2h7.545a11.6363,11.6363,0,0,0,11.623-11.6229v-.9114A5.1,5.1,0,0,0,137.91,312.0144Z"></path> <path d="M168.9329,319.4487h-7.5454a1.4246,1.4246,0,0,1-1.4229-1.4229v-.9114a5.1,5.1,0,1,0-10.2,0v.9114a11.6356,11.6356,0,0,0,11.6226,11.6229h7.5454a5.1,5.1,0,0,0,0-10.2Z"></path> <path d="M137.91,339.5659H123.8425a5.1,5.1,0,1,0,0,10.2H137.91a5.1,5.1,0,1,0,0-10.2Z"></path> <path d="M168.9329,339.5659H154.865a5.1,5.1,0,1,0,0,10.2h14.0679a5.1,5.1,0,0,0,0-10.2Z"></path> <path d="M157.3689,251.649a2.92,2.92,0,0,0-2.7759-3.8156H138.1848a2.92,2.92,0,0,0-2.7759,3.8157c1.0664,3.3431,3.8282,7.6719,10.98,7.6719S156.3025,254.9921,157.3689,251.649Z"></path> <path d="M442.0271,15.8447h-185.78a31.2326,31.2326,0,0,0-31.2324,31.2326v146.099h-9.4971a13.3028,13.3028,0,0,0-13.0244,10.711l-1.2109,6.1572a13.3259,13.3259,0,0,0,9.5156,15.3623l4.8975,1.3423a1.2761,1.2761,0,0,1,.8945,1.55l-6.7178,25.6533a1.26,1.26,0,0,1-.8545.89,94.353,94.353,0,0,0-21.6308,9.9952,22.2445,22.2445,0,0,1-16.5293,2.666c-.3809-.0864-.7334-.1729-1.0694-.2583,6.1983-5.5454,9.5616-13.8169,9.5616-23.7442,0-17.3364-14.8145-31.44-33.0235-31.44s-33.0224,14.104-33.0224,31.44c0,9.8326,3.3008,18.0415,9.3857,23.5855-.5537.14-1.1318.2842-1.7754.43a22.069,22.069,0,0,1-16.39-2.6284,94.4662,94.4662,0,0,0-21.72-10.0469,1.2558,1.2558,0,0,1-.8486-.89L75.238,228.2994a1.2778,1.2778,0,0,1,.8955-1.5508l4.8965-1.3418a13.326,13.326,0,0,0,9.5157-15.3623l-1.212-6.1577a13.3,13.3,0,0,0-13.0224-10.71H55.6248a13.2154,13.2154,0,0,0-13.11,11.2017,304.27,304.27,0,0,0-3.3271,63.1811,30.5163,30.5163,0,0,0,15.5273,24.7828L94.6482,315.003a10.7114,10.7114,0,0,1,5.3926,8.4453l1.4746,17.9888a46.1331,46.1331,0,0,1-1.9307,17.53l-36.4228,117.3a15.3405,15.3405,0,0,0,14.65,19.8881H107.531A19.1711,19.1711,0,0,0,126.2341,480.92l19.8008-95.8477L165.6082,480.88A19.1659,19.1659,0,0,0,184.32,496.1553h29.6953a15.3405,15.3405,0,0,0,14.65-19.8881l-36.4229-117.3a46.1331,46.1331,0,0,1-1.9306-17.53l1.4765-17.99a10.7067,10.7067,0,0,1,5.3906-8.4443l27.835-15.7951V414.3754a31.2325,31.2325,0,0,0,31.2324,31.2326h185.78A31.2326,31.2326,0,0,0,473.26,414.3754V47.0773A31.2327,31.2327,0,0,0,442.0271,15.8447ZM367.554,31.4615h11.29a6,6,0,0,1,0,12h-11.29a6,6,0,0,1,0-12Zm-48.1241,0h28.2256a6,6,0,0,1,0,12H319.43a6,6,0,0,1,0-12ZM191.2566,304.5665a22.6963,22.6963,0,0,0-11.4277,17.9008l-1.4756,17.9883a58.0571,58.0571,0,0,0,2.4287,22.07l36.4228,117.3a3.3392,3.3392,0,0,1-3.1894,4.33H184.32a7.1221,7.1221,0,0,1-6.9541-5.6777L157.6755,382.1a11.7808,11.7808,0,0,0-11.63-9.5054h-.0137a11.78,11.78,0,0,0-11.6377,9.4805l-19.9121,96.4174a7.1261,7.1261,0,0,1-6.9512,5.6631H77.8123a3.3392,3.3392,0,0,1-3.1895-4.33l36.4229-117.3a58.06,58.06,0,0,0,2.4287-22.07L112,322.4673a22.7005,22.7005,0,0,0-11.43-17.9008L60.6365,281.9048a18.56,18.56,0,0,1-9.4707-15.0556,292.0531,292.0531,0,0,1,3.2-60.5928,1.2716,1.2716,0,0,1,1.2588-1.08H76.3113a1.2762,1.2762,0,0,1,1.249,1.0264l1.2109,6.1572a1.2784,1.2784,0,0,1-.913,1.4737l-4.8955,1.3418a13.32,13.32,0,0,0-9.334,16.163l6.7177,25.6529a13.1216,13.1216,0,0,0,1.086,2.7477,19.7381,19.7381,0,0,0-1.3091,7.8779,5.0954,5.0954,0,0,0,5.09,4.947h.1529a5.0976,5.0976,0,0,0,4.9472-5.2529c-.0073-.232.0049-.4473.0118-.6677a85.9061,85.9061,0,0,1,17.98,8.5072,34.0062,34.0062,0,0,0,25.2569,4.07c.9228-.209,4.5683-1.1353,5.7255-1.3467a9.8994,9.8994,0,0,0,3.4913-18.1226c-6.1788-3.9487-7.4756-11.0161-7.4756-16.25,0-10.72,9.4306-19.44,21.0224-19.44s21.0235,8.7207,21.0235,19.44c0,5.2334-1.2969,12.3008-7.4737,16.2486a9.9221,9.9221,0,0,0-4.6357,8.3828v.1333a9.954,9.954,0,0,0,7.9609,9.7056c.8545.1733,4.0332,1.0146,4.9942,1.2334a34.181,34.181,0,0,0,25.4023-4.1A84.4379,84.4379,0,0,1,212.1,266.4521c.0132.28.0259.56.0171.8589a5.0891,5.0891,0,0,0,4.937,5.2529h.1631a5.0955,5.0955,0,0,0,5.09-4.947,19.5918,19.5918,0,0,0-1.5869-8.5479,13.0243,13.0243,0,0,0,.7607-2.0777l6.7168-25.6519a13.3177,13.3177,0,0,0-9.332-16.164l-4.8965-1.3418a1.277,1.277,0,0,1-.9121-1.4737l1.21-6.1567a1.2764,1.2764,0,0,1,1.25-1.0269h20.6866a1.2707,1.2707,0,0,1,1.2578,1.08v.001a291.8251,291.8251,0,0,1,3.2,60.5918,18.5633,18.5633,0,0,1-9.47,15.0561ZM456.8718,409.9856a17.95,17.95,0,0,1-17.95,17.95H259.3528a17.95,17.95,0,0,1-17.95-17.95V289.3988a30.4041,30.4041,0,0,0,11.2378-21.84,304.1908,304.1908,0,0,0-3.3272-63.1816,13.2082,13.2082,0,0,0-7.9106-10.1414V76.16a17.95,17.95,0,0,1,17.95-17.95H438.9216a17.95,17.95,0,0,1,17.95,17.95Z"></path> </g> </g></svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.workouts.create')" :active="request()->routeIs('admin.workouts.create')">
                {{ __('Create a New Workout') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Edit Workouts') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Edit your Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

