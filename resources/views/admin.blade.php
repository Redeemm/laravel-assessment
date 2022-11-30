<x-guest-layout>


{{--        <div>--}}
{{--            <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->--}}
{{--            <div class="fixed inset-0 z-40 flex md:hidden" role="dialog" aria-modal="true">--}}
{{--                <!----}}
{{--                  Off-canvas menu overlay, show/hide based on off-canvas menu state.--}}

{{--                  Entering: "transition-opacity ease-linear duration-300"--}}
{{--                    From: "opacity-0"--}}
{{--                    To: "opacity-100"--}}
{{--                  Leaving: "transition-opacity ease-linear duration-300"--}}
{{--                    From: "opacity-100"--}}
{{--                    To: "opacity-0"--}}
{{--                -->--}}
{{--                <div class="fixed inset-0 bg-rose-500 bg-opacity-75" aria-hidden="true"></div>--}}

{{--                <!----}}
{{--                  Off-canvas menu, show/hide based on off-canvas menu state.--}}

{{--                  Entering: "transition ease-in-out duration-300 transform"--}}
{{--                    From: "-translate-x-full"--}}
{{--                    To: "translate-x-0"--}}
{{--                  Leaving: "transition ease-in-out duration-300 transform"--}}
{{--                    From: "translate-x-0"--}}
{{--                    To: "-translate-x-full"--}}
{{--                -->--}}
{{--                <div class="relative max-w-xs w-full bg-white pt-5 pb-4 flex-1 flex flex-col">--}}
{{--                    <!----}}
{{--                      Close button, show/hide based on off-canvas menu state.--}}

{{--                      Entering: "ease-in-out duration-300"--}}
{{--                        From: "opacity-0"--}}
{{--                        To: "opacity-100"--}}
{{--                      Leaving: "ease-in-out duration-300"--}}
{{--                        From: "opacity-100"--}}
{{--                        To: "opacity-0"--}}
{{--                    -->--}}
{{--                    <div class="absolute top-0 right-0 -mr-12 pt-2">--}}
{{--                        <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">--}}
{{--                            <span class="sr-only">Close sidebar</span>--}}
{{--                            <!-- Heroicon name: outline/x -->--}}
{{--                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </div>--}}

{{--                    <div class="flex-shrink-0 px-4 flex items-center">--}}
{{--                        <p class="text-rose-500 font-serif text-4xl">Reddev</p>--}}
{{--                    </div>--}}
{{--                    <div class="mt-5 flex-1 h-0 overflow-y-auto">--}}
{{--                        <nav class="px-2 space-y-1">--}}
{{--                            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->--}}
{{--                            <a href="#" class="bg-gray-100 text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">--}}
{{--                                <!----}}
{{--                                  Heroicon name: outline/home--}}

{{--                                  Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"--}}
{{--                                -->--}}
{{--                                <svg class="text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />--}}
{{--                                </svg>--}}
{{--                                Dashboard--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">--}}
{{--                                <!-- Heroicon name: outline/users -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--                                </svg>--}}
{{--                                Team--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">--}}
{{--                                <!-- Heroicon name: outline/folder -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />--}}
{{--                                </svg>--}}
{{--                                Projects--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">--}}
{{--                                <!-- Heroicon name: outline/calendar -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />--}}
{{--                                </svg>--}}
{{--                                Calendar--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">--}}
{{--                                <!-- Heroicon name: outline/inbox -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />--}}
{{--                                </svg>--}}
{{--                                Documents--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-base font-medium">--}}
{{--                                <!-- Heroicon name: outline/chart-bar -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />--}}
{{--                                </svg>--}}
{{--                                Reports--}}
{{--                            </a>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="flex-shrink-0 w-14">--}}
{{--                    <!-- Dummy element to force sidebar to shrink to fit close icon -->--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Static sidebar for desktop -->--}}
{{--            <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">--}}
{{--                <!-- Sidebar component, swap this element with another sidebar if you like -->--}}
{{--                <div class="border-r border-gray-200 pt-5 flex flex-col flex-grow bg-white overflow-y-auto">--}}
{{--                    <div class="flex-shrink-0 px-4 flex items-center">--}}
{{--                        <p class="text-rose-500 text-3xl">Reddev</p>--}}
{{--                    </div>--}}
{{--                    <div class="flex-grow mt-5 flex flex-col">--}}
{{--                        <nav class="flex-1 px-2 pb-4 space-y-1">--}}
{{--                            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->--}}
{{--                            <a href="#" class="bg-gray-100 text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium">--}}
{{--                                <!----}}
{{--                                  Heroicon name: outline/home--}}

{{--                                  Current: "text-gray-500", Default: "text-gray-400 group-hover:text-gray-500"--}}
{{--                                -->--}}
{{--                                <svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />--}}
{{--                                </svg>--}}
{{--                                Dashboard--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium">--}}
{{--                                <!-- Heroicon name: outline/users -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--                                </svg>--}}
{{--                                Team--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium">--}}
{{--                                <!-- Heroicon name: outline/folder -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />--}}
{{--                                </svg>--}}
{{--                                Projects--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium">--}}
{{--                                <!-- Heroicon name: outline/calendar -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />--}}
{{--                                </svg>--}}
{{--                                Calendar--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium">--}}
{{--                                <!-- Heroicon name: outline/inbox -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />--}}
{{--                                </svg>--}}
{{--                                Documents--}}
{{--                            </a>--}}

{{--                            <a href="#" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group rounded-md py-2 px-2 flex items-center text-sm font-medium">--}}
{{--                                <!-- Heroicon name: outline/chart-bar -->--}}
{{--                                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />--}}
{{--                                </svg>--}}
{{--                                Reports--}}
{{--                            </a>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="md:pl-64">--}}
{{--                <div class="max-w-4xl mx-auto flex flex-col md:px-8 xl:px-0">--}}
{{--                    <div class="sticky top-0 z-10 flex-shrink-0 h-16 bg-white border-b border-gray-200 flex">--}}
{{--                        <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">--}}
{{--                            <span class="sr-only">Open sidebar</span>--}}
{{--                            <!-- Heroicon name: outline/menu-alt-2 -->--}}
{{--                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                        <div class="flex-1 flex justify-between px-4 md:px-0">--}}
{{--                            <div class="flex-1 flex">--}}
{{--                                <form class="w-full flex md:ml-0" action="#" method="GET">--}}
{{--                                    <label for="search-field" class="sr-only">Search</label>--}}
{{--                                    <div class="relative w-full text-gray-400 focus-within:text-gray-600">--}}
{{--                                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center">--}}
{{--                                            <!-- Heroicon name: solid/search -->--}}
{{--                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <input id="search-field" class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="ml-4 flex items-center md:ml-6">--}}
{{--                                <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                                    <span class="sr-only">View notifications</span>--}}
{{--                                    <!-- Heroicon name: outline/bell -->--}}
{{--                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />--}}
{{--                                    </svg>--}}
{{--                                </button>--}}

{{--                                <!-- Profile dropdown -->--}}
{{--                                <div class="ml-3 relative">--}}
{{--                                    <div>--}}
{{--                                        <button type="button" class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                                            <span class="sr-only">Open user menu</span>--}}
{{--                                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                                        </button>--}}
{{--                                    </div>--}}

{{--                                    <!----}}
{{--                                      Dropdown menu, show/hide based on menu state.--}}

{{--                                      Entering: "transition ease-out duration-100"--}}
{{--                                        From: "transform opacity-0 scale-95"--}}
{{--                                        To: "transform opacity-100 scale-100"--}}
{{--                                      Leaving: "transition ease-in duration-75"--}}
{{--                                        From: "transform opacity-100 scale-100"--}}
{{--                                        To: "transform opacity-0 scale-95"--}}
{{--                                    -->--}}
{{--                                    <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">--}}
{{--                                        <!-- Active: "bg-gray-100", Not Active: "" -->--}}
{{--                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>--}}

{{--                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>--}}

{{--                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <main class="flex-1">--}}
{{--                        <div class="py-6">--}}
{{--                            <div class="px-4 sm:px-6 md:px-0">--}}
{{--                                <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>--}}
{{--                            </div>--}}



{{--                            <div class="px-4 sm:px-6 md:px-0">--}}
{{--                                <main class="ml-60 pt-16 max-h-screen overflow-auto">--}}
{{--                                    <div class="px-6 py-8">--}}
{{--                                        <div class="max-w-4xl mx-auto">--}}
{{--                                            <div class="bg-white rounded-3xl p-8 mb-5">--}}
{{--                                                <h1 class="text-3xl font-bold mb-10">Messaging ID framework development for the marketing branch</h1>--}}
{{--                                                <div class="flex items-center justify-between">--}}
{{--                                                    <div class="flex items-stretch">--}}
{{--                                                        <div class="text-gray-400 text-xs">Members<br>connected</div>--}}
{{--                                                        <div class="h-100 border-l mx-4"></div>--}}
{{--                                                        <div class="flex flex-nowrap -space-x-3">--}}
{{--                                                            <div class="h-9 w-9">--}}
{{--                                                                <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="h-9 w-9">--}}
{{--                                                                <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="flex items-center gap-x-2">--}}
{{--                                                        <button type="button" class="inline-flex items-center justify-center h-9 px-3 rounded-xl border hover:border-gray-400 text-gray-800 hover:text-gray-900 transition">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">--}}
{{--                                                                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>--}}
{{--                                                            </svg>--}}
{{--                                                        </button>--}}
{{--                                                        <button type="button" class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">--}}
{{--                                                            Open--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                                <hr class="my-10">--}}

{{--                                                <div class="grid grid-cols-2 gap-x-20">--}}
{{--                                                    <div>--}}
{{--                                                        <h2 class="text-2xl font-bold mb-4">Stats</h2>--}}

{{--                                                        <div class="grid grid-cols-2 gap-4">--}}
{{--                                                            <div class="col-span-2">--}}
{{--                                                                <div class="p-4 bg-green-100 rounded-xl">--}}
{{--                                                                    <div class="font-bold text-xl text-gray-800 leading-none">Good day, <br>Kristin</div>--}}
{{--                                                                    <div class="mt-5">--}}
{{--                                                                        <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">--}}
{{--                                                                            Start tracking--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">--}}
{{--                                                                <div class="font-bold text-2xl leading-none">20</div>--}}
{{--                                                                <div class="mt-2">Tasks finished</div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">--}}
{{--                                                                <div class="font-bold text-2xl leading-none">5,5</div>--}}
{{--                                                                <div class="mt-2">Tracked hours</div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-span-2">--}}
{{--                                                                <div class="p-4 bg-purple-100 rounded-xl text-gray-800">--}}
{{--                                                                    <div class="font-bold text-xl leading-none">Your daily plan</div>--}}
{{--                                                                    <div class="mt-2">5 of 8 completed</div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div>--}}
{{--                                                        <h2 class="text-2xl font-bold mb-4">Your tasks today</h2>--}}

{{--                                                        <div class="space-y-4">--}}
{{--                                                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">--}}
{{--                                                                <div class="flex justify-between">--}}
{{--                                                                    <div class="text-gray-400 text-xs">Number 10</div>--}}
{{--                                                                    <div class="text-gray-400 text-xs">4h</div>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Blog and social posts</a>--}}
{{--                                                                <div class="text-sm text-gray-600">--}}
{{--                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">--}}
{{--                                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>--}}
{{--                                                                    </svg>Deadline is today--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">--}}
{{--                                                                <div class="flex justify-between">--}}
{{--                                                                    <div class="text-gray-400 text-xs">Grace Aroma</div>--}}
{{--                                                                    <div class="text-gray-400 text-xs">7d</div>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">New campaign review</a>--}}
{{--                                                                <div class="text-sm text-gray-600">--}}
{{--                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-gray-800 inline align-middle mr-1" viewBox="0 0 16 16">--}}
{{--                                                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>--}}
{{--                                                                    </svg>New feedback--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">--}}
{{--                                                                <div class="flex justify-between">--}}
{{--                                                                    <div class="text-gray-400 text-xs">Petz App</div>--}}
{{--                                                                    <div class="text-gray-400 text-xs">2h</div>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Cross-platform and browser QA</a>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </main>--}}
{{--                                <!-- /End replace -->--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </main>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    <!-- component -->
    <style>
        /* Compiled dark classes from Tailwind */
        .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
            border-color: rgba(55, 65, 81);
        }
        .dark .dark\:bg-gray-50 {
            background-color: rgba(249, 250, 251);
        }
        .dark .dark\:bg-gray-100 {
            background-color: rgba(243, 244, 246);
        }
        .dark .dark\:bg-gray-600 {
            background-color: rgba(75, 85, 99);
        }
        .dark .dark\:bg-gray-700 {
            background-color: rgba(55, 65, 81);
        }
        .dark .dark\:bg-gray-800 {
            background-color: rgba(31, 41, 55);
        }
        .dark .dark\:bg-gray-900 {
            background-color: rgba(17, 24, 39);
        }
        .dark .dark\:bg-red-700 {
            background-color: rgba(185, 28, 28);
        }
        .dark .dark\:bg-green-700 {
            background-color: rgba(4, 120, 87);
        }
        .dark .dark\:hover\:bg-gray-200:hover {
            background-color: rgba(229, 231, 235);
        }
        .dark .dark\:hover\:bg-gray-600:hover {
            background-color: rgba(75, 85, 99);
        }
        .dark .dark\:hover\:bg-gray-700:hover {
            background-color: rgba(55, 65, 81);
        }
        .dark .dark\:hover\:bg-gray-900:hover {
            background-color: rgba(17, 24, 39);
        }
        .dark .dark\:border-gray-100 {
            border-color: rgba(243, 244, 246);
        }
        .dark .dark\:border-gray-400 {
            border-color: rgba(156, 163, 175);
        }
        .dark .dark\:border-gray-500 {
            border-color: rgba(107, 114, 128);
        }
        .dark .dark\:border-gray-600 {
            border-color: rgba(75, 85, 99);
        }
        .dark .dark\:border-gray-700 {
            border-color: rgba(55, 65, 81);
        }
        .dark .dark\:border-gray-900 {
            border-color: rgba(17, 24, 39);
        }
        .dark .dark\:hover\:border-gray-800:hover {
            border-color: rgba(31, 41, 55);
        }
        .dark .dark\:text-white {
            color: rgba(255, 255, 255);
        }
        .dark .dark\:text-gray-50 {
            color: rgba(249, 250, 251);
        }
        .dark .dark\:text-gray-100 {
            color: rgba(243, 244, 246);
        }
        .dark .dark\:text-gray-200 {
            color: rgba(229, 231, 235);
        }
        .dark .dark\:text-gray-400 {
            color: rgba(156, 163, 175);
        }
        .dark .dark\:text-gray-500 {
            color: rgba(107, 114, 128);
        }
        .dark .dark\:text-gray-700 {
            color: rgba(55, 65, 81);
        }
        .dark .dark\:text-gray-800 {
            color: rgba(31, 41, 55);
        }
        .dark .dark\:text-red-100 {
            color: rgba(254, 226, 226);
        }
        .dark .dark\:text-green-100 {
            color: rgba(209, 250, 229);
        }
        .dark .dark\:text-blue-400 {
            color: rgba(96, 165, 250);
        }
        .dark .group:hover .dark\:group-hover\:text-gray-500 {
            color: rgba(107, 114, 128);
        }
        .dark .group:focus .dark\:group-focus\:text-gray-700 {
            color: rgba(55, 65, 81);
        }
        .dark .dark\:hover\:text-gray-100:hover {
            color: rgba(243, 244, 246);
        }
        .dark .dark\:hover\:text-blue-500:hover {
            color: rgba(59, 130, 246);
        }

        /* Custom style */
        .header-right {
            width: calc(100% - 3.5rem);
        }
        .sidebar:hover {
            width: 16rem;
        }
        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }
        }
    </style>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <!-- Header -->
            <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
                <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-rose-300 dark:bg-gray-800 border-none">
                    <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
                    <span class="hidden md:block">ADMIN</span>
                </div>
                <div class="flex justify-between items-center h-14 bg-rose-300 dark:bg-gray-800 header-right">
                    <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
                        <button class="outline-none focus:outline-none">
                            <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                        <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
                    </div>
                    <ul class="flex items-center">
                        <li>
                            <button
                                aria-hidden="true"
                                @click="toggleTheme"
                                class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-rose-200 hover:bg-rose-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
                            >
                                <svg
                                    x-show="isDark"
                                    width="24"
                                    height="24"
                                    class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke=""
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                                    />
                                </svg>
                                <svg
                                    x-show="!isDark"
                                    width="24"
                                    height="24"
                                    class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke=""
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                                    />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                        </li>
                        <li>
                            <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                <span class="inline-flex mr-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./Header -->

            <!-- Sidebar -->
            <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-rose-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-300 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-300 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Board</span>
                                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-300 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-300 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                                <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                            </a>
                        </li>
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center mt-5 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-300 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-rose-300 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
                </div>
            </div>
            <!-- ./Sidebar -->

            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                    <div class="bg-rose-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">1,257</p>
                            <p>Visitors</p>
                        </div>
                    </div>
                    <div class="bg-rose-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">557</p>
                            <p>Orders</p>
                        </div>
                    </div>
                    <div class="bg-rose-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">$11,257</p>
                            <p>Sales</p>
                        </div>
                    </div>
                    <div class="bg-rose-100 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">$75,257</p>
                            <p>Balances</p>
                        </div>
                    </div>
                </div>
                <!-- ./Statistics Cards -->

                <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

                    <!-- Social Traffic -->
                    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                        <div class="rounded-t mb-0 px-0 border-0">
                            <div class="flex flex-wrap items-center px-4 py-2">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Social Traffic</h3>
                                </div>
                                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                    <button class="bg-rose-100 dark:bg-gray-100 text-white active:bg-rose-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                    <tr>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Referral</th>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Visitors</th>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Facebook</th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">5,480</td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2">70%</span>
                                                <div class="relative w-full">
                                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-rose-200">
                                                        <div style="width: 70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-rose-600"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Twitter</th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3,380</td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2">40%</span>
                                                <div class="relative w-full">
                                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-rose-200">
                                                        <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-rose-100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Instagram</th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,105</td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2">45%</span>
                                                <div class="relative w-full">
                                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                                                        <div style="width: 45%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Google</th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,985</td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2">60%</span>
                                                <div class="relative w-full">
                                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                        <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Linkedin</th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2,250</td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2">30%</span>
                                                <div class="relative w-full">
                                                    <div class="overflow-hidden h-2 text-xs flex rounded bg-rose-200">
                                                        <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-rose-700"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ./Social Traffic -->

                    <!-- Recent Activities -->
                    <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                        <div class="rounded-t mb-0 px-0 border-0">
                            <div class="flex flex-wrap items-center px-4 py-2">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recent Activities</h3>
                                </div>
                                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                    <button class="bg-rose-100 dark:bg-gray-100 text-white active:bg-rose-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                                </div>
                            </div>
                            <div class="block w-full">
                                <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Today
                                </div>
                                <ul class="my-1">
                                    <li class="flex px-4">
                                        <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36"><path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path></svg>
                                        </div>
                                        <div class="flex-grow flex items-center border-b border-gray-100 dark:border-gray-400 text-sm text-gray-600 dark:text-gray-100 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                    <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Nick Mark</a> mentioned <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Sara Smith</a> in a new post
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                                        View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex px-4">
                                        <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
                                        </div>
                                        <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                    The post <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Post Name</a> was removed by <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Nick Mark</a>
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                                        View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Yesterday
                                </div>
                                <ul class="my-1">
                                    <li class="flex px-4">
                                        <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36"><path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path></svg>
                                        </div>
                                        <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                    <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">240+</a> users have subscribed to <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Newsletter #1</a>
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                    <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                                        View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ./Recent Activities -->
                </div>

                <!-- Task Summaries -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
                    <div class="md:col-span-2 xl:col-span-3">
                        <h3 class="text-lg font-semibold">Task summaries of recent sprints</h3>
                    </div>
                    <div class="md:col-span-2 xl:col-span-1">
                        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                            <div class="flex justify-between py-1 text-black dark:text-white">
                                <h3 class="text-sm font-semibold">Tasks in TO DO</h3>
                                <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" /></svg>
                            </div>
                            <div class="text-sm text-black dark:text-gray-50 mt-2">
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Delete all references from the wiki</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Remove analytics code</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                    Do a mobile first layout
                                    <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                    <span class="text-xs flex items-center">
                      <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" /></svg>
                      3/5
                    </span>
                                        <img src="https://i.imgur.com/OZaT7jl.png" class="rounded-full" />
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Check the meta tags</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                    Think more tasks for this example
                                    <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                    <span class="text-xs flex items-center">
                      <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" /></svg>
                      0/3
                    </span>
                                    </div>
                                </div>
                                <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                            <div class="flex justify-between py-1 text-black dark:text-white">
                                <h3 class="text-sm font-semibold">Tasks in DEVELOPMENT</h3>
                                <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" /></svg>
                            </div>
                            <div class="text-sm text-black dark:text-gray-50 mt-2">
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Delete all references from the wiki</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Remove analytics code</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                    Do a mobile first layout
                                    <div class="flex justify-between items-start mt-2 ml-2 text-white text-xs">
                    <span class="bg-pink-600 rounded p-1 text-xs flex items-center">
                      <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" /></svg>
                      2
                    </span>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Check the meta tags</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                    Think more tasks for this example
                                    <div class="text-gray-500 mt-2 ml-2 flex justify-between items-start">
                    <span class="text-xs flex items-center">
                      <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" /></svg>
                      0/3
                    </span>
                                    </div>
                                </div>
                                <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                            <div class="flex justify-between py-1 text-black dark:text-white">
                                <h3 class="text-sm font-semibold">Tasks in QA</h3>
                                <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" /></svg>
                            </div>
                            <div class="text-sm text-black dark:text-gray-50 mt-2">
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Delete all references from the wiki</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Remove analytics code</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Do a mobile first layout</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Check the meta tags</div>
                                <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                                    Think more tasks for this example
                                    <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                    <span class="text-xs flex items-center">
                      <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" /></svg>
                      0/3
                    </span>
                                    </div>
                                </div>
                                <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Task Summaries -->

                <!-- Client Table -->
                <div class="mt-4 mx-4">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Client</th>
                                    <th class="px-4 py-3">Amount</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Date</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Hans Burger</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$855.85</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">15-01-2021</td>
                                </tr>
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;facepad=3&amp;fit=facearea&amp;s=707b9c33066bf8808c934c8ab394dff6" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Jolina Angelie</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Unemployed</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$369.75</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full"> Pending </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">23-03-2021</td>
                                </tr>
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;s=b8377ca9f985d80264279f277f3a67f5" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Dave Li</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Influencer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$775.45</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"> Expired </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">09-02-2021</td>
                                </tr>
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Rulia Joberts</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Actress</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$1276.75</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">17-04-2021</td>
                                </tr>
                                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Hitney Wouston</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">Singer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">$863.45</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"> Denied </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">11-01-2021</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                            <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                            <span class="col-span-2"></span>
                            <!-- Pagination -->
                            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                  <ul class="inline-flex items-center">
                    <li>
                      <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                          <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                      </button>
                    </li>
                    <li>
                      <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                    </li>
                    <li>
                      <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                    </li>
                    <li>
                      <button class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-rose-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                    </li>
                    <li>
                      <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                    </li>
                    <li>
                      <span class="px-3 py-1">...</span>
                    </li>
                    <li>
                      <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                    </li>
                    <li>
                      <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                    </li>
                    <li>
                      <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                        <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                          <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                      </button>
                    </li>
                  </ul>
                </nav>
              </span>
                        </div>
                    </div>
                </div>
                <!-- ./Client Table -->

                <!-- Contact Form -->
                <div class="mt-8 mx-4">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                            <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Get in touch</h1>
                            <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">Fill in the form to submit any query</p>

                            <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">Dhaka, Street, State, Postal Code</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">+880 1234567890</div>
                            </div>

                            <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-4 text-md tracking-wide font-semibold w-40">info@demo.com</div>
                            </div>
                        </div>
                        <form class="p-6 flex flex-col justify-center">
                            <div class="flex flex-col">
                                <label for="name" class="hidden">Full Name</label>
                                <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="email" class="hidden">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <div class="flex flex-col mt-2">
                                <label for="tel" class="hidden">Number</label>
                                <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
                            </div>

                            <button type="submit" class="md:w-32 bg-rose-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-rose-100 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- ./Contact Form -->

                <!-- External resources -->
                <div class="mt-8 mx-4">
                    <div class="p-4 bg-rose-100 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                        <h4 class="text-lg font-semibold">Have taken ideas & reused components from the following resources:</h4>
                        <ul>
                            <li class="mt-3">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/sidebar-navigation-1" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="inline-flex pl-2">Sidebar Navigation</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/contact-form-1" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="inline-flex pl-2">Contact Form</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/trello-panel-clone" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="inline-flex pl-2">Section: Task Summaries</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://windmill-dashboard.vercel.app/" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="inline-flex pl-2">Section: Client Table</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://demos.creative-tim.com/notus-js/pages/admin/dashboard.html" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="inline-flex pl-2">Section: Social Traffic</span>
                                </a>
                            </li>
                            <li class="mt-2">
                                <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://mosaic.cruip.com" target="_blank">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="inline-flex pl-2">Section: Recent Activities</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./External resources -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
            }
        }
    </script>


</x-guest-layout>
