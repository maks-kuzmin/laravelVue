<script>
export default {
    name: "EditComponent",
    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },
    props: [
        'person',
    ],
    mounted() {
    },
    methods: {
        updatePerson(personId) {
            this.$parent.editPersonId = null;
            axios.patch(`/api/people/${personId}`, {name: this.name, age: this.age, job: this.job})
                .then((response) => {
                    this.$parent.getPeople();
                })
        }
    }
}
</script>

<template>
    <tr :class="this.$parent.isEdit(person.id) ? '' : 'd-none'">
        <th scope="row">{{ person.id }}</th>
        <td><input v-model="name" type="text" class="form-control"></td>
        <td><input v-model="age" type="number" class="form-control"></td>
        <td><input v-model="job" type="text" class="form-control"></td>
        <td>
            <a @click.prevent="updatePerson(person.id)" href="javascript:void(0);" class="btn btn-success">Update</a>
        </td>
        <td></td>
    </tr>
</template>

<style scoped>

</style>
