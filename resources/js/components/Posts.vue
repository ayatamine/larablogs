<template>
 <div class="row">
   <div class="col-md-8" v-if="issearching">
     .... searching posts
   </div>
    <div class="col-md-8" v-else>
        <div class="media simple-post" v-for="post in posts.data" :key="post.id">
          <img class="mr-3" :src="'img/'+post.image" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0">
                <router-link :to="'/post/'+post.slug">{{post.title}}</router-link>
            </h4>
             {{post.body.substr(0,150)}}
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">{{post.user.name}}</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i>{{post.added_at}}</span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> {{post.comments_count}} comments</span>

            </ul>
          </div>
        </div>
        <pagination :data="posts" @pagination-change-page="getPosts"></pagination>
    </div>
     <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." v-model="searchpost">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <categories></categories>


      </div>
 </div>
</template>

<script>
import categories from './Categories.vue'
    export default {
        data(){
            return{
                posts:{},
                searchpost:'',
                issearching : false
            }
        },
        components :{
            categories
        },
        watch:{
          searchpost(query){
                  if(query.length > 0){
                    this.issearching =true;
                    console.log(query)
                    axios.get('/api/searchposts/'+query+'?page=1')
                    .then(res => {
                       this.posts = res.data;

                    })
                    .catch(err => {
                      console.log(err)
                    })
                  }else{
                    let oldposts = JSON.parse(localStorage.getItem('posts')) ;
                    this.posts = oldposts;
                  }
                  this.issearching = false
          }
        },
        mounted() {
            console.log('Component mounted.')
            this.getPosts();
        },
        methods:{
            getPosts(page){
                axios.get('/api/posts?page=' + page)
                .then(res => {

                    this.posts = res.data;
                    localStorage.setItem('posts',JSON.stringify(this.posts));
                })
                .then(err => console.log(err))
            }
        }
    }
</script>
