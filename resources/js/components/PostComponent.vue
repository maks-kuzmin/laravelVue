<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: "PostComponent",
    data() {
        return {
            name: 'Ivan',
            age: 20,
            arr: {
                'cars': [
                    'lada',
                    'BMW',
                    'kia'
                ]
            },
            someNull: null,
        }
    },
    methods: {
        sayHello() {
            console.log('Hello');
        },
        sayBye() {
            console.log('Bye');
        }
    },
    computed: {
        ivanJob() {
            return ` ${this.name} работает в UserWeb`;
        }
    },
    components: {
        SinglePostComponent
    }
}
</script>

<template>
    <div>
        <h2>{{name}}</h2>
        <div>Computed: {{ivanJob}}</div>
        <button @click="sayHello">Hello</button>
        <button @click="sayBye">Bye</button>
        <SinglePostComponent/>
    </div>
</template>

<style scoped>

</style>
