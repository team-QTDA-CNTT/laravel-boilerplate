<div 
    class="relative overflow-hidden" 
    x-data="{
        image_urls : [
            'http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide1.jpg',
            'http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide2.jpg',
            'http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/banners/slide3.jpg'
        ],
        'current_index': 1,
        count() {
            return this.image_urls.length;
        },
        next() {
            this.current_index++;
            if(
                this.current_index === this.count()
            ){
                this.current_index = 0;
            }
        },
        previous() {
            this.current_index--;
            if(
                this.current_index < 0
            ){
                this.current_index = this.count() - 1;
            }
        },
        hideImage(index) {
            return this.current_index === index ? '' : 'hidden';
        },
        showDot(index) {
            return this.current_index === index ? 'bg-white' : '';
        }
    }"
>
    <template x-for="index of image_urls.map((url,index) => index)" :key="index">
        <img :class="hideImage(index)" class="w-full" x-bind:src="image_urls[index]">
    </template>
    <label x-on:click="previous()"  class="absolute top-0 left-0 z-50 flex items-center justify-center w-1/6 h-full text-5xl text-white opacity-75 cursor-pointer hover:opacity-100">
        <i class="fas fa-chevron-left"></i>
    </label>
    <label x-on:click="next()" class="absolute top-0 right-0 z-50 flex items-center justify-center w-1/6 h-full text-5xl text-white opacity-75 cursor-pointer hover:opacity-100">
        <i class="fas fa-chevron-right"></i>
    </label>
    <div class="absolute bottom-0 w-full mb-4 text-center">
        <template x-for="index of image_urls.map((url,index) => index)" :key="index">
            <label :class="showDot(index)" class="inline-block w-3 h-3 mx-2 border border-white rounded-full"></label>
        </template>
    </div>
</div>
