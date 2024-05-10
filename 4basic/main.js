gsap.registerPlugin(ScrollTrigger)

gsap.from(".visual .textBox .subtitle",{
    y:50,opacity:0,ease:"expo.out",duration:1,delay:0.5
})
gsap.from(".visual .text",{
    y:50,opacity:0,ease:"expo.out",duration:1,delay:1
})

// slide 
let list = document.querySelectorAll(".work ul li")
console.log(list)

let imgBoxs=document.querySelectorAll(".imgbox")

let txtBoxs=document.querySelectorAll('.textBox')

//가로 스크롤
let scrollTween = gsap.to(list,{
    xPercent:-100*(list.length - 1),
    ease:"none",
    scrollTrigger:{
        trigger:".work",
        start:"center center",
        end:"+=300%",
        scrub:1,
        pin:true
    }
})

//배열 안에 요소를 하나씩 가져와서 어떤 일을 시킨다
imgBoxs.forEach(function(imgbox){ //item은 배열 안에 각각 요소를 순서대로 받는다
    gsap.timeline({
        scrollTrigger:{
            trigger:imgbox,
            start:"center right",
            end:"center center",
            containerAnimation:scrollTween,
            scrub:1,
            markers:true

        }
    })
    .to(imgbox,{'clip-path':'inset(0%)',ease:"none",duration:1},0)

    //왼쪽으로 사라질 때 이미지를 작게
    gsap.timeline({
        scrollTrigger:{
            trigger:imgbox,
            start:"center center",
            end:"center left",
            containerAnimation:scrollTween,
            scrub:1,
            markers:true

        }
    })
    .to(imgbox,{'clip-path':'inset(30%)',ease:"none",duration:1},0)
})

txtBoxs.forEach(function(txtBox){
    gsap.timeline({
        scrollTrigger:{
            trigger:txtBox,
            start:"center 70%",
            end:"center 40%",
            containerAnimation:scrollTween,
            scrub:1,
            markers:true

        }
    })
    .to(txtBoxs,{opacity:1,x:-100},0)

    gsap.timeline({
        scrollTrigger:{
            trigger:txtBox,
            start:"center 30%",
            end:"center 20%",
            containerAnimation:scrollTween,
            scrub:1,
            markers:true

        }
    })
    .to(txtBoxs,{opacity:0},0)

})

