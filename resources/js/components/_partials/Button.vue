<template>
<button @click="openDrawer" class="appearance-none cursor-pointer text-70 hover:text-primary mr-3" style="height: 20px">
    <i :class="icon" style="font-size: 20px"></i>
</button>
</template>

<script>
export default {
    name: "Button",
    props: ['icon', 'nova', 'ref'],
    methods: {
        openDrawer () {
            this.nova.$emit(this.ref, true)
        }
    }
}
</script>

<style scoped>

</style>
