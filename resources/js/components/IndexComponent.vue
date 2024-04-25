<script>
export default {
        name: "IndexComponent",
        data() {
            return {
                people: null,
                editPersonId: null,
                name: null,
                age: null,
                job: null
            }
        },
        mounted() {
            this.getPeople();
            this.changePersonId();
            this.showDataPerson();
        },
        methods: {
            getPeople() {
                axios.get('api/people')
                    .then((response) => {
                        this.people = response.data;
                    })
            },
            updatePerson(id) {
                this.editPersonId = null;
                axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                    .then((response) => {
                        this.getPeople();
                    })
            },
            changePersonId(id) {
                this.editPersonId = id;
            },
            showDataPerson(name, age, job) {
                this.name = name;
                this.age = age;
                this.job = job;
            },
            isEdit(currentId) {
                return this.editPersonId === currentId;
            }
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
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people ">
                <tr :class="isEdit(person.id) ? 'd-none' : ''">
                    <th scope="row">{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td><a @click.prevent="changePersonId(person.id); showDataPerson(person.name, person.age, person.job)" href="javascript:void(0);" class="btn btn-success">Edit</a></td>
                </tr>
                <tr :class="isEdit(person.id) ? '' : 'd-none'">
                    <th scope="row">{{person.id}}</th>
                    <td><input v-model="name" type="text" class="form-control"></td>
                    <td><input v-model="age" type="number" class="form-control"></td>
                    <td><input v-model="job" type="text" class="form-control"></td>
                    <td><a @click.prevent="updatePerson(person.id)" href="javascript:void(0);" class="btn btn-success">Update</a></td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
