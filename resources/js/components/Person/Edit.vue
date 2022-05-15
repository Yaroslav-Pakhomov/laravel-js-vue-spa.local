<template>
    <div class="w-50" v-if="person">
        Person Edit
        <div class="m-3">
            <input type="text" class="form-control" v-model="person.name" placeholder="Имя">
        </div>
        <div class="m-3">
            <input type="number" class="form-control" v-model="person.age" placeholder="Возраст">
        </div>
        <div class="m-3">
            <input type="text" class="form-control" v-model="person.job" placeholder="Профессия">
        </div>
        <div class="m-3">
            <input :disabled="!isDisabled"
                   @click.prevent="$store.dispatch('update', {id:person.id, name: person.name, age: person.age, job: person.job,})"
                   type="submit" class="btn btn-primary" value="Обновить">
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",

    // data() {
    //     return {
    //         name: '',
    //         age: null,
    //         job: '',
    //     }
    // },

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
        // console.log(this.$route.params)
    },

    methods: {
        // getPerson() {
        //     axios.get(`/api/people/${this.$route.params.id}`)
        //         .then(res => {
        //             this.name = res.data.data.name
        //             this.age = res.data.data.age
        //             this.job = res.data.data.job
        //         })
        // },

        // update() {
        //     axios.patch(`/api/people/${this.$route.params.id}`, {
        //         name: this.name,
        //         age: this.age,
        //         job: this.job,
        //     })
        //         .then(res => {
        //             this.$router.push({name: 'person.show', params: {id: this.$route.params.id}})
        //         })
        // }
    },

    computed: {
        isDisabled() {
            return Boolean(this.person.name && this.person.age && this.person.job)
        },

        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
