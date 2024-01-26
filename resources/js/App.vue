<template>
    <div class="flex flex-col min-h-screen justify-between">
        <Header>
            <LoginAs v-model="user" />
        </Header>
        <main class="flex-1">
            <pre>{{ user }}</pre>
            <Chat />
        </main>
        <Footer />
    </div>
</template>
<script setup>
import Header from "../components/layout/Header.vue";
import Chat from "../components/chat/Chat.vue";
import Footer from "../components/layout/Footer.vue";
import LoginAs from "../components/user/LoginAs.vue";
import { ref, watch } from "vue";
import axios from "axios";

const user = ref(null);

watch(user, (user) => {
    axios.defaults.headers.common["X-User"] = user?.id;
});
</script>
