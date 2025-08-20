<template>
    <ContentRenderer v-if="policy" :value="policy" /> 
    <div v-else>Policy Not Found</div>  
</template>

<script setup lang="ts">

const {data: policy} = await useAsyncData(() => 
    queryCollection('content').path('/policies/privacy-policy').first()
)
</script>
