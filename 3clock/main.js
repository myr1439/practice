//setInterval(함수,시간-3초) //3초마다 함수가 실행

//setInterval(()=>{},1000) //1초마다 할 일



setInterval(()=>{
    let today=new Date();
    let dayList=['sunday','monday','tuesday','wednesday','thursday','friday','saturday'];
    let hh=addZero(today.getHours())
    let mm=addZero(today.getMinutes())
    let ss=addZero(today.getSeconds())
    let MM=today.getMonth()+1 //0~11
    let DD=addZero(today.getDate())
    let yy=today.getFullYear()
    let dd=dayList[today.getDay()].toUpperCase(); //0~6
    

    
    console.log(dd)

    document.querySelector('#hours').innerHTML=hh;
    document.querySelector('#min').innerHTML=mm;
    document.querySelector('#sec').innerHTML=ss;
    document.querySelector('#month').innerHTML=MM;
    document.querySelector('#date').innerHTML=DD;
    document.querySelector('#year').innerHTML=yy;
    document.querySelector('#day').innerHTML=dd;

    function addZero(num){
        return(num<10?"0"+num:num)
    }
},1000)