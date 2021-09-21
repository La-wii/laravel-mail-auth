<template>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">SONO IL MAIN</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-6" v-for="post in posts" :key="post.id">
                    <div class="card mb-3">                   
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{post.content}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</template>

<script>
export default {
    name: "Main",
    data(){
        return {
            api: 'http://127.0.0.1:8001/api/posts',
            posts: []
        }
    },
    created(){
        this.getPost();
    },
    methods: {
        getPost(){
            axios.get(this.api)
            .then(resp =>{
                // console.log(resp.data.results);
                this.posts = resp.data.results;
            })
        }
    }
}
</script>

<style lang="scss" scoped>

</style>