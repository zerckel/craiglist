<template>
    <input v-model="searchbar" id="input" class="form-input rounded-md shadow-sm" :placeholder="placeholder" ref="input">
</template>

<script>
export default {
    props: ['value', 'placeholder'],

    methods: {
        focus() {
            this.$emit('focus', this.searchbar)
        },
    },
    data() {
        return {
            searchbar: ""
        }
    },
    watch: {
        searchbar: function (e) {
            if (e.length > 3 || e.length === 0) {
                this.focus()
            }
        }
    }
}
</script>

<style scoped>
#input {
    width: 100%;
}
</style>

