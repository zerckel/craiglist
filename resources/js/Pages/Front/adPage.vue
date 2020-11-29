<template>
    <layout>
        <div id="adPage">

        </div>
    </layout>
</template>

<script>
import layout from '../../Layouts/craigTemplate'


export default {
    name: "adPage",
    components: {
        layout
    },
    props: {
        'ad': Object,
        'sub': Object,
        'cat': Object
    },
    methods: {

    }
}
</script>

<style scoped>
#adPage {
    background-color: red;
    min-height: calc(100vh - 4rem - 10vh - 2vh);
    width: 80vw;
}
</style>
