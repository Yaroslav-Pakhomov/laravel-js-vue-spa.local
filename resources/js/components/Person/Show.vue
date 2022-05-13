<template>
    <div v-if="person">
        Person Show
        <div>
            <router-link :to="{ name: 'person.edit', param: {id: this.person.id} }">Редактировать</router-link>
        </div>
        <div>
            Имя: {{ this.person.name }}
        </div>
        <div>
            Возраст: {{ this.person.age }}
        </div>
        <div>
            Профессия: {{ this.person.job }}
        </div>
    </div>
</template>

<script>
export default {
    name: "Show",

    data() {
        return {
            person: []
        }
    },

    mounted() {
        this.getPerson()
    },

    methods: {
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}`)
                .then(res => {
                    this.person = res.data
                })
        },
    }
}
</script>

<style scoped>

</style>
