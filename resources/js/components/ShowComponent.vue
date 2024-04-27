<script>

export default {
    name: "ShowComponent",
    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },
    props: [
        'person'
    ],
    mounted() {
    },
    methods: {
        deletePerson(personId) {
            this.$parent.editPersonId = null;
            axios.delete(`/api/people/${personId}`)
                .then((response) => {
                    this.$parent.getPeople();
                })
        },
        changePersonId(id) {
            this.$parent.editPersonId = id;
        },
        showDataPerson(id, name, age, job) {
            let componentName = `edit_${id}`;
            this.$parent.$refs[componentName][0].name = name;
            this.$parent.$refs[componentName][0].age = age;
            this.$parent.$refs[componentName][0].job = job;
        },
    }
}
</script>

<template>
    <tr :class="this.$parent.isEdit(person.id) ? 'd-none' : ''">
        <th scope="row">{{ person.id }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td>
            <a @click.prevent="changePersonId(person.id); showDataPerson(person.id, person.name, person.age, person.job)"
               href="javascript:void(0);" class="btn btn-success">Edit</a>
        </td>
        <td>
            <a @click.prevent="deletePerson(person.id)"
               href="javascript:void(0);" class="btn btn-danger">Delete</a>
        </td>
    </tr>
</template>

<style scoped>

</style>
