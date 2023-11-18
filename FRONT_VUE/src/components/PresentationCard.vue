<template>
    <div class="block sm:flex p-5 m-5 rounded-2xl bg-white shadow-lg">
        <img src="/img/profilePic.jpg" class="flex w-[200px] h-[200px] rounded-2xl mx-auto sm:mx-0">
        <div class="block text-center sm:text-left sm:ml-5" >
            <h1 class="text-5xl font-bold text-[#8C52FF]">{{ props.name }} {{ props.lastname }}</h1>
            <h1 class="text-2xl mt-3">{{ props.summary }}</h1>
            <div class="block sm:flex mt-1">
                <h1 class="text-2xl font-bold">Ciudad y País de origen:</h1>
                <h1 class="text-2xl ml-1">{{ props.city }}, {{ props.country }}.</h1>
            </div>
            <div class="flex mt-[30px] md:mt-[20px] lg:mt-[50px] justify-center sm:justify-end self-baseline">
                <a :href="'mailto:' + props.email" class="w-[40px] mx-2" target="_blank" rel="noopener noreferrer">
                    <img src="/icons/emailIcon.svg" class="w-[40px]">
                </a>
                <a href="https://www.facebook.com/profile.php?id=100001206821049" class="w-[40px] mx-2" target="_blank" rel="noopener noreferrer">
                    <img src="/icons/facebookIcon.svg" class="w-[40px]">
                </a>
                <a href="https://www.instagram.com/xzvenn/" class="w-[40px] mx-2" target="_blank" rel="noopener noreferrer">
                    <img src="/icons/instagramIcon.svg" class="w-[40px]">
                </a>
                <a href="https://github.com/Dariusss12" class="w-[40px] mx-2" target="_blank" rel="noopener noreferrer">
                    <img src="/icons/githubIcon.svg" class="w-[40px]">
                </a>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">

const props = defineProps({
  name: String,
  lastname: String,
  summary: String,
  city: String,
  country: String,
  email: String
});

</script>