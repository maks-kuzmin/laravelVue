<script>
    export default {
        name: "ChildComponent",
        data() {
            return {
            }
        },
        mounted() {
            this.$parent.$parent.parentLog();
        },
        methods: {
            childLog() {
                console.log('this is child');
            }
        }
    }
</script>

<template>
</template>

<style scoped>

</style>
