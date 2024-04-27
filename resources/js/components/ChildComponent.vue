<script>
    export default {
        name: "ChildComponent",
        data() {
            return {
            }
        },
        mounted() {
        },
        methods: {
        },
        props: [
            'obj'
        ]
    }
</script>

<template>
    <div>
        <p>Color: {{obj.color}}</p>
        <p>Number: {{obj.number}}</p>
        <p>Is published: {{obj.isPublished}}</p>
    </div>
</template>

<style scoped>

</style>
