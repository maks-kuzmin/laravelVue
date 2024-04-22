<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: "PostComponent",
    data() {
        return {
            persons: null
        }
    },
    mounted() {
        this.getPersons();
    },
    methods: {
        getPersons() {
            axios.get("/persons")
                .then( response => {
                    this.persons = response.data;
                })
        }
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
            <tr v-for="person in personsAgeMoreTwenty">
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
