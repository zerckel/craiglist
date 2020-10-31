<template>
    <layout>
        <div id="city">
            <h1>{{ city }}</h1>
            <div>
                <div v-for="category in categoriesList">
                    <h2>{{ category.name }}</h2>
                    <div>
                        <div v-for="sub in category.ads">
                            <span>{{ sub.name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import layout from '../../Layouts/craigTemplate'

export default {
    name: "city",
    components: {
        layout
    },
    props: {
        'categories': Array,
        'city': String
    },
    computed :{
        categoriesList () {
            return this.categories.filter( elem => elem.sub.length > 0 )
        }
    }
}
</script>

<style scoped>
#city {
    width: 80vw;
    margin: auto;
}
#city > h1 {
    width: 100%;
    text-align: center;
    font-size: 30px;
    font-weight: bold;
}
#city > div {
    width: 100%;
    margin-top: 10px;
    display: flex;
    justify-content: space-evenly;
}
#city > div > div {
    padding: 10px 40px;
    border-radius: 5px;
    border: solid 1px #1a202c;
}
#city > div > div > h2 {
    font-weight: bold;
    font-size: 20px;
    border-bottom: solid 1px #1a202c;
    margin-bottom: 2vh;
}
</style>
