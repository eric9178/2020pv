<template>
    <div>
        {{ row.customer.display_name }}
    </div>
</template>


<script>
    export default {
        props: [
            'row',
            'xprops',
        ],
        data() {
            return {
            }
        },
        created() {
        },
        methods: {
        }
    }
</script>


<style scoped>

</style>
