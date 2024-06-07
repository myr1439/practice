gsap.registerPlugin(ScrollTrigger)
function smooth(){
    const lenis = new Lenis()
    
    lenis.on('scroll', (e) => {
      //console.log(e)
    })
    
    lenis.on('scroll', ScrollTrigger.update)
    
    gsap.ticker.add((time)=>{
      lenis.raf(time * 1000)
    })
    
    gsap.ticker.lagSmoothing(0)
}

// smooth()
/////////////////////////////

let workInfoItems=document.querySelectorAll(".work__photo-item");
workInfoItems.forEach((item,index)=>{
    item.style.zIndex=workInfoItems.length - index;
})
//inset(top right bottom left)
gsap.set(".work__photo-item",{
    clipPath:function(){
        return "inset(0px 0px 0px 0px)"
    }
})

let ani=gsap.to(".work__photo-item:not(:last-child)",{
    clipPath:function(){
        return "inset(0px 0px 100% 0px)"
    },
    stagger:.5,
    ease:"none"
})

ScrollTrigger.create({
    trigger:".work",
    start:"top top",
    end:"bottom bottom",
    animation:ani,
    scrub:1
})