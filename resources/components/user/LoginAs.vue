<template>
    <label for="login-as">
        Login as:
    </label>

    <select v-model="user" class="text-black">
        <option :value="null"></option>
        <option v-for="user in users" :value="user">
            {{ user.email }}
        </option>
    </select>
</template>
<script setup lang="ts">

import { onMounted, ref } from "vue";
import axios from "axios";

type User = { email: string };

const emit = defineEmits(["loginAs"]);
const user = defineModel<User|null>()

const users = ref([] as Array<User>);

onMounted(async () => {
    const { data } = await axios.get("/api/users");
    users.value = data.data;
});

</script>

