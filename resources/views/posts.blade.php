<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts and Comments</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- <div v-for="post in posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <p>{{ post.body }}</p>
            <ul>
                <li v-for="comment in post.comments" :key="comment.id">{{ comment.body }}</li>
            </ul>
        </div> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                posts: []
            },
            mounted() {
                this.fetchPosts();
            },
            methods: {
                fetchPosts() {
                    fetch('/api/posts')
                        .then(response => response.json())
                        .then(data => {
                            this.posts = data;
                        })
                        .catch(error => console.error('Error fetching posts:', error));
                }
            }
        });
    </script>
</body>
</html>