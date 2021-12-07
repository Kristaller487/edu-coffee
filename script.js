const app = new Vue({
	el: "main",
	data: {
		cart:{

		},
		isLogined: false,
		slider: {
			
			1: "/slider-imgs/img1.png",
			2: "/slider-imgs/img2.png",
			3: "/slider-imgs/img3.png",
			4: "/slider-imgs/img4.png",
			"currentImg": 1,
			"lenght": 4,
		}
	},
	methods: {
		sliderNext(){
			if (this.slider.currentImg < this.slider.lenght){
			
			this.slider.currentImg++
			this.setSliderImg(this.slider.currentImg) 
			//console.log(this.slider.currentImg)
		}else{
			this.slider.currentImg = 1
			this.setSliderImg(this.slider.currentImg)
			//console.log(this.slider.currentImg)
		}
		},
		setSliderImg(img){
			console.log(img)
			let onDocumentImg = document.querySelector("#img" + (img-1))
			if (img == 1) {
				onDocumentImg = document.querySelector("#img" + this.slider.lenght)
			}
			console.log(onDocumentImg)
			onDocumentImg.classList.add("disabled")
			let currentImg = document.querySelector('#img' + img)
			currentImg.classList.remove("disabled")
		},
	},
})