<template>
    <div>
        Person Index
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Имя</th>
                <th scope="col">Возраст</th>
                <th scope="col">Профессия</th>
                <th scope="col">Редактирование</th>
                <th scope="col">Удаление</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people">
                <td>
                    <router-link :to="{ name: 'person.show', params: {id: person.id}}">
                        {{ person.name }}
                    </router-link>
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>
                    <router-link :to="{ name: 'person.edit', params: {id: person.id} }">Редактировать</router-link>
                </td>
                <td>
                    <a href="#" @click.prevent="deletePerson( person.id )" class="btn btn-outline-danger">Удалить</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",

    data() {
        return {
            people: [],
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
                })
        },

        deletePerson(id) {
            axios.delete(`api/people/${id}`)
                .then(res => {
                    this.getPeople()
                })
        }
    }
}
</script>

<style scoped>

</style>
