<template>
    <div class="p-5">
        <div class="row">
            <div class="col-6">
                <h4>Posts</h4>
                <div v-for=" post in posts" :key="post.id" class="card card-body shadow-lg">
                    <h4>{{ post.title}}</h4>
                    <p>{{ post.body}}</p>
                    <button @click="postDetail(post.id)" class="btn" >Read more >></button>
                </div>
            </div>
            <div class="col-6" v-if="postDetails">
                <div class="card card-body bg-primary">
                    <h4>{{ postDetails.title}}</h4>
                    <p>{{ postDetails.body}}</p>
                </div>
                
            </div>
        </div>
        
</div>
        
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return {
                posts:'',
                postDetails:null
            }
        },
        methods:{
               postDetail(id){
                    axios.get(`/api/post/${id}`)
                    .then(data=>{
                        this.postDetails = data.data
                    })
                    .catch(console.error)
                }
        },
        mounted() {
            axios.get('/api/post')
            .then(data=>{
                this.posts = data.data
            })
            .catch(console.error)
        }
    }
</script>
