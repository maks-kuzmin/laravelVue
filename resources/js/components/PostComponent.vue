<script>
import CreateComponent from "./CreateComponent.vue";
import IndexComponent  from "./IndexComponent.vue";

export default {
    name: "PostComponent",
    data() {
        return {
            persons: null
        }
    },
    mounted() {
    },
    methods: {
    },
    computed: {
    },
    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>

<template>
    <div>
        <CreateComponent/>
        <IndexComponent/>
    </div>
</template>

<style scoped>

</style>
