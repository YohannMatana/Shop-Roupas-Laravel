function carousel() {
    return {
        currentIndex: 0,
        images: ['image1.jpg', 'image2.jpg', 'image3.jpg'], // Adicione os caminhos das suas imagens aqui
        autoRotate() {
            setInterval(() => {
                this.next();
            }, 4000);
        },
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.images.length;
            this.updateCarousel();
        },
        prev() {
            this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            this.updateCarousel();
        },
        goTo(index) {
            this.currentIndex = index;
            this.updateCarousel();
        },
        updateCarousel() {
            this.$refs.carousel.style.transform = `translateX(-${this.currentIndex * 100}%)`;
        }
    }
}