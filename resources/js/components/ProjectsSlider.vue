<template>
    <section class="sertificate" id="projects">
      <h2 class="article-title">Our projects</h2>
      <!--<div v-for="item in all_projects"></div>-->
        <h2 class="article-title2 above "></h2>
        <div class="regular slider margin-top above margin-top-big">

            <div class="project-description" :class="item.type" v-for="item in all_projects">
                <a :href="'/projects/'+item.alias">
                <div class="cut-image">
                <img class="project-images" :src="'https://1c-group.by'+item.image_big" alt="project1">
                </div>
                <p class="project-image-descriptions">
                    {{item.title_rus}}
                </p>
                </a>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['all_projects'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
