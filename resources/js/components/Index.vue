<template>
    <div>
        <router-link to="/">Main</router-link>
        <router-link :to="{ name: 'person.index' }">People</router-link>
        <router-link :to="{ name: 'person.create' }">Add</router-link>
        <br>
        <router-view></router-view>
        Index
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
