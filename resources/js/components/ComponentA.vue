<script setup>
import axios from 'axios';
import { ref } from 'vue';

const posts = ref();

async function sendRequest() {
      try {
        const response = await fetch('/api/posts');
        posts.value = await response.json();
     } catch (error) {
        console.error(error);
  }
}

</script>

<template>
    <button class="inline-flex items-center" @click="sendRequest">Show All Posts and Comments</button>
    <div v-for="post in posts" :key="post.id">
            <h2>Post Title: {{ post.title }}</h2>
            <ul>
                <li v-for="comment in post.comments" :key="comment.id">Comment Body: {{ comment.body }}</li>
            </ul>
        </div>
</template>