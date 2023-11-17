<template>
    <div class="block p-5 m-5 rounded-2xl bg-white shadow-lg sm:w-2/4 justify-items-center ">
        <div class="overflow-auto">
            <h1 class="text-2xl italic font-bold text-[#8C52FF]">FRAMEWORKS</h1>
            <div class="block my-10">
                <div class="flex items-center">
                    <img src="/img/laravelLogo.png" class="w-[25px] h-[25px]" >
                    <h1 class="italic mr-5 ml-2 text-xl text-red-500 font-semibold">{{ props.frameworks[0]?.name }}</h1>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-red-500 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                    <h1 class="italic m-2 text-red-500">{{props.percent1}}%</h1>
                </div>
                <div class="flex"> 
                    <h1 class="my-3 font-bold">Nivel: </h1>
                    <h1 class="my-3 ml-1">{{ props.frameworks[0]?.level }}</h1>
                    <h1 class="my-3 ml-2 font-bold">Año: </h1>
                    <h1 class="my-3 ml-1">{{ props.frameworks[0]?.year }}</h1>
                </div>
            </div>
            <div class="block">
                <div class="flex items-center">
                    <img src="/img/VueLogo.png" class="w-[25px] h-[25px]" >
                    <h1 class="italic mr-8 ml-2 text-xl text-green-500 font-semibold">{{ props.frameworks[1]?.name }}</h1>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 ">
                        <div class="bg-green-500 h-2.5 rounded-full" style="width: 15%"></div>
                    </div>
                    <h1 class="italic m-2 text-green-500">{{props.percent2}}%</h1>
                </div>
                <div class="flex"> 
                    <h1 class="my-3 font-bold">Nivel: </h1>
                    <h1 class="my-3 ml-1">{{ props.frameworks[1]?.level }}</h1>
                    <h1 class="my-3 ml-2 font-bold">Año: </h1>
                    <h1 class="my-3 ml-1">{{ props.frameworks[1]?.year }}</h1>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
const props = defineProps({
  frameworks: Array,
  percent1: Number,
  percent2: Number,
})

</script>