<template>
    <layout>
        <div id="Home" class="container">
            <div id="listCities" class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <nav id="searchbar">
                                <form action="">
                                    <input-search v-on:focus="searchbar = $event" placeholder="Trouver votre ville"/>
                                </form>
                            </nav>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th class="commune px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Ville
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Département
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                        Code postal
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">

                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="city" :key="citiesDisplay.INSEE" v-for="city in citiesDisplay">
                                        <td class="commune px-6 py-4 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <div class="text-sm leading-5 font-medium text-gray-900">
                                                    {{ city.Commune }}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="text-sm leading-5 text-gray-900">{{ city.Departement }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            {{ city.Codepos }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                            <inertia-link :href="route('City', city.Commune)">
                                                See ads
                                            </inertia-link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <section id="navigation">
                                <button type="button" @click="changeInterval(false)" :class="{grey: interval === 10}">previous</button>
                                <button type="button" @click="changeInterval(true)" :class="{grey: interval >= cities.length}">next</button>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import inputSearch from '../Jetstream/Input'
import buttonSearch from '../Jetstream/Button'
import layout from '../Layouts/craigTemplate'

export default {
    name: "Home",
    components: {
        inputSearch,
        buttonSearch,
        layout
    },
    data() {
        return {
            interval: 10,
            searchbar: ""
        }
    },
    props: {
        cities: Array,
    },
    watch: {
        searchbar: function () {
            if (this.searchbar.length === 0) {
                this.sliceCities()
            } else {
                this.citiesDisplay = this.resultSearch
            }
        }
    },
    methods: {
        changeInterval(boolean){
            this.interval += boolean ? 10 : -10
            this.sliceCities()
        }
    },
    computed: {
        resultSearch() {
            return this.cities.filter((city) => {
                return city.Commune.toLowerCase().includes(this.searchbar.toLowerCase())
            })
        },
        citiesDisplay() {
            return this.citiesFilter.slice((-5 + this.interval), (5 + this.interval))
        },
        citiesFilter(){
            return this.cities.filter( elem => elem.ads.length > 0 )
        }
    },
    created() {
        this.sliceCities()
    }
}
</script>

<style scoped>
#Home {
    min-height: 100vh;
    width: 80vw;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

#Home #searchbar {
    width: 100%;
}

#listCities {
    width: 80%;
}

#listCities .commune {
    width: 50%;
}

#navigation {
    display: flex;
    justify-content: space-between;
}

#navigation button {
    margin: 0 20px;
}

#navigation button.grey {
    visibility: hidden;
}
</style>
