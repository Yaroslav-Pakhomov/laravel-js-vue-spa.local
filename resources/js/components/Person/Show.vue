<template>
    <div v-if="person">
        Person Show
        <div>
            <router-link :to="{ name: 'person.edit', param: {id: this.person.id} }">Редактировать</router-link>
        </div>
        <div>
            Имя: {{ person.name }}
        </div>
        <div>
            Возраст: {{ person.age }}
        </div>
        <div>
            Профессия: {{ person.job }}
        </div>
    </div>
</template>

<script>
export default {
    name: "Show",

    // data() {
    //     return {
    //         person: []
    //     }
    // },

    mounted() {
        // this.getPerson()
        this.$store.dispatch('getPerson', this.$route.params.id)
    },

    // methods: {
    //     getPerson() {
    //         axios.get(`/api/people/${this.$route.params.id}`)
    //             .then(res => {
    //                 this.person = res.data.data
    //             })
    //     },
    // }

    computed: {
        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
