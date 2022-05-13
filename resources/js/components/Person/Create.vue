<template>
    <div class="w-50">
        Person Add
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
            <input @click.prevent="store()" type="submit" class="btn btn-primary" value="Создать">
        </div>
    </div>
</template>

<script>

import router from "../../router";

export default {
    name: "Create",

    data() {
        return {
            name: '',
            age: null,
            job: '',
        }
    },

    methods: {
        store() {
            axios.post('/api/people', {
                name: this.name,
                age: this.age,
                job: this.job,
            })
                .then(res => {
                    console.log(res);
                    router.push({ name: 'person.index'})
                })
                .catch(error => {
                    console.log(error);
                })
        }
    }

}
</script>

<style scoped>

</style>
