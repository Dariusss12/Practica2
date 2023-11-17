<template>
    <div class="block p-5 m-5 rounded-2xl bg-white shadow-lg sm:w-2/4 justify-items-center">
      <h1 class="text-2xl italic font-bold text-[#8C52FF]">INTERESES</h1>
      <div class="flex flex-no-wrap overflow-x-scroll scrolling-touch items-start">
        <div class="flex-none w-[100%] sm:w-1/2 px-2 sm:my-[50px]">
          <img src="/img/gamingImg.jpg" class="max-h-[200px] rounded-2xl mx-auto">
          <h1 class="text-2xl text-center font-bold text-[#8C52FF]"> {{props.hobbies[0]?.name}} </h1>
          <h2 class="italic text-center"> {{props.hobbies[0]?.description}} </h2>
        </div>
        <div class="flex-none w-[100%] sm:w-1/2 px-2 sm:my-[50px]">
          <img src="/img/sportImg.jpg" class="max-h-[200px] rounded-2xl mx-auto">
          <h1 class="text-2xl text-center font-bold text-[#8C52FF]"> {{props.hobbies[1]?.name}}</h1>
          <h2 class="italic text-center"> {{props.hobbies[1]?.description}} </h2>
        </div>
      </div>

    </div>
</template>

<script setup lang="ts">

const props = defineProps({
  hobbies: Array
})

</script>