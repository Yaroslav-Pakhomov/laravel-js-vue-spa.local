<template>
    <div>
        <router-link :to="{ name: 'person.index' }">People</router-link>
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
