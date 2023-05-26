<template>
    <div v-for="id in 5" class="calculator">
        <div class="shadow" v-if="shadows[id]">Calculating</div>
        <div>
            <input type="number" v-model="val1[id]">
            +
            <input type="number" v-model="val2[id]">
            =
            {{ result[id] }}
        </div>
        <button @click="calculate(id)">calculate</button>
    </div>
</template>

<style>
.calculator {
    position: relative;
}

.shadow {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.8);
    color: #FFFFFF;
    text-align: center;
}
</style>

<script>
import {reactive, ref} from "vue";

export default {
    setup() {
        const val1 = reactive({});
        const val2 = reactive({});
        const result = reactive({});
        const shadows = reactive({});

        const calculate = async (id) => {
            shadows[id] = true;
            const response = await fetch('/api/calculate', {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    val1: val1[id],
                    val2: val2[id],
                    id: id,
                }),
            })
            // nothing required. result will be delivered with pusher
        };

        Echo.channel(`pusher-test`)
            .listen('.calculated', (e) => {
                shadows[e.id] = false;
                result[e.id] = e.result
            });

        return {
            val1,
            val2,
            result,
            calculate,
            shadows,
        };
    },
    name: 'Calculators'
};
</script>
