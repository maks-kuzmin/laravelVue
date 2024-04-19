<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: "PostComponent",
    data() {
        return {
            persons: [
                {
                    id: 1,
                    name: 'Ivan',
                    age: 25,
                    job: 'engineer'
                },
                {
                    id: 2,
                    name: 'Sergey',
                    age: 42,
                    job: 'coach'
                },
                {
                    id: 3,
                    name: 'Liza',
                    age: 17,
                    job: 'designer'
                }
            ]
        }
    },
    methods: {
    },
    computed: {
    },
    components: {
        SinglePostComponent
    }
}
</script>

<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
        <SinglePostComponent/>
    </div>
</template>

<style scoped>

</style>
