<template>
 <div class="row">
    <div class="col-md-8">
        <div class="media simple-post" v-for="post in posts" :key="post.id">
          <img class="mr-3" :src="'/img/'+post.image" alt="Generic placeholder image">
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
    </div>
     <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>




      </div>
 </div>
</template>

<script>

    export default {
        data(){
            return{
                posts:[]
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getPosts();
        },
        methods:{
            getPosts(){
                axios.get('/api/category/'+this.$route.params.slug+'/posts')
                .then(res => {
                    console.log(res)
                    this.posts = res.data;
                })
                .then(err => console.log(err))
            }
        }
    }
</script>
