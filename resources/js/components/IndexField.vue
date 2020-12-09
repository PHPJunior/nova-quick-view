<template>
    <div>
        <button
            @click="drawer = true"
            class="appearance-none cursor-pointer text-70 hover:text-primary mr-3 drawer-button" style="height: 20px"
            v-tooltip.click="__(field.tooltip)"
        >
            <i :class="field.icon" style="font-size: 20px"></i>
        </button>
        <el-drawer
            :title="field.title"
            :visible.sync="drawer"
            :direction="field.direction"
            :with-header="header"
        >
            <div v-html="field.value" />
        </el-drawer>
    </div>
</template>

<script>

export default {
    props: ['resourceName', 'field'],
    data() {
        return {
            drawer: false,
        };
    },
    computed: {
        header () {
            return !!this.field.title;
        }
    },
    methods: {
        appendButton() {
            let td = this.$el.parentElement;
            td.style.padding = "0px";
            td.style.minWidth = "0px";
            let tr = td.parentElement;
            let btn = td.querySelector('button.drawer-button')
            let el = tr.querySelector('div.inline-flex.items-center')
            el.prepend(btn)
        }
    },
    mounted() {
        this.appendButton();
    }
}
</script>
