<template>
    <div id="template">
        <nav id="header" class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="relative flex items-center justify-between h-16 max-width">
                        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                            <button
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out"
                                aria-label="Main menu" aria-expanded="false">

                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"/>
                                </svg>

                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                            <div class="flex-shrink-0">
                                <img class="block lg:hidden h-8 w-auto"
                                     src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                                     alt="Workflow logo">
                                <img class="hidden lg:block h-8 w-auto"
                                     src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                                     alt="Workflow logo">
                            </div>
                            <div v-if="route().current() !== 'Homepage'" class="hidden sm:block sm:ml-6">
                                <div class="flex">
                                    <a href="#"
                                       class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Home</a>
                                    <a href="/login"
                                       class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Profile</a>

                                    <a href="#"
                                       class="ml-4 px-3 py-2 rounded-md text-sm font-medium leading-5 text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Fav</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="route().current() !== 'Homepage'" class="hidden sm:hidden">
                <div class="px-2 pt-2 pb-3">
                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Dashboard</a>
                    <a href="#"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Team</a>
                    <a href="#"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Projects</a>
                    <a href="#"
                       class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Calendar</a>
                </div>
            </div>
        </nav>
        <main>
            <slot></slot>
        </main>
        <footer id="footer">

        </footer>
    </div>
</template>

<script>
export default {
    name: "craigTemplate"
}
</script>

<style scoped>
#template {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}
main {
    display: flex;
    justify-content: center;
    flex-grow: 4;
}
#header {
    top: 0;
    position: sticky;
    margin-bottom: 2vh;
}

footer#footer {
    margin-top: 2vh;
    height: 5vh;
    background-color: #252f3f;
}

.max-width {
    width: 100%;
}
</style>
