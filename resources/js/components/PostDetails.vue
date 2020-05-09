<template>
  <div>
    <div class="">

        <!-- Title -->
        <h1 class="mt-4">{{post.title}}</h1>

        <!-- Author -->
        <p class=" alert alert-info" style="width: fit-content;
        padding: 5px;
        color: #142d31;" v-if="post.category">{{post.category.name}}
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <strong class="badge badge-primary p-1">{{post.added_at}}</strong>
            <span class="float-right"><strong class="badge badge-info p-1">{{post.comments_count}}</strong> comments</span></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" :src="'/img/'+post.image" style="width:900px;max-height:300px" alt="">

        <hr>

        <!-- Post Content -->
       {{post.body}}
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4" v-for="(comment,i) in post.comments" :key="i">
          <img class="d-flex mr-3 rounded-circle" :src="'/img/'+comment.user.profile_img" style="height:50px;width:50px" alt="">
          <div class="media-body">
            <h5 class="mt-0"><strong>{{comment.user.name}}</strong></h5>
            {{comment.body}}
          </div>
        </div>



      </div>
  </div>
</template>

<script>
export default {
   data(){
     return {
       post:''
     }
   },
   created(){
     this.getPost();
   },
   methods:{
     getPost(){
      axios.get('/api/posts/'+this.$route.params.slug)
      .then(res =>{
        console.log(res)
        this.post = res.data
      })
      .catch(err =>{
        console.log(err)
      })
     }
   }
}
</script>