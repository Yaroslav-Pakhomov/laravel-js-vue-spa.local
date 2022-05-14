<template>
    <div class="w-50">
        Person Edit
        <div class="m-3">
            <input type="text" class="form-control" v-model="name" placeholder="Имя">
        </div>
        <div class="m-3">
            <input type="number" class="form-control" v-model="age" placeholder="Возраст">
        </div>
        <div class="m-3">
            <input type="text" class="form-control" v-model="job" placeholder="Профессия">
        </div>
        <div class="m-3">
            <input :disabled="!isDisabled" @click.prevent="update()" type="submit" class="btn btn-primary" value="Обновить">
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",

    data() {
        return {
            name: '',
            age: null,
            job: '',
        }
    },

    mounted() {
        this.getPerson()
        // console.log(this.$route.params)
    },

    methods: {
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}`)
                .then(res => {
                    this.name = res.data.data.name
                    this.age = res.data.data.age
                    this.job = res.data.data.job
                })
        },

        update() {
            axios.patch(`/api/people/${this.$route.params.id}`, {
                name: this.name,
                age: this.age,
                job: this.job,
            })
                .then(res => {
                    this.$router.push({name: 'person.show', params: {id: this.$route.params.id}})
                })
        }
    },

    computed: {
        isDisabled() {
            return Boolean(this.name && this.age && this.job)
        }
    }
}
</script>

<style scoped>

</style>
